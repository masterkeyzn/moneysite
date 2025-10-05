<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class GameLaunchController extends Controller
{
    public function subLaunchGames(Request $request)
    {
        $user = Auth::user();

        if (! $user->can_play_game) {
            return $this->renderGameError('Akun anda tidak diizinkan bermain game.', 403);
        }

        $request->validate([
            'gameID'   => 'required|string',
            'GameCode' => 'nullable|string',
        ]);

        try {
            $launchUrl = ApiTransactions::startGame(
                $user->player_token,
                $request->gameID,
                $request->GameCode,
                "id",
                $request->ip()
            );

            if (
                ! isset($launchUrl['data']['launch_url']) ||
                empty($launchUrl['data']['launch_url'])
            ) {
                Log::warning('StartGame API tidak mengembalikan launch_url', [
                    'response'  => $launchUrl,
                    'user_id'   => $user->id,
                    'game_id'   => $request->gameID,
                    'game_code' => $request->GameCode,
                ]);

                return $this->renderGameError('Game tidak tersedia saat ini. Silakan coba lagi nanti.');
            }
            $user->is_playing = true;
            $user->save();
            return redirect()->away($launchUrl['data']['launch_url']);

        } catch (\Throwable $e) {
            Log::error('StartGame gagal', [
                'error'     => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'user_id'   => $user->id,
                'game_id'   => $request->gameID,
                'game_code' => $request->GameCode,
            ]);

            return $this->renderGameError('Terjadi kesalahan pada server. Silakan coba lagi nanti.');
        }

    }

    public function subLaunchGamesLive(Request $request, $providerLive)
    {
        $user = Auth::user();

        if (! $user->can_play_game) {
            return $this->renderGameError('Akun anda tidak diizinkan bermain game.', 403);
        }

        try {
            $launchUrl = ApiTransactions::startGame(
                $user->player_token,
                $providerLive,
                0,
                "en",
                $request->ip(),
            );

            if (
                ! isset($launchUrl['data']['launch_url']) ||
                empty($launchUrl['data']['launch_url'])
            ) {
                Log::warning('StartGame API tidak mengembalikan launch_url', [
                    'response'  => $launchUrl,
                    'user_id'   => $user->id,
                    'game_id'   => $request->gameID,
                    'game_code' => $request->GameCode,
                ]);

                return $this->renderGameError('Game tidak tersedia saat ini. Silakan coba lagi nanti.');
            }
            $user->is_playing = true;
            $user->save();
            return redirect()->away($launchUrl['data']['launch_url']);

        } catch (\Throwable $e) {
            Log::error('StartGame gagal', [
                'error'     => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'user_id'   => $user->id,
                'game_id'   => $request->gameID,
                'game_code' => $request->GameCode,
            ]);

            return $this->renderGameError('Terjadi kesalahan pada server. Silakan coba lagi nanti.');
        }
    }

    private function renderGameError(string $message, int $status = 500)
    {
        return response()->view('commons.errors-games', ['errorMessage' => $message], $status);
    }
}
