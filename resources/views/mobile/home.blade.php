<x-mobile.app>
    <div class="apk-down-bar" id="apk-down-bar" style="display:none;">
        <table>
            <tr>
                <td rowspan="2" style="width:18%; " class="clearfix">
                    <button class="btn btn-link" id="btn-close--apk">X</button>
                    <span class="fs-lg android-wrap"><i class="icon-android"></i></span>
                </td>
                <td style="width:100%; ">
                    <div>{{ $siteConfig->site_name }} Lite Download</div>

                </td>
                <td rowspan="2">
                    <a href="" class="btn btn-link">
                        <i class="icon-download" style="font-size:1.8em;"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <div><small>Fast, Light & Secure</small></div>
                </td>
            </tr>
        </table>
    </div>

    <x-carousels :carousels="$carousels" />

    @guest

        <div class="btns-log row no-gutters">
            <div class="col-xs-6">
                <button type="button" class="btn btn-tertiery btn-block" id="btnLogin--home">LOGIN</button>
            </div>
            <div class="col-xs-6">
                <a class="btn btn-accent btn-block" href="{{ url('register') }}">DAFTAR</a>
            </div>

        </div>
    @endguest

    <div class="container">
        <div class="ann-wrapper">
            <div class="clearfix pt-2">
                <div class="pull-left pointer">
                    <div>
                        <i class="icon-megaphone"></i>
                    </div>
                </div>
                <div class="ann-content">
                    <marquee scrollamount="5">{{ $siteConfig->marquee }}</marquee>
                </div>
            </div>
        </div>
    </div>

    <!--Shorcut Menu -->

    <div class="scroll-wrapper no-gutters" _home>

        <div style="overflow:hidden; " class="scroller">
            <div class="  no-gutters text-center slider-content" #scrollContent>
                @foreach ($config_firebase['menu'] as $menu)
                    <div class="col">
                        <a class="btn-box" href="{{ url($menu[0]) }}">
                            @if (!empty($menu[2]))
                                <i class="{{ $menu[2] }}"></i>
                            @endif
                            @if (!empty($menu[5]) && str_contains($menu[5], 'img'))
                                <img src="{{ $menu[5] }}" ref="live game" height="41px">
                            @endif
                            <div>{{ ucfirst($menu[3]) }}</div>
                            @if (!empty($menu[4]))
                                <span class='{{ $menu[4][0] }}'>{{ $menu[4][1] }}</span>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Shorcut Menu END-->
    <div class="app-wrapper container">

        <div class="jackpot" name="jackpot_click" onclick="dataLayer.push({'event': 'jackpot_click'});">

            <img class="img-fluid" src="{{ $siteConfig->proggressive_img }}" alt="jackpot" height="220px"
                width="688px" />

            <div class="txt-overlay">
                <div class="text-content">
                    <span id="jackpot_amount">...Loading</span>
                </div>
            </div>
        </div>

        <!--hot games-->
        <div class="mobile-border"></div>
        <div class="row">
            <div class="gListSection">

                <div class="g-slider-wrapper">
                    <h4 class="title">GAME TERPOPULAR</h4>
                    <ul>
                        @foreach ($config_firebase['mobile-hot-games'] as $hotG)
                            <li style= " margin-top: 5px; margin-left: 5px;">
                                <a href="{{ url($hotG['href']) }}" class="game-box" rel="opener">
                                    <!--[ngTemplateOutlet]="gameItemContent"> -->
                                    <div class="hot-game-tag"> </div>
                                    <img class="lazy" alt="{{ $hotG['title'] }}" src=""
                                        alt="{{ $hotG['title'] }}" data-src="{{ $hotG['dataSrc'] }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class="text-center game-title">{{ $hotG['title'] }}</div>

                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @foreach ($config_firebase['mobile-hot-provider'] as $hotp)
                    <div class="mobile-border"></div>
                    <div class="g-slider-wrapper">
                        <h4 class="title">{{ $hotp['title'] }}</h4>
                        <ul>
                            @foreach ($hotp['content'] as $contentp)
                                <li>
                                    @if (isset($contentp['href']))
                                        <a href="{{ url($contentp['href']) }}" class="game-box">
                                            <img class="lazy" alt="{{ $contentp['title'] }}" src=""
                                                data-src="{{ $contentp['dataSrc'] }}" />
                                            <div class="loader-b" *ngIf="!showEle"></div>
                                            <div class="text-center game-title">{{ $contentp['title'] }}</div>
                                        </a>
                                    @else
                                        <a href="javascript:void(0)" class="game-box @guest login-alert @endguest">
                                            <img class="lazy" alt="{{ $contentp['title'] }}" src=""
                                                data-src="{{ $contentp['dataSrc'] }}" />
                                            <div class="loader-b" *ngIf="!showEle"></div>
                                            <div class="text-center game-title">{{ $contentp['title'] }}</div>
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <x-last-transaction />
        <x-home-info />
    </div>
    <div class="container">
        <div class="security_info row">
            <div class="container footerlink">
                <ul class="clearfix">
                    <li><a href="{{ url('info/faq-general') }}">Tentang kami</a>
                    </li>
                    <li>|</li>
                    <li><a href="{{ url('info/faq-general') }}">Info Perbankan</a>
                    </li>
                    <li>|</li>
                    <li><a href="{{ url('info/faq-general') }}">Pusat Info</a>
                    </li>
                    <li>|</li>
                    <li><a href="{{ url('contact-us') }}">Hubungi kami</a></li>
                    <li>|</li>
                    <li><a href="{{ url('info/terms-terms_conditions') }}">Terms
                            and
                            Conditions</a></li>
                    <li>|</li>
                    <li><a href="{{ url('info/responsiblegaming') }}">Responsible Gaming</a></li>
                </ul>
            </div>
            <div class="container footerlink mt-1" style="margin: 5px 0">
                <ul class="clearfix">
                    <li>
                        <div class="copyright">
                            ©2024 {{ $siteConfig->site_name }} . Seluruh hak cipta | 18+ | v1.57
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
            </div>
            <div style="height: 5px; margin: 5px 0 ; " class="dotted_line"></div>

            <div class="social_weblogo">
                <div class="clearfix mt-2">
                    <div class="col-lg-5 pull-left text-left footerlink" style="padding: 0px;">

                        <div class="small">
                            Platform Penyedia Layanan </div>
                        <div class="mt-2 footer_btm_logo_img provider_img">
                            <img class="footer_logimg" alt="{{ $siteConfig->site_name }}"
                                src="{{ $siteConfig->site_logo }}" />
                        </div>


                    </div>
                    <div class="col-lg-4 pull-right text-right social-icons" style="padding: 0px;">
                        <a href="https://web.facebook.com" target="_blank" data-toggle="tooltip"
                            data-placement="top" title="Ikuti di Facebook"
                            class="button icon circle is-outline facebook"><i class="icon-facebook"></i></a>
                        <a href="https://www.twitter.com" target="_blank" data-toggle="tooltip" data-placement="top"
                            title="Tweet kami!" class="button icon circle is-outline twitter"><i
                                class="icon-twitter"></i></a>
                        <a href="https://www.instagram.com" target="_blank" data-toggle="tooltip"
                            data-placement="top" title="Instagram kami!"
                            class="button icon circle is-outline instagram"><i class="icon-instagram"></i></a>
                        <a href="https://" target="_blank" data-toggle="tooltip" data-placement="top"
                            title="Lihat video youtube kami untuk mengetahui lebih lanjut!"
                            class="button icon circle is-outline youtube"><i class="icon-youtube-play"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script>
        $(document).ready(function() {
            ajax_jackpot();

            setInterval(function() {
                if (window.currencyCode == 'THB') {
                    prize += 10;
                } else {
                    prize += getRandomIntInclusive(2451, 3470);
                }
                prize = parseFloat(prize);
                prize = prize;
                $('#jackpot_amount').html(window.currencyCode + ' ' + commaSeparateNumber(prize, true));
            }, 751);

        });
    </script>
</x-mobile.app>
