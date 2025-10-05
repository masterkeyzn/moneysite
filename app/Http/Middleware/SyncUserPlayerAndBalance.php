<?php
namespace App\Http\Middleware;

use App\Http\Controllers\ApiTransactions;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class SyncUserPlayerAndBalance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            /** @var \App\Models\User $user */
            $user = Auth::user();

            if ($user->player_token === null) {
                $this->createPlayerToken($user);
            }

            if ($user->is_playing) {
                $this->updateUserBalance($user);
                $user->is_playing = false;
                $user->save();
            }
        }

        return $next($request);
    }

    private function createPlayerToken($user)
    {
        $playerToken = $user->username;

        try {
            $result = ApiTransactions::createUser($playerToken);

            if (($result['success'] ?? false) || ($result['message'] ?? '') === "The user code is duplicated.") {
                $user->player_token = $result['data']['user_code'];
                $user->save();
                return true;
            }

            Log::warning("API createUser gagal (tapi tidak lempar exception)", [
                'user_id'      => $user->id,
                'player_token' => $result['data']['user_code'],
                'response'     => $result,
            ]);

        } catch (\Throwable $e) {
            Log::warning("Create user API failed", [
                'user_id'      => $user->id,
                'player_token' => $playerToken,
                'error'        => $e->getMessage(),
            ]);
        }

        Log::error("Gagal membuat player_token", [
            'user_id'      => $user->id,
            'player_token' => $playerToken,
        ]);

        return false;
    }

    private function updateUserBalance($user)
    {
        try {
            $getBalance = ApiTransactions::getBalance($user->player_token);

            Log::info('Response getBalance', [
                'response' => $getBalance,
            ]);

            if (isset($getBalance['success']) && $getBalance['success']) {
                $userBalance          = $getBalance['data']['balance'] ?? 0;
                $user->active_balance = $userBalance;
                $user->save();

                Log::info('✅ Saldo user berhasil diperbarui', [
                    'user_code'      => $user->player_token,
                    'active_balance' => $userBalance,
                ]);
            } else {
                Log::warning('⚠️ Gagal mengambil saldo user dari API', [
                    'player_token' => $user->player_token,
                    'response'     => $getBalance,
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('❌ API error saat ambil saldo user', [
                'player_token' => $user->player_token,
                'error'        => $e->getMessage(),
            ]);
        }
    }

}
