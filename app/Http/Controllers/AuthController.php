<?php
namespace App\Http\Controllers;

use App\Models\Bankdeposit;
use App\Models\Bonusdeposit;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Userbank;
use App\Models\UserReferral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Pusher\Pusher;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'user_name'          => 'required|string|min:6|max:12|unique:users,username',
            'password_register'  => 'required|string|min:8',
            'email'              => 'required|email|unique:users,email',
            'mobileno'           => 'required|string|min:8|max:15',
            'referralCode'       => 'nullable|string|max:255',
            'isRegHasBank'       => 'required|boolean',
            'name'               => 'required|string|max:255',
            'acc_type'           => 'required|integer|in:5,7',
            'acc_no'             => 'required|numeric|digits_between:8,20',
            'registerCaptchaimg' => 'required|digits:4',
            'terms'              => 'accepted',
        ];

        if ((int) $request->acc_type === 7) {
            $rules['ewallet_name'] = 'required|string|max:255';
        } elseif ((int) $request->acc_type === 5) {
            $rules['bank_name'] = 'required|string|max:255';
        }

        $messages = [
            'user_name.required'          => 'Username wajib diisi.',
            'user_name.string'            => 'Username harus berupa teks.',
            'user_name.min'               => 'Username minimal 6 karakter.',
            'user_name.max'               => 'Username maksimal 12 karakter.',
            'user_name.unique'            => 'Username sudah digunakan.',

            'password_register.required'  => 'Password wajib diisi.',
            'password_register.string'    => 'Password harus berupa teks.',
            'password_register.min'       => 'Password minimal 8 karakter.',

            'email.required'              => 'Email wajib diisi.',
            'email.email'                 => 'Format email tidak valid.',
            'email.unique'                => 'Email sudah digunakan.',

            'mobileno.required'           => 'Nomor HP wajib diisi.',
            'mobileno.string'             => 'Nomor HP harus berupa teks.',
            'mobileno.min'                => 'Nomor HP minimal 8 digit.',
            'mobileno.max'                => 'Nomor HP maksimal 15 digit.',

            'referralCode.string'         => 'Kode referral harus berupa teks.',
            'referralCode.max'            => 'Kode referral maksimal 255 karakter.',

            'isRegHasBank.required'       => 'Informasi rekening wajib diisi.',
            'isRegHasBank.boolean'        => 'Format informasi rekening tidak valid.',

            'name.required'               => 'Nama wajib diisi.',
            'name.string'                 => 'Nama harus berupa teks.',
            'name.max'                    => 'Nama maksimal 255 karakter.',

            'acc_type.required'           => 'Jenis akun wajib diisi.',
            'acc_type.integer'            => 'Jenis akun harus berupa angka.',
            'acc_type.in'                 => 'Jenis akun tidak valid.',

            'acc_no.required'             => 'Nomor akun wajib diisi.',
            'acc_no.numeric'              => 'Nomor akun harus berupa angka.',
            'acc_no.digits_between'       => 'Nomor akun harus antara 8 sampai 20 digit.',

            'registerCaptchaimg.required' => 'Captcha wajib diisi.',
            'registerCaptchaimg.digits'   => 'Captcha harus terdiri dari 4 digit.',

            'terms.accepted'              => 'Kamu harus menyetujui syarat dan ketentuan.',

            'ewallet_name.required'       => 'Nama e-wallet wajib diisi.',
            'ewallet_name.string'         => 'Nama e-wallet harus berupa teks.',
            'ewallet_name.max'            => 'Nama e-wallet maksimal 255 karakter.',

            'bank_name.required'          => 'Nama bank wajib diisi.',
            'bank_name.string'            => 'Nama bank harus berupa teks.',
            'bank_name.max'               => 'Nama bank maksimal 255 karakter.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->messages()->first(),
            ], 422);
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'username' => Str::lower($request->input('user_name')),
                'password' => Hash::make($request->input('password_register')),
                'email'    => Str::lower($request->input('email')),
                'phone'    => $request->input('mobileno'),
                'ip'       => $request->ip(),
            ]);

            if ($request->filled('referralCode')) {
                $checkRef = Referral::where('referral_code', $request->referralCode)->first();

                if ($checkRef) {
                    UserReferral::create([
                        'user_id'     => $user->id,
                        'referral_id' => $checkRef->id,
                    ]);
                }
            }

            $bankName = match ((int) $request->acc_type) {
                7 => Str::upper($request->input('ewallet_name')),
                5 => Str::upper($request->input('bank_name')),
            };

            Userbank::create([
                'user_id'        => $user->id,
                'type'           => $request->input('acc_type'),
                'bank_name'      => $bankName,
                'account_name'   => Str::upper($request->input('name')),
                'account_number' => $request->input('acc_no'),
            ]);

            DB::commit();
            Auth::login($user);

            return response()->json(['redirectUrl' => '/register-success'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Maaf, sepertinya ada masalah saat pendaftaran. Mohon untuk mencoba kembali.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user && Auth::attempt($request->only('username', 'password'))) {
            Auth::logoutOtherDevices($request->password);

            if (! $user->can_login) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return response()->json([
                    's' => "f",
                    'm' => "Akunmu telah terkunci. Silahkan hubungi Admin.",
                ]);
            }

            $user->update(['ip' => $request->ip()]);
            $request->session()->regenerate();

            return response()->json([
                's'           => "s",
                'redirectUrl' => "/",
            ]);
        }

        return response()->json([
            's' => "f",
            'm' => "Username atau kata sandi anda salah!",
        ]);
    }

    public function deposits_store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "deposite_amount" => "required|string",
            "promo_event"     => "nullable|exists:bonusdeposits,id",
            "bank_name"       => "required|exists:bankdeposits,id",
            "deposite_method" => "required|in:7,6,5",
        ]);

        if ($validation->fails()) {
            return response()->json(['exception' => 'Validation Error', 'message' => $validation->messages()->first()], 422);
        }

        $user      = Auth::user();
        $adminBank = Bankdeposit::find($request->bank_name);

        $checktransaction = Transaction::where('user_id', $user->id)
            ->where('type', 'Deposit')
            ->where('status', 'Pending')
            ->first();

        if ($checktransaction) {
            $message = "Formulir terlalu sering dikirimkan, harap tunggu dan kirimkan lagi setelah 2 menit atau bisa tanyakan informasi ke CS.";
            return response()->json(['exception' => 'Rate Limit Exceeded', 'message' => $message], 429);
        }

        if ($request->promo_event) {
            $chekBonus = Bonusdeposit::find($request->promo_event);

            if ($chekBonus->category === 'new') {
                $checkUserTransaction = Transaction::where('user_id', Auth::user()->id)
                    ->where('status', 'Approved')
                    ->exists();

                if ($checkUserTransaction) {
                    $message = "Maaf, bonus yang Anda pilih tidak sesuai dengan kriteria akun Anda. Bonus ini hanya berlaku untuk anggota baru.";
                    return response()->json(['exception' => 'Rate Limit Exceeded', 'message' => $message], 429);
                }
            }

            if ($chekBonus->category === 'all') {
                $checkUserTransaction = Transaction::where('user_id', Auth::user()->id)
                    ->where('type', 'Bonus')
                    ->where('bonus_id', $chekBonus->bonus_id)
                    ->count();

                if ($checkUserTransaction >= $chekBonus->max_claims) {
                    $message = "Maaf, Anda telah melebihi batas klaim bonus yang diperbolehkan. Harap cek jumlah klaim Anda dan coba lagi nanti";
                    return response()->json(['exception' => 'Rate Limit Exceeded', 'message' => $message], 429);
                }
            }
        }

        $transaction = Transaction::create([
            'user_id'                  => $user->id,
            'type'                     => 'Deposit',
            'transaction_id'           => $user->id . time(),
            'amount'                   => preg_replace('/\D/', '', $request->deposite_amount),
            'recipient_bank_name'      => $adminBank->bank_name,
            'recipient_account_number' => $adminBank->account_number,
            'recipient_account_name'   => $adminBank->account_name,
            'sender_bank_name'         => $user->userbank->bank_name,
            'sender_account_number'    => $user->userbank->account_number,
            'sender_account_name'      => $user->userbank->account_name,
            'bonus_id'                 => $request->promo_event,
            'note'                     => $request->ref_no,
            'status'                   => 'Pending',
        ]);

        if ($transaction) {
            $message = "There is a new deposit from {$user->username} amounting to IDR {$request->deposite_amount}";
            $this->pusher_notification('deposit', $message);
            $this->pusher_deposit($transaction, $user);
            $message = "Ticket deposit Anda sebesar IDR{$request->deposite_amount} telah berhasil dan telah masuk ke antrian untuk diproses. Mohon menunggu sebentar sampai proses deposit selesai.";
            return response()->json(['status' => 'success', 'msg' => $message], 200);
        }

        return response()->json(['exception' => 'Internal server error', 'message' => 'Transaction could not be processed.'], 500);
    }

    public function checkWalletAmount(Request $request)
    {
        $walletType       = $request->walletType;
        $withdrawalAmount = $request->withdrawal_amount;
        $user             = Auth::user();

        $walletBalances = [
            'game'     => $user->active_balance,
            'referral' => $user->referral->referral_balance ?? 0,
        ];

        if (isset($walletBalances[$walletType]) && $walletBalances[$walletType] >= $withdrawalAmount) {
            return response()->json(true);
        }

        return response()->json(false);
    }

    public function withdrawals_store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "withdrawal_amount" => "required|string",
            "existing_bank"     => "nullable|string",
        ]);

        /** @var \App\Models\User $user */

        $user = Auth::user();

        $checktransaction = Transaction::where('user_id', $user->id)
            ->where('type', 'Withdrawal')
            ->where('status', 'Pending')
            ->first();

        if ($checktransaction) {
            $message = "Formulir terlalu sering dikirimkan, harap tunggu dan kirimkan lagi setelah 2 menit atau bisa tanyakan informasi ke CS.";
            return back()->with(['status' => 'error', 'message' => $message], 429);
        }

        $amount = (float) preg_replace('/\D/', '', $request->withdrawal_amount);

        $response = ApiTransactions::withdraw($user->player_token, $amount);

        if (! $response['data']['success'] ?? false) {
            return back()->with(['status' => 'error', 'message' => 'Transaction could not be processed.'], 302);
        }

        $user->active_balance = $response['data']['balance'];
        $user->save();

        $transaction = Transaction::create([
            'user_id'                  => $user->id,
            'type'                     => 'Withdrawal',
            'transaction_id'           => $user->id . time() . uniqid(),
            'amount'                   => preg_replace('/\D/', '', $request->withdrawal_amount),
            'recipient_bank_name'      => $user->userbank->bank_name,
            'recipient_account_number' => $user->userbank->account_number,
            'recipient_account_name'   => $user->userbank->account_name,
            'status'                   => 'Pending',
        ]);

        if ($transaction) {
            $this->pusher_withdraw($transaction, $user);
            $message = "Ticket withdrawal Anda sebesar IDR {$request->withdrawal_amount} telah berhasil dan telah masuk ke antrian untuk diproses. Mohon menunggu sebentar sampai proses withdrawal selesai.";
            return back()->with(['status' => 'success', 'message' => $message], 302);
        }

        return back()->with(['status' => 'error', 'message' => 'Transaction could not be processed.'], 500);
    }

    public function promo_details(Request $request)
    {
        $bonus = Bonusdeposit::find($request->select_name);

        return view('components.bonus-details', compact('bonus'))->render();
    }

    public function checkStatus($transactionId)
    {
        $isPaid = Transaction::where('transaction_id', $transactionId)
            ->where('status', 'Approved')
            ->exists();

        return response()->json([
            'status' => $isPaid ? 'paid' : 'pending',
        ]);
    }

    public function submit_activation_referral(Request $request)
    {
        if (Auth::user()->referral && Auth::user()->referral->exists()) {
            return redirect()->route('index');
        }

        $validation = Validator::make($request->all(), [
            'user_identification' => 'required|image|mimes:jpeg,png,gif|max:1024',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validation->messages()->first(),
            ], 422);
        }

        $file = $request->file('user_identification');

        $width  = intval(8.56 * 96);
        $height = intval(5.398 * 96);

        $image = Image::make($file)
            ->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->resizeCanvas(
                $width,
                $height,
                'center',
                false,
                '#ffffff'
            )

            ->encode('jpg', 60);

        $base64Image = base64_encode($image);

        Referral::create([
            'user_id'       => Auth::user()->id,
            'referral_code' => rand(1000000000, 9999999999),
            'id_card'       => $base64Image,
        ]);

        return response()->json([
            "status" => "s",
            "msg"    => "Informasi Anda telah dikirimkan untuk ditinjau.",
        ]);
    }

    private function pusher_notification($type, $message)
    {
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster'   => 'ap1',
                'encrypted' => true,
            ]
        );

        return $pusher->trigger('my-channel', 'my-event', ['type' => $type, 'message' => $message]);
    }

    private function pusher_deposit($transaction, $user)
    {
        $data = [
            "id"                       => $transaction->id,
            "type"                     => $transaction->type,
            "status"                   => $transaction->status,
            "created_at"               => $transaction->created_at,
            "user_id"                  => $user->id,
            "bonus_id"                 => $transaction->bonus_id,
            "amount"                   => $transaction->amount,
            "recipient_bank_name"      => $transaction->recipient_bank_name,
            "recipient_account_number" => $transaction->recipient_account_number,
            "recipient_account_name"   => $transaction->recipient_account_name,
            "sender_bank_name"         => $transaction->sender_bank_name,
            "sender_account_number"    => $transaction->sender_account_number,
            "sender_account_name"      => $transaction->sender_account_name,
            "note"                     => $transaction->note,
            "new_tag"                  => $user->is_new_member ? 'no_transactions' : 'NEW',
            "user"                     => [
                "id"           => $user->id,
                "player_token" => $user->player_token,
                "username"     => $user->username,
            ],
        ];

        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster'   => 'ap1',
                'encrypted' => true,
            ]
        );
        return $pusher->trigger('my-channel', 'my-event-deposit', $data);
    }

    private function pusher_withdraw($transaction, $user)
    {
        $data = [
            "id"                       => $transaction->id,
            "type"                     => $transaction->type,
            "status"                   => $transaction->status,
            "created_at"               => $transaction->created_at,
            "user_id"                  => $user->id,
            "bonus_id"                 => $transaction->bonus_id,
            "amount"                   => $transaction->amount,
            "recipient_bank_name"      => $transaction->recipient_bank_name,
            "recipient_account_number" => $transaction->recipient_account_number,
            "recipient_account_name"   => $transaction->recipient_account_name,
            "sender_bank_name"         => $transaction->sender_bank_name,
            "sender_account_number"    => $transaction->sender_account_number,
            "sender_account_name"      => $transaction->sender_account_name,
            "note"                     => $transaction->note,
            "new_tag"                  => $user->is_new_member ? 'no_transactions' : 'NEW',
            "user"                     => [
                "id"           => $user->id,
                "player_token" => $user->player_token,
                "username"     => $user->username,
            ],
        ];

        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'useTLS'  => config('broadcasting.connections.pusher.options.useTLS', true),
            ]
        );

        return $pusher->trigger('my-channel', 'my-event-withdraw', $data);
    }

    public function chg_pass(Request $request)
    {
        $request->validate([
            'currentPwd' => 'required',
            'confirmPwd' => 'required|min:8',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Karena password dicast sebagai 'hashed', pakai ->value() saat dibandingkan
        if (! Hash::check($request->currentPwd, $user->getOriginal('password'))) {
            return response()->json([
                'exception' => "Internal server error",
                'message'   => "The current password is incorrect.",
            ], 500);
        }

        // Langsung assign tanpa Hash::make(), Laravel akan hash otomatis
        $user->password = $request->confirmPwd;
        $user->save();

        return response()->json(["data" => ""]);
    }

    public function getBal()
    {
        try {
            /** @var \App\Models\User $user */
            $user = Auth::user();

            if ($user->is_playing) {
                $response = ApiTransactions::checkBalance($user->player_token);

                $status  = $response['data']['success'] ?? false;
                $balance = $response['data']['balance'] ?? null;

                if ($status == 1 && $balance !== null) {
                    $user->active_balance = $balance;
                    $user->save();

                    return [
                        'data' => number_format((float) $balance, 2),
                    ];
                }
            }

            return [
                'data' => number_format((float) $user->active_balance, 2),
            ];
        } catch (\Throwable $e) {
            Log::error('getBal error', [
                'user_id' => Auth::id(),
                'message' => $e->getMessage(),
            ]);

            return [
                'data' => number_format((float) Auth::user()->active_balance, 2),
            ];
        }
    }
}
