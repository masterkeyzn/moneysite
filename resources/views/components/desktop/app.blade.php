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
    <meta name="viewport" content="width=1280">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle }}</title>

    {{-- Meta dari domain --}}
    {!! $domainMETA?->meta_tag !!}

    {{-- SEO Management global --}}
    {!! $seoManagement?->meta_tag ?? '' !!}

    {{-- Favicon fallback --}}
    <link rel="icon" href="{{ $siteConfig->favicon ?? asset('favicon.ico') }}" type="image/gif">

    {{-- SEO scripts di head --}}
    {!! $seoManagement?->script_head ?? '' !!}

    {{-- Fonts & Icons --}}
    <link rel="preload" href="{{ asset('fonts/icomoon/fonts/icomoon.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.min.css') }}" media="print" onload="this.media='all'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">

    {{-- Lazy jQuery queue --}}
    <script>
        (function(q) {
            _q = function() {
                return q;
            };
            $ = function(f) {
                typeof f === "function" && q.push(arguments);
                return $;
            };
            jQuery = $.ready = $;
        })([]);
    </script>

    {{-- Main Styles --}}
    <link rel="stylesheet" href="{{ asset("css/{$siteConfig->themes}/app-desktop.css") }}">
    <link rel="stylesheet" href="https://cdn.sitestatic.net/assets/jquery/jquery-ui.min.css" media="print"
        onload="this.media='all'">
</head>

<body class="desktop">
    {{-- Header & Navigasi --}}
    <x-desktop.header />
    <x-desktop.nav-menu />

    {{-- Konten Halaman --}}
    {{ $slot }}

    {{-- Icon Zalo Styling (bisa pindah ke CSS eksternal) --}}
    <style>
        .icon-zalo .path1:before {
            content: "\e966";
            color: #e6eff4;
        }

        .icon-zalo .path2:before {
            content: "\e969";
            color: #b6d1dd;
            margin-left: -1em;
        }

        .icon-zalo .path3:before {
            content: "\e96e";
            color: #41a0d7;
            margin-left: -1em;
        }

        .icon-zalo .path4:before {
            content: "\e96f";
            color: #fff;
            margin-left: -1em;
        }

        .bottom-to-top {
            transform: none !important;
        }
    </style>

    {{-- Floating Widgets --}}
    <x-desktop.float-right />
    <x-desktop.float-left />

    {{-- Modals --}}
    <x-desktop.login-modal />
    <x-apk-modal />
    <x-loading-modal />
    <x-lang-modal />

    {{-- Slot untuk JS tambahan --}}
    <x-java-script>
        @slot('js2')
            @isset($js2)
                {{ $js2 }}
            @endisset
        @endslot
    </x-java-script>

    {{-- JS Utama --}}
    <script src="{{ asset('js/app-desktop.js') }}"></script>

    {{-- JS Tambahan --}}
    @isset($js)
        {{ $js }}
    @endisset

    {{-- Eksekusi fungsi dari lazy jQuery queue --}}
    <script>
        (function(i, slice, q, len) {
            for (q = window._q(), len = q.length; i < len;) {
                $.apply(this, slice.call(q[i++]));
            }
            window._q = undefined;
        })(0, Array.prototype.slice);
    </script>

    {{-- SEO body script & livechat --}}
    {!! $seoManagement?->script_body ?? '' !!}
    {!! $siteConfig->sc_livechat ?? '' !!}

    {{-- Trigger login modal jika ?reLogin=yes --}}
    <script>
        if (window.location.href.indexOf('reLogin=yes') >= 0 && !window.isAuth) {
            if ($("#login-modal--layout").length) {
                $("#login-modal--layout").nifty("show");
            }
        }

        $('#dropdownothergameblc').click(function() {
            if (typeof window.getAllGameBal === 'function') {
                window.getAllGameBal();
            }
        });
    </script>
</body>

</html>
