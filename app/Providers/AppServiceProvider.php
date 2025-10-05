<?php
namespace App\Providers;

use App\Models\WebSettings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Cache 1 minggu
        $ttl = now()->addWeek();

        // Site config (ambil field yang diperlukan saja)
        $siteConfig = Cache::remember('site_config', $ttl, function () {
            return WebSettings::query()
                ->select([
                    'site_name', 'site_title', 'marquee', 'site_logo', 'popup',
                    'sc_livechat', 'url_livechat', 'proggressive_img', 'themes',
                    'favicon', 'min_deposit', 'max_deposit', 'min_withdrawal',
                    'max_withdrawal', 'unique_code',
                ])
                ->first();
        });

        // Firebase config
        $firebaseConfig = Cache::remember('config_firebase', $ttl, function () {
            $host = config('services.firebase.host', env('FIREBASE_HOST'));

            if (empty($host)) {
                Log::warning('FIREBASE_HOST not set; using empty firebase config.');
                return [];
            }

            try {
                $response = Http::timeout(8)->get(rtrim($host, '/') . '/config.json');

                if ($response->successful()) {
                    $json = $response->json();

                    return is_array($json) ? $json : [];
                }

                Log::warning('Firebase config request not successful', [
                    'status' => $response->status(),
                    'url'    => rtrim($host, '/') . '/config.json',
                ]);
            } catch (\Throwable $e) {
                Log::error('Failed to fetch Firebase config', [
                    'error' => $e->getMessage(),
                ]);
            }

            return [];
        });

        View::share([
            'siteConfig'      => $siteConfig,
            'config_firebase' => $firebaseConfig,
        ]);
    }
}
