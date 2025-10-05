<div class="main nav-wrapper">
    <div>
        <div class="main-nav nav nav-pills nav-fill">
            <div class="nav-item">
                <div class="nav-item-content">
                    <div class="container">
                        <div class="flex-row">
                            <div class="auto-box text-center active" style="flex: 0 0 15%;">
                                <a href="{{ url('info/faq-general') }}" target="_blank">
                                    <div class="text-center">
                                        <img src="{{ url('assets/images/nav_imgs/Sub-InfoCentre.png') }}"
                                            class="img-fluid" alt="info">
                                    </div>
                                    <div class="menu-item-title">Pusat Info</div>
                                </a>
                            </div>
                            <div class="auto-box text-center active" style="flex: 0 0 15%;">
                                <a href="{{ url('contact-us') }}" target="_blank">
                                    <div class="text-center">
                                        <img src="{{ url('assets/images/nav_imgs/Sub-ContactUs.png') }}"
                                            class="img-fluid" alt="Hubungi kami">
                                    </div>
                                    <div class="menu-item-title">Hubungi kami</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($config_firebase['menu'] ?? [] as $menuItem)
                @php
                    $link = $menuItem[0] ?? '';
                    $chunk = (int) ($menuItem[1] ?? 6);
                    $icon = $menuItem[2] ?? '';
                    $title = $menuItem[3] ?? '';
                    $tag = $menuItem[4] ?? null;
                    $condition = $menuItem[5] ?? null;
                    $isImage = Str::startsWith($icon, 'http');
                    $providerList = is_array($config_firebase['provider-nav'][$link] ?? null)
                        ? $config_firebase['provider-nav'][$link]
                        : [];
                @endphp

                <div class="nav-item">
                    <a class="navlink" href="{{ url($link) }}">
                        <div class="nav-icon">
                            <span>
                                @if (!$isImage)
                                    <i {!! $condition ? $condition : '' !!} class="{{ $icon }}"></i>
                                @else
                                    <img src="{{ $icon }}" ref="live" height="41px">
                                @endif
                            </span>
                            {!! is_array($tag) ? '<span class="' . $tag[0] . '">' . $tag[1] . '</span>' : '' !!}
                        </div>
                        <div class="nav-title">{{ $title }}</div>
                    </a>

                    <div class="nav-item-content">
                        <div class="container">
                            @foreach (array_chunk($providerList, $chunk) as $providerNavChunk)
                                <div class="flex-row">
                                    @foreach ($providerNavChunk as $providerNav)
                                        @php
                                            $isGameList = $providerNav['game_list'] ?? false;
                                            $providerCode = $providerNav['provider_code'] ?? '';
                                            $imgSrc = $providerNav['img']['src'] ?? '';
                                            $imgDataSrc = $providerNav['img']['data-src'] ?? '';
                                            $tag = $providerNav['tag'] ?? '';
                                            $title = $providerNav['title'] ?? '';
                                            $launchUrl = $providerNav['launch_url'] ?? url($link . '/' . $providerCode);
                                        @endphp

                                        <div class="auto-box text-center active {{ $providerCode }}">
                                            @if ($isGameList)
                                                <a rel="opener" href="{{ url($link . '/' . $providerCode) }}">
                                                @else
                                                    @auth
                                                        <a rel="opener" href="{{ $launchUrl }}" target="_blank">
                                                        @else
                                                            <div class="a-disabledLink login-alert">
                                                            @endauth
                                            @endif

                                            {!! $tag === 'hot'
                                                ? '<div class="hot-tag"></div>'
                                                : ($tag === 'live'
                                                    ? '<div style="position:absolute;right:0;top:0">
                                                                                                                                                                                            <img src="https://files.sitestatic.net/images/live_icon.gif" ref="live" height="30px">
                                                                                                                                                                                        </div>'
                                                    : '') !!}

                                            <img alt="{{ $title }}" src="{{ $imgSrc }}"
                                                data-src="{{ $imgDataSrc }}" height="90" />

                                            <div class="menu-item-title">{{ $title }}</div>

                                            @if ($isGameList || auth()->check())
                                                </a>
                                            @else
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
            @endforeach
        </div>
    </div>
</div>
@endforeach
<div class="nav-item">
    <a class="navlink" href="{{ url('promotion') }}">
        <div class="nav-icon">
            <span><i class="icon-gift"></i></span>
        </div>
        <div class="nav-title" i18n="@PROMOS">Promotion</div>
    </a>
</div>

<div class="nav-item">
    <a class="navlink" href="{{ url('referral') }}">
        <div class="nav-icon">
            <span><i class="icon-users"></i></span>
        </div>
        <div class="nav-title" i18n="@REFERRAL">REFERRAL</div>
    </a>
</div>
</div>
</div>
</div>
