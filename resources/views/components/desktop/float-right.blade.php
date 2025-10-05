<div class="floats floats-right">
    <div class="slider">
        <div class="fc">
            <div class="fc-left text-center">

                <div class="center i-circle" style="padding-top:5px;">
                    <i class="icon-phone"></i>
                </div>

                <div class="bottom-to-top center fs-lg" i18n="@CONTACT-US-"> &nbsp;HUBUNGI KAMI &nbsp;</div>
                <div class="center fs-md">
                    <i class="icon-double_arrow_r"></i>
                </div>
            </div>
            <div class="fc-right center fs-lg">
                <div class="bg-1">
                    <div class="text-center"> <span class="txt-xxl"><i
                                class="icon-24-7 icon-sun-moon"></i><span>24x7</span></span> </div>
                    <div class="row no-gutters">
                        <div class="{{ Auth::check() ? 'col-xs-12' : 'col-xs-6' }}">
                            <a class="btn btn-block btn-accent green_over" href="javascript:void(0)"
                                onclick="openLiveChat('{{ $siteConfig->url_livechat }}' , '')" id="btn-joinNow"
                                i18n="@LIVE-HELP">LIVE HELP</a>
                        </div>
                        @guest
                            <div class="col-xs-6">
                                <a class="btn btn-block btn-tertiery yellow_over" href="{{ url('register') }}"
                                    id="btn-joinNow" i18n>JOIN NOW</a>
                            </div>
                        @endguest
                    </div>
                    <div class="box flex flex-align-top ">
                        <i class="icon-clock"></i>
                        <div class="pl-2 font-size-sm "><span i18n>Quick Easy Deposit</span><br /><span
                                i18n="@Fast-withdraw">Fast withdraw</span></div>
                    </div>
                </div>
                <div class="bg-2 fs-lg text-left">
                    @php
                        $cacheKey = 'social_media_links';
                        $socialMedias = Cache::remember($cacheKey, 60 * 600, function () {
                            return App\Models\SocialMedia::whereNotNull('link')
                                ->whereNotNull('description')
                                ->select('id', 'title', 'link', 'icon', 'description')
                                ->get();
                        });
                    @endphp

                    @foreach ($socialMedias as $socialMedia)
                        @if ($socialMedia->icon !== 'icon-comment')
                            <a class="btn btn-block box btn-primary" href="{{ e($socialMedia->link) }}" target="_blank">
                                <span class="dis_flex">
                                    <span class="icon-txt"><i class="{{ e($socialMedia->icon) }}"></i></span>
                                    <span>{{ e($socialMedia->description) }}</span>
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
