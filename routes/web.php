<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameLaunchController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\CheckFrontendMaintenance;
use App\Http\Middleware\RedirectAuthenticated;
use App\Http\Middleware\SyncUserPlayerAndBalance;
use Illuminate\Support\Facades\Route;

Route::post('/payment/callback', [PaymentGatewayController::class, "handleCallback"])->name('payment.callback');
Route::middleware([CheckFrontendMaintenance::class, SyncUserPlayerAndBalance::class])->group(function () {
    Route::get('/', [ViewController::class, 'home'])->name('index');
    Route::get('/robots.txt', [ViewController::class, 'robotsTxt']);
    Route::get('/sitemap.xml', [ViewController::class, 'sitemapXml']);
    Route::get('api/ajaxCheckMsgs', [ViewController::class, 'ajaxCheckMsgs']);
    Route::get('poker-jackpot', [ViewController::class, 'poker_jackpot']);
    Route::get('ajaxIDNBal', [ViewController::class, 'ajaxIDNBal']);
    Route::get('/register', [ViewController::class, 'register']);
    Route::get('/{provider}', [ViewController::class, 'showProvider'])->where('provider', 'slots|casino|lottery|sports|e-games|cockfight|fish-hunter');
    Route::get('/promotion', [ViewController::class, 'promotion']);
    Route::get('/referral', [ViewController::class, 'referral']);
    Route::get('/captcha-image-register', [ViewController::class, 'captcha']);
    Route::get('/{category}/{provider}', [ViewController::class, 'showGames'])->where('category', 'slots|fish-hunter');

    Route::get('/info/faq-general', [ViewController::class, 'faq_general']);
    Route::get('/info/terms-terms_conditions', [ViewController::class, 'terms_conditions']);
    Route::get('/info/how-sportsbook', [ViewController::class, 'how_sportsbook']);
    Route::get('/info/referral', [ViewController::class, 'info_referral']);
    Route::get('/info/responsiblegaming', [ViewController::class, 'responsiblegaming']);
    Route::get('/contact-us', [ViewController::class, 'contact_us']);

    Route::post('checkUserNameAvailability', [ValidationController::class, 'checkUserNameAvailability']);
    Route::post('checkExistingEmail', [ValidationController::class, 'checkExistingEmail']);
    Route::post('checkExistingMobile', [ValidationController::class, 'checkExistingMobile']);
    Route::post('checkAccNo', [ValidationController::class, 'checkAccNo']);
    Route::post('check_register_captcha', [ValidationController::class, 'check_register_captcha']);
    Route::post('/register', [AuthController::class, 'register'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware([RedirectAuthenticated::class, 'auth.session'])->group(function () {
        Route::get('/register-success', [ViewController::class, 'registerSuccess']);
        Route::get('/logout', [ViewController::class, 'logout']);
        Route::get('/profile', [ViewController::class, 'editProfile']);
        Route::get('/profile/edit', [ViewController::class, 'editProfile']);
        Route::get('/profile/change-password', [ViewController::class, 'changePassword']);
        Route::get('/profile/security', [ViewController::class, 'security']);
        Route::get('/profile/referral-downline', [ViewController::class, 'referralDownline']);
        Route::get('/profile/member-level', [ViewController::class, 'memberLevel']);
        Route::get('/profile/activate-referral', [ViewController::class, 'activate_referral']);
        Route::get('/account/deposit', [ViewController::class, 'deposit']);
        Route::get('/account/withdrawal', [ViewController::class, 'withdrawal']);
        Route::get('/account/lastDirectTransfer', [ViewController::class, 'lastDirectTransfer']);
        Route::get('/account/load_deposit_form', [ViewController::class, 'load_deposit_form']);
        Route::post('/agnt_bnk_details', [ViewController::class, 'agnt_bnk_details']);
        Route::get('/account/history', [ViewController::class, 'history']);
        Route::get('/promo/my-promo', [ViewController::class, 'myPromo']);
        Route::get('/promo/my-bonus', [ViewController::class, 'myBonus']);
        Route::get('/promo/my-withdraw-to', [ViewController::class, 'myWithdrawTo']);
        Route::get('/memo', [ViewController::class, 'memo']);
        Route::post('/getStatement', [ViewController::class, 'getStatement']);
        Route::get('/ajaxProfile', [ViewController::class, 'ajaxProfile']);
        Route::get('/ajaxchgPass', [ViewController::class, 'ajaxchgPass']);
        Route::get('/ajaxprofileEdit', [ViewController::class, 'ajaxprofileEdit']);
        Route::get('/ajaxmyTurnover', [ViewController::class, 'ajaxmyTurnover']);
        Route::get('/ajaxmyPromo', [ViewController::class, 'ajaxmyPromo']);
        Route::get('/ajaxmyBonus', [ViewController::class, 'ajaxmyBonus']);
        Route::post('/getReferalDownline', [ViewController::class, 'getReferalDownline']);
        Route::post('/deposits_store', [AuthController::class, 'deposits_store']);
        Route::post('/gateway_submit', [PaymentGatewayController::class, 'createPayment'])->name('gateway-submit');
        Route::post('/checkWalletAmount', [AuthController::class, 'checkWalletAmount']);
        Route::post('/withdrawals_store', [AuthController::class, 'withdrawals_store']);
        Route::post('/promo_details', [AuthController::class, 'promo_details']);
        Route::get('/payment/status/{transactionId}', [AuthController::class, 'checkStatus']);
        Route::post('/submit_activation_referral', [AuthController::class, 'submit_activation_referral']);
        Route::post('chg-pass', [AuthController::class, 'chg_pass'])->name('chgpass.store');
        Route::get('/getBal', [AuthController::class, 'getBal']);
        Route::get('/subGameLaunch', [GameLaunchController::class, 'subLaunchGames']);
        Route::get('/sports/{providerLive}', [GameLaunchController::class, 'subLaunchGamesLive']);
        Route::get('/casino/{providerLive}', [GameLaunchController::class, 'subLaunchGamesLive']);
        Route::get('/cockfight/{providerLive}', [GameLaunchController::class, 'subLaunchGamesLive']);
    });
    Route::fallback(fn() => redirect('/'));
});
