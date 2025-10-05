<div class="container pt-1 games-category">
    <h2 class="title">{{ $category }}</h2>
    <div class="row">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 image-grid">
                @foreach ($config_firebase['provider'][$category] ?? [] as $prov)
                    @php
                        $provCode = $prov['provider'] ?? '';
                        $imgAlt = $prov['imgAlt'] ?? '';
                        $imgSrc = $prov['imgSrc'] ?? '';
                        $videoSrc = $prov['videoSrc'] ?? null;
                        $urlImage = $prov['url_image'] ?? '';
                        $logoSrc = $prov['logoSrc'] ?? '';
                        $tagLive = $prov['tagLive'] ?? false;
                        $showName = $prov['showName'] ?? false;
                        $launchUrl = $prov['launch_url'] ?? url($category . '/' . $provCode);
                        $isGameList = $prov['game_list'] ?? false;
                    @endphp

                    <div class="col-xs-4 col-sm-3 col-md-2 box">
                        <div class="game-wrapper">
                            {{-- LIVE Tag --}}
                            @if ($tagLive)
                                <div style="position:absolute;right:0;top:0;z-index: 9;">
                                    <img src="https://files.sitestatic.net/images/live_icon.gif" ref="live"
                                        height="25px">
                                </div>
                            @endif

                            {{-- Anchor or Div --}}
                            @if ($isGameList)
                                <a href="{{ url($category . '/' . $provCode) }}" rel="opener" class="game">
                                @else
                                    @guest
                                        <div class="game login-alert">
                                        @else
                                            <a class="game" href="{{ $launchUrl }}" rel="opener" target="_blank">
                                            @endguest
                            @endif

                            {{-- Video if exists --}}
                            @if (!empty($videoSrc))
                                <video autoplay loop muted playsinline width="100%" height="100%"
                                    class="pgsoft_video">
                                    <source
                                        src="{{ $urlImage . user_agent() . '/normal/' . ($videoSrc['webp'] ?? '') }}"
                                        type="video/webp">
                                    <source src="{{ $urlImage . user_agent() . '/normal/' . ($videoSrc['mp4'] ?? '') }}"
                                        type="video/mp4">
                                    <img class="img-fluid lazy" alt="{{ $imgAlt }}"
                                        data-src="{{ $urlImage . user_agent() . '/normal/' . $imgSrc }}"
                                        src="" />
                                </video>
                            @else
                                <img class="img-fluid lazy" alt="{{ $imgAlt }}"
                                    data-src="{{ $urlImage . user_agent() . '/normal/' . $imgSrc }}" src="" />
                                <div class="loader-b"></div>

                                @if ($showName)
                                    <div class="g-title">{{ $imgAlt }}</div>
                                @endif
                            @endif

                            {{-- Close Tag --}}
                            @if ($isGameList)
                                </a>
                            @else
                                @auth
                                    </a>
                                @else
                            </div>
                        @endauth
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
</div>
