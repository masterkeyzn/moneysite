<?php

namespace App\Http\Middleware;

use App\Models\WebSettings;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CheckFrontendMaintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $siteConfig = Cache::get('site_config');

        if (!$siteConfig) {
            return response()->view('commons.maintenance');
        }

        if ($siteConfig->is_maintenance) {
            return response()->view('commons.maintenance');
        }

        return $next($request);
    }
}
