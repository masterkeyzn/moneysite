<!DOCTYPE html>
<html lang="id-ID">

<head>
    @php
        $cacheKeyDomainMeta = 'domain_meta_' . request()->getHost();
        $cacheKeySeoManagement = 'seo_management';

        $domainMETA = Cache::remember(
            $cacheKeyDomainMeta,
            now()->addDay(),
            fn() => App\Models\Domains::where('name', request()->getHost())->first(),
        );
        $seoManagement = Cache::remember(
            $cacheKeySeoManagement,
            now()->addDay(),
            fn() => App\Models\SeoManagement::first(),
        );

        $pageTitle = $domainMETA?->custom_title ?: $siteConfig->site_title;
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle }}</title>

    {!! $domainMETA?->meta_tag !!}
    {!! $seoManagement?->meta_tag ?? '' !!}
    {!! $seoManagement?->script_head ?? '' !!}

    <link rel="icon" href="{{ $siteConfig->favicon ?? asset('favicon.ico') }}" type="image/gif">
    <link rel="preload" href="{{ asset('fonts/icomoon/fonts/icomoon.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.min.css') }}" media="print" onload="this.media='all'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">

    <script>
        (function(a) {
            _q = function() {
                return a;
            };
            $ = function(f) {
                typeof f === "function" && a.push(arguments);
                return $;
            };
            jQuery = $.ready = $;
        }([]));
    </script>

    <link rel="stylesheet"
        href="{{ asset(request()->is('/') ? "css/{$siteConfig->themes}/app-mobile-home.css" : "css/{$siteConfig->themes}/app-mobile.css") }}">
    <link rel="stylesheet" href="{{ asset("css/{$siteConfig->themes}/app-mobile-global.css") }}">
    <link rel="stylesheet" href="https://cdn.sitestatic.net/assets/jquery/jquery-ui.min.css" media="print"
        onload="this.media='all'">
</head>

<body class="mobile">
    <div class="full-container layout">
        <x-mobile.side-nav />

        <div class="main-content" id="mainContent">
            <div class="backdrop" id="mainContentContainer">
                <x-mobile.header />

                <div class="content my01">
                    @auth
                        <div class="container wallet-bal">
                            <div class="row text-left">
                                <div class="col-xs-6">
                                    <button class="btn btn-clear btn-refresh-wallet">
                                        <i class="icon-currency-dollar fs-lg i-dollar"></i>
                                        <span class="bal-txt">IDR
                                            {{ number_format(Auth::user()->active_balance, 2) }}</span>
                                    </button>
                                </div>
                                <div class="col-xs-6 noSidePadding i-refresh">
                                    <button class="btn btn-clear btn-refresh-wallet pull-right">
                                        <i class="icon-refresh-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row game-bals" id="other-game-bals" style="display:none">
                                <table class="table"></table>
                            </div>
                        </div>
                    @endauth

                    {{ $slot }}
                    <x-mobile.menu-bottom />
                </div>
            </div>
            <x-mobile.r-side-bar />
        </div>
    </div>

    <x-loading-modal />
    <x-apk-modal />

    <x-java-script>
        @slot('js2')
            @isset($js2)
                {{ $js2 }}
            @endisset
        @endslot
    </x-java-script>

    @isset($js)
        {{ $js }}
    @endisset

    <script src="{{ asset('js/app-mobile.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#mainContentContainer").click(function() {
                $('#sideNav, #mainContent, #r-side-bar').removeClass(
                    'open navContentOpen sideNavOpen rightSideBarOpen');
            });

            $(document).on('click', '#btn-close--login-modal', function(e) {
                e.preventDefault();
                $('#r-side-bar').removeClass('open');
                $('#mainContent').removeClass('rightSideBarOpen');
                return false;
            });

            $(document).on('click', '.btn-collapse-balances', function() {
                $('#other-game-bals').slideToggle();
                if ($('#other-game-bals').is(':visible')) {
                    window.getAllGameBal?.();
                }
                return false;
            });

            $(document).on('click', '.disable_Restore', function(e) {
                $('#btn-close--login-modal').trigger('click');
                e.preventDefault();
                sweetAlert(transMsgs.pageComingSoon);
            });
        });

        (function(i, s, q, l) {
            for (q = window._q(), l = q.length; i < l;) {
                $.apply(this, s.call(q[i++]));
            }
            window._q = undefined;
        })(0, Array.prototype.slice);
    </script>

    <x-lang-modal />
    {!! $seoManagement?->script_body ?? '' !!}

    <!-- Modals for reward/spin -->
    <div class="reward-program-popup"></div>
    <div class="claimed-reward-popup"></div>
    <div class="redeem-ticket-popup"></div>

    <div class="modal-wrapper nifty-modal fade-in-scale" id="spin-wheel-modal--layout" data-isnotcloseoverlay="true">
        <div class="md-content">
            <div class="md-body">
                <div class="modal-header text-center headerModal">
                    <button class="btn btn-link closeBtn" id="btn-close--spin-wheel-modal">X</button>
                </div>
                <div class="flex spinWheelWrapper text-center">
                    <div class="spinWheelTitle">Putar Roda</div>
                    <div>untuk mendapatkan koin atau lainnya</div>
                    <div class="spinWheel">
                        <div class="inline-flex" style="position: relative;">
                            <canvas id="wheelCanvas" width="300" height="300"></canvas>
                            <div class="spinWheelArrow"></div>
                        </div>
                    </div>
                </div>
                <div class="flex" style="place-content: center;">
                    <button class="btn btn-block btn-primary" id="spinBtn">Coba Keberuntungan Anda</button>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
</body>

</html>
