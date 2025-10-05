<?php
namespace App\Http\Controllers;

use App\Models\Bankdeposit;
use App\Models\Bonusdeposit;
use App\Models\Carousels;
use App\Models\Referral;
use App\Models\SeoManagement;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ViewController extends Controller
{
    public function home()
    {
        $cacheKey = 'carousels_data';

        $carousels = Cache::remember($cacheKey, 604800, fn() => Carousels::select('id', 'image', 'type')->get());

        return view(user_agent() . '.home', compact('carousels'));
    }

    public function register(Request $request)
    {
        if ($request->has('ref')) {
            $ref = Referral::where('referral_code', $request->get('ref'))->first();

            if ($ref) {
                switch ($ref->status) {
                    case 'active':
                        session()->flash('ref', $request->get('ref'));
                        break;
                    case 'inactive':
                        session()->flash('removeRef', $request->get('ref'));
                        break;
                }
            }
        }

        return view(user_agent() . '.register');
    }

    public function showProvider($provider)
    {
        $class = null;
        if ($provider !== 'lottery') {
            $class = 'gamecategory-singleitem';
        }
        return view(user_agent() . '.show-provider', compact('provider', 'class'));
    }

    public function promotion()
    {
        return view(user_agent() . '.promotion');
    }

    public function referral()
    {
        return view(user_agent() . '.referral');
    }

    public function captcha()
    {
        return captcha();
    }

    public function registerSuccess()
    {
        return view(user_agent() . '.register-success');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function editProfile()
    {
        return view(user_agent() . '.profile.edit');
    }

    public function changePassword()
    {
        return view(user_agent() . '.profile.change-password');
    }

    public function security()
    {
        return view(user_agent() . '.profile.security');
    }

    public function referralDownline()
    {
        $referral = Auth::user()->referral;

        if (! $referral) {
            return view(user_agent() . '.profile.referral-downline', [
                'userReferrals' => collect(),
            ]);
        }

        $userReferrals = $referral->referredUsers()
            ->with('user')
            ->whereDate('created_at', Carbon::today())
            ->orderByDesc('created_at')
            ->get();

        return view(user_agent() . '.profile.referral-downline', compact('userReferrals'));
    }

    public function memberLevel()
    {
        return view(user_agent() . '.profile.member-level');
    }

    public function activate_referral()
    {
        if (Auth::user()->referral && Auth::user()->referral->exists()) {
            return redirect()->route('index');
        }

        return view(user_agent() . '.profile.activate-referral');
    }

    public function getReferalDownline(Request $request)
    {
        $payload = $request->input('daterange');

        preg_match('/(\d{4}-\d{2}-\d{2}) - (\d{4}-\d{2}-\d{2})/', $payload, $matches);

        if (count($matches) < 3) {
            return response()->json(['error' => 'Invalid date range'], 400);
        }

        $startDate = Carbon::parse($matches[1])->startOfDay();
        $endDate   = Carbon::parse($matches[2])->endOfDay();

        $referral = Auth::user()->referral;

        if (! $referral) {
            return response()->json(['error' => 'Anda belum memiliki referral'], 404);
        }

        $referralDownlines = $referral->referredUsers()
            ->with('user')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->orderByDesc('created_at')
            ->get();

        return view('components.get-referal-downline', [
            'referralDownline' => $referralDownlines,
        ])->render();
    }

    public function deposit()
    {
        $bankdeposit    = Bankdeposit::where('show_bank', 'active')->where('type', '5')->get();
        $pulsadeposit   = Bankdeposit::where('show_bank', 'active')->where('type', '6')->get();
        $ewalletdeposit = Bankdeposit::where('show_bank', 'active')->where('type', '7')->get();

        return view(user_agent() . '.account.deposit', compact('bankdeposit', 'pulsadeposit', 'ewalletdeposit'));
    }

    public function withdrawal()
    {
        return view(user_agent() . '.account.withdrawal');
    }

    public function lastDirectTransfer()
    {
        return view(user_agent() . '.account.lastDirectTransfer');
    }

    public function load_deposit_form(Request $request)
    {
        $bonusdeposit = Bonusdeposit::all();
        if ($request->isgateway == '53') {
            return view('components.load-deposit-form-53', compact('bonusdeposit'));
        }

        $bankdeposit    = Bankdeposit::where('type', '5')->where('show_bank', 'active')->get();
        $ewalletdeposit = Bankdeposit::where('type', '7')->where('show_bank', 'active')->get();
        $pulsadeposit   = Bankdeposit::where('type', '6')->where('show_bank', 'active')->get();

        return view('components.load-deposit-form', compact('bankdeposit', 'ewalletdeposit', 'pulsadeposit', 'bonusdeposit'));
    }

    public function agnt_bnk_details(Request $request)
    {
        $bankdeposit = Bankdeposit::find($request->select_name);
        return view('components.agnt-bnk-details', compact('bankdeposit'));
    }

    public function history()
    {

        return view(user_agent() . '.account.history');
    }

    public function getStatement(Request $request)
    {
        $daterange = $request->input('daterange');

        [$startDate, $endDate] = explode(' - ', $daterange);

        $startDate    = Carbon::createFromFormat('Y-m-d', $startDate)->startOfDay();
        $endDate      = Carbon::createFromFormat('Y-m-d', $endDate)->endOfDay();
        $transactions = [];
        $totalCredit  = null;
        $totalDebit   = null;
        $type         = $request->transaction_type;

        if ($type == 2) {
            $transactions = Auth::user()->transactions()->whereBetween('created_at', [$startDate, $endDate])
                ->latest()
                ->get();
            $totalCredit = $transactions->where('type', 'Deposit')->where('status', 'Approved')->sum('amount');
            $totalDebit  = $transactions->where('type', 'Withdrawal')->where('status', 'Approved')->sum('amount');
        }

        return view(user_agent() . '.getStatement', compact('transactions', 'totalDebit', 'totalCredit', 'type'));
    }

    public function faq_general()
    {
        return view(user_agent() . '.info.faq-general');
    }

    public function terms_conditions()
    {
        return view(user_agent() . '.info.terms-terms_conditions');
    }

    public function how_sportsbook()
    {
        return view(user_agent() . '.info.how-sportsbook');
    }

    public function info_referral()
    {
        return view(user_agent() . '.info.referral');
    }

    public function responsiblegaming()
    {
        return view(user_agent() . '.info.responsiblegaming');
    }

    public function contact_us()
    {
        return view(user_agent() . '.contact-us');
    }

    public function ajaxProfile()
    {
        return view('commons.ajaxProfile')->render();
    }

    public function ajaxchgPass()
    {
        return view('commons.ajaxchgPass')->render();
    }

    public function ajaxmyTurnover()
    {
        return view('commons.ajaxmyTurnover')->render();
    }

    public function ajaxmyBonus()
    {
        return view('commons.ajaxmyBonus')->render();
    }

    public function ajaxmyPromo()
    {
        return view('commons.ajaxmyPromo')->render();
    }

    public function ajaxprofileEdit()
    {
        return view('commons.ajaxprofileEdit')->render();
    }

    public function myPromo()
    {
        return view(user_agent() . '.promo.my-promo');
    }

    public function myBonus()
    {
        return view(user_agent() . '.promo.my-bonus');
    }

    public function myWithdrawTo()
    {
        return view(user_agent() . '.promo.my-withdraw-to');
    }

    public function memo()
    {
        return view(user_agent() . '.memo');
    }

    protected function getDataJson($jsonPath): array
    {
        $path = resource_path($jsonPath);

        $json = file_get_contents($path);

        $data = json_decode($json, true);

        return $data;
    }

    public function ajaxCheckMsgs()
    {
        return response()->json([
            'data' => [
                'inboxCnt' => 0,
                'notiCnt'  => 0,
            ],
        ]);
    }

    public function ajaxIDNBal()
    {
        return response()->json([
            'data' => "Under maintenance",
        ]);
    }

    public function poker_jackpot()
    {
        return 625655800.00;
    }

    public function showGames($category, $provider)
    {
        $cacheKey    = 'firebase_data_' . strtolower($category) . '_' . $provider;
        $firebaseUrl = env('FIREBASE_HOST') . "provider/{$category}/{$provider}.json";

        $data = Cache::get($cacheKey);

        if (! $data) {
            try {
                $response = Http::get($firebaseUrl);

                if ($response->successful()) {
                    $data = $response->json();

                    if (! empty($data)) {
                        Cache::put($cacheKey, $data, now()->addHours(6));
                    } else {
                        Log::warning("Data dari Firebase ({$provider}) kosong, tidak disimpan ke cache.");
                    }
                }
            } catch (\Exception $e) {
                Log::error("Exception saat mengambil data dari Firebase ({$provider}): " . $e->getMessage());
            }
        }

        if (! $data) {
            $data = [];
        }

        return view(user_agent() . '.show-games', [
            'data' => [
                'category'      => $category,
                'provider'      => $data,
                'provider-code' => $data[0]['provider'] ?? null,
            ],
        ]);
    }

    public function robotsTxt()
    {
        $seoSetting = SeoManagement::first();

        if (! $seoSetting) {
            return response("User-agent: *\nDisallow: /", 200)
                ->header('Content-Type', 'text/plain');
        }

        return response($seoSetting->robots, 200)
            ->header('Content-Type', 'text/plain');
    }

    public function sitemapXml()
    {
        $seoSetting = SeoManagement::first();

        if (! $seoSetting) {
            $xml = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
                       xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                       xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
                                           http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

            $paths = [
                '/'                    => '1.0',
                '/info/how-sportsbook' => '0.8',
                '/register'            => '0.9',
            ];

            foreach ($paths as $path => $priority) {
                /** @var string $url */
                $url     = url($path);
                $lastmod = $seoSetting->updated_at->toAtomString();

                $xml .= "<url>";
                $xml .= "<loc>{$url}</loc>";
                $xml .= "<lastmod>{$lastmod}</lastmod>";
                $xml .= "<priority>{$priority}</priority>";
                $xml .= "</url>";
            }

            $xml .= '</urlset>';

            return response($xml, 200)
                ->header('Content-Type', 'application/xml');
        }

        $paths = json_decode($seoSetting->sitemap, true);

        if (! is_array($paths)) {
            return response("Invalid sitemap data", 400);
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
                       xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                       xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
                                           http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        foreach ($paths as $path => $priority) {
            /** @var string $url */
            $url     = url($path);
            $lastmod = now()->toAtomString();

            $xml .= "<url>";
            $xml .= "<loc>{$url}</loc>";
            $xml .= "<lastmod>{$lastmod}</lastmod>";
            $xml .= "<priority>{$priority}</priority>";
            $xml .= "</url>";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}
