<?php
namespace App\Http\Controllers;

use App\Models\Bonusdeposit;
use App\Models\GameTransaction;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentGatewayController extends Controller
{
    public function createPayment(Request $request)
    {
        $user   = Auth::user();
        $amount = (int) preg_replace('/\D/', '', $request->deposite_amount);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post(config('services.payment_gateway.url'), [
            'username'   => $user->username,
            'amount'     => (int) $amount,
            'uuid'       => config('services.payment_gateway.key'),
            'custom_ref' => "userId{$user->id}bonusId{$request->promo_event}",
        ]);

        if ($response->successful()) {
            $dataQR = $response->json();
            return view('components.qr-page-vip', compact('dataQR', 'amount'));
        }

        Log::error('Payment creation failed', [
            'request'  => $request->all(),
            'response' => $response->body(),
        ]);

        return response()->json([
            'success' => false,
            'message' => 'Gagal membuat pembayaran',
        ], $response->status());
    }

    public function handleCallback(Request $request)
    {
        $payload = $request->all();
        Log::info('Payload callback diterima:', $payload);
        $status = $payload['status'] ?? null;

        if ($status !== 'success') {
            return response()->json(['status' => false], 200);
        }

        preg_match('/userId(\d+)bonusId(\d+)/', $payload['custom_ref'], $matches);

        $transactionId = $payload['trx_id'];
        $userId        = $matches[1] ?? null;
        $user          = User::find($userId);

        if (! $user) {
            Log::warning('User tidak ditemukan dari callback', ['user_id' => $userId]);
            return response()->json(['message' => 'User not found'], 404);
        }

        $amount       = (float) $payload['amount'];
        $bonusId      = $matches[2] ?? null;
        $bonusAmount  = 0;
        $bonusDeposit = null;

        if ($bonusId) {
            $bonusDeposit = Bonusdeposit::find($bonusId);
            if ($bonusDeposit) {

                if ($bonusDeposit->type === 'bonus_persen') {
                    $bonusAmount = ($bonusDeposit->amount / 100) * $amount;
                } elseif ($bonusDeposit->type === 'bonus_fixed') {
                    $bonusAmount = $bonusDeposit->amount;
                }

                if ($bonusAmount > $bonusDeposit->max_bonus) {
                    $bonusAmount = $bonusDeposit->max_bonus;
                }
            } else {
                Log::warning('Bonus tidak ditemukan', ['bonus_id' => $bonusId]);
            }
        }

        $totalDepositAmount = $amount + $bonusAmount;

        DB::beginTransaction();
        try {
            $deposit = Transaction::create([
                'user_id'               => $user->id,
                'transaction_id'        => $transactionId,
                'amount'                => $amount,
                'type'                  => 'Deposit',
                'bonus_id'              => $bonusDeposit?->id,
                'note'                  => $payload['note'] ?? null,
                'status'                => 'Approved',
                'sender_bank_name'      => $user->userbank->bank_name ?? '',
                'sender_account_number' => $user->userbank->account_number ?? '',
                'sender_account_name'   => $user->userbank->account_name ?? '',
                'admin'                 => 'VIP Payment-Gateway',
            ]);

            if ($bonusAmount > 0) {
                $bonusTx = Transaction::create([
                    'user_id'          => $user->id,
                    'transaction_id'   => $user->id . time(),
                    'amount'           => $bonusAmount,
                    'type'             => 'Bonus',
                    'sender_bank_name' => 'Bank/Admin',
                    'bonus_id'         => $bonusDeposit->id,
                    'note'             => $bonusDeposit->name,
                    'status'           => 'Approved',
                    'admin'            => 'PG - VIP QRIS',
                ]);
            }

            $userBalance = null;

            $response = ApiTransactions::deposit(
                $user->player_token,
                (int) $totalDepositAmount
            );

            $status      = $response['data']['success'] ?? null;
            $msg         = $response['data']['message'] ?? 'Unknown error';
            $userBalance = $response['data']['balance'] ?? null;

            if ($status || $userBalance === null) {
                DB::rollBack();
                Log::error('Gagal update saldo via provider', ['response' => $response]);
                return response()->json(['message' => $msg], 500);
            }

            $user->update([
                'active_balance' => $userBalance,
                'is_new_member'  => false,
            ]);

            $totalDeposits = Transaction::where('user_id', $user->id)
                ->where('type', 'Deposit')
                ->where('status', 'Approved')
                ->count();

            $isFirstDeposit = $totalDeposits === 1;

            if (
                $user->userReferral &&
                $user->userReferral->referral &&
                $user->userReferral->referral->status === 'active'
            ) {
                $referral = $user->userReferral->referral;

                $userReferral = $user->userReferral;

                if ($isFirstDeposit) {
                    $ndpCommission = $referral->commission_ndp_type === 'percent'
                        ? ($referral->commission_ndp_value / 100) * $deposit->amount
                        : $referral->commission_ndp_value;

                    $referral->referral_balance += $ndpCommission;
                    $referral->save();

                    $userReferral->first_deposit_at     = now();
                    $userReferral->first_deposit_amount = $deposit->amount;
                    $userReferral->ndp_commission       = $ndpCommission;
                    $userReferral->commission_earned    = $ndpCommission;
                    $userReferral->total_deposit_count  = 1;
                    $userReferral->save();
                } else {
                    $rdpCommission = $referral->commission_rdp_type === 'percent'
                        ? ($referral->commission_rdp_value / 100) * $deposit->amount
                        : $referral->commission_rdp_value;

                    $referral->referral_balance += $rdpCommission;
                    $referral->save();

                    $userReferral->rdp_commission_total += $rdpCommission;
                    $userReferral->commission_earned += $rdpCommission;
                    $userReferral->total_deposit_count = $totalDeposits;
                    $userReferral->save();
                }
            }

            DB::commit();

            return response()->json(['message' => 'Callback deposit processed'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Callback deposit error', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Callback failed: ' . $e->getMessage()], 500);
        }
    }
}
