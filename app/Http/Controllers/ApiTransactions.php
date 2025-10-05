<?php
namespace App\Http\Controllers;

use App\Models\ApiGame;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiTransactions extends Controller
{
    public static function sendRequest(string $endpoint, array $data): array
    {
        $api = ApiGame::firstOrFail();

        $payload = array_merge([
            'agent_code'  => $api->agent_code,
            'agent_token' => $api->agent_token,
        ], $data);

        try {
            $response = Http::timeout(15)
                ->connectTimeout(5)
                ->acceptJson()
                ->withHeaders([
                    'X-Agent-Code' => $api->agent_code,
                    'X-Secret-Key' => $api->agent_token,
                ])
                ->post("{$api->api_url}$endpoint", $data);

            $json = $response->json();

            if ($json === null) {
                Log::warning("API Response not JSON", [
                    'endpoint' => $endpoint,
                    'payload'  => $payload,
                    'status'   => $response->status(),
                    'body'     => $response->body(),
                ]);

                return [
                    'success' => false,
                    'message' => 'Invalid or empty JSON response',
                    'status'  => $response->status(),
                    'body'    => $response->body(),
                ];
            }

            Log::info("API Request success", [
                'endpoint' => $endpoint,
                'payload'  => $payload,
                'response' => $json,
            ]);

            return $json;

        } catch (\Throwable $e) {
            Log::error("API Request failed", [
                'endpoint' => $endpoint,
                'payload'  => $payload,
                'api_url'  => $api->api_url,
                'error'    => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => 'Request failed: ' . $e->getMessage(),
            ];
        }
    }

    public static function createUser(string $userCode): array
    {
        $endpoint = '/user/register';

        return self::formatResponse(
            self::sendRequest($endpoint, ['user_code' => $userCode, 'country' => "ID", 'currency' => 'IDR'])
        );
    }

    public static function deposit(string $userCode, int $amount): array
    {
        $endpoint = '/user/transfer';

        return self::formatResponse(
            self::sendRequest($endpoint, [
                'user_code' => $userCode,
                'amount'    => $amount,
            ])
        );
    }

    public static function getBalance(string $userCode): array
    {
        $endpoint = '/user/balance';

        return self::formatResponse(
            self::sendRequest($endpoint, [
                'user_code' => $userCode,
            ])
        );
    }

    public static function withdraw(string $userCode, ?int $amount = null): array
    {
        $endpoint = '/user/transfer';

        return self::formatResponse(
            self::sendRequest($endpoint, [
                'user_code' => $userCode,
                'amount'    => $amount,
            ])
        );
    }

    public static function startGame(
        string $userCode,
        string $providerCode,
        string $gameCode,
        string $lang = 'en',
        string $ip = ''
    ): array {
        $endpoint = '/user/games/start';

        $payload = [
            'user_code'     => $userCode,
            'game_type'     => 'slot',
            'provider_code' => $providerCode,
            'game_code'     => $gameCode,
            'lang'          => $lang,
            'platform'      => user_agent(),
            'ip'            => $ip,
        ];

        return self::formatResponse(
            self::sendRequest($endpoint, $payload)
        );
    }

    private static function formatResponse(array $response): array
    {
        return [
            'success' => ($response['success'] ?? false) == true,
            'message' => $response['message'] ?? 'FAILED',
            'data'    => $response['data'] ?? null,
        ];
    }

}
