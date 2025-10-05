@foreach ($config_firebase['provider'][$category] ?? [] as $provider)
    <div class="col-xs-12 col-sm-4 col-lg-3 box {{ $class }}">
        @if ($provider['game_list'])
            <a href="{{ url($category . '/' . $provider['provider']) }}" rel="opener">
            @else
                @guest
                    <div class="login-alert">
                    @else
                        <a href="{{ $provider['launch_url'] ?? url($category . '/' . $provider['provider']) }}" rel="opener"
                            target="_blank">
                        @endguest
        @endif

        <div class="g-card" style="max-height: 128px">
            <div class="card-img" _games_category>
                @if (isset($provider['tagLive']) && $provider['tagLive'])
                    <div style="position: absolute; right: 0; top: 0; z-index: 9;">
                        <img src="https://files.sitestatic.net/images/live_icon.gif" ref="live" height="30px">
                    </div>
                @endif

                <div class="g-overlay"></div>

                @if ($provider['videoSrc'] ?? false)
                    <video autoplay loop muted playsinline width="100%" height="100%" class="pgsoft_video">
                        <source
                            src="{{ $provider['url_image'] . user_agent() . '/normal/' . $provider['videoSrc']['webp'] }}"
                            type="video/webp">
                        <source
                            src="{{ $provider['url_image'] . user_agent() . '/normal/' . $provider['videoSrc']['mp4'] }}"
                            type="video/mp4">
                        <img src="{{ $provider['url_image'] . user_agent() . '/normal/' . $provider['imgSrc'] }}"
                            alt="{{ $provider['imgAlt'] }}" />
                    </video>
                @else
                    <img src="{{ $provider['url_image'] . user_agent() . '/normal/' . $provider['imgSrc'] }}"
                        alt="{{ $provider['imgAlt'] }}" />
                    <div class="card-title" _games_category>
                        <div class="logo">
                            <span style="width: 200px; height: 60px;">
                                <img src="{{ $provider['logoSrc'] }}">
                            </span>
                        </div>
                    </div>
                @endif

                <div class="btn-wrapper" _games_category>
                    <button class="btn btn-hvrplay clearfix">
                        <div class="inner">
                            <div class="p1">MAIN SEKARANG</div>
                            <div class="p2"><i class="icon-play-solid"></i></div>
                        </div>
                    </button>
                </div>
            </div>

            @if (isset($provider['showName']) && $provider['showName'])
                <div class="g-title">{{ $provider['imgAlt'] }}</div>
            @endif
        </div>

        @if ($provider['game_list'])
            </a>
        @else
            @auth
                </a>
            @else
        </div>
    @endauth
@endif
</div>
@endforeach
