<div class="header-wrapper">
    <div id="masthead" class="main-header container">
        <div class="inner-header flex-row logo-left md-logo-center">
            <div id="logo" class="flex-col logo">
                <a href="{{ url('/') }}" title="">
                    <img class="img-fluid" alt="{{ $siteConfig->site_name}}" src="{{ $siteConfig->site_logo }}" />
                </a>
            </div>
            <div class="flex-col show-for-medium flex-left  fs-lg ">
                <i class="icon-bars"></i>
            </div>
            <div class="flex-col hide-for-medium flex-left flex-grow"></div>
            <div class="flex-col hide-for-medium flex-right">
                <div class="flex-row top text-right">

                    <span class="text-right time"></span>
                    <div class=" line"></div>
                    <div class="social-icons fade-in" id="blk-socialIcons--top-bar" style="flex-wrap:nowrap;">
                        <a href="https://https://web.facebook.com/" target="_blank" data-toggle="tooltip"
                            data-placement="top" title="Ikuti di Facebook                "
                            class="facebook button icon circle ">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" data-toggle="tooltip" data-placement="top"
                            title="Tweet kami!" class="twitter  button icon circle  "><i class="icon-twitter "></i></a>
                        <a href="https://www.instagram.com/" target="_blank" data-toggle="tooltip" data-placement="top"
                            title="Instagram kami!" class="instagram  button icon circle "><i
                                class="icon-instagram"></i></a>
                        <a href="https://" target="_blank" data-toggle="tooltip" data-placement="top"
                            title="Lihat video youtube kami untuk mengetahui lebih lanjut!"
                            class=" youtube button icon circle "><i class="icon-youtube-play"></i></a>

                    </div>
                    <button class="btn button icon circle share" style="" id="btn-showSocialIcons--top-bar">
                        <i class="icon-share" style="left:-1px;"></i>
                        <i class="icon-close hide"></i>
                    </button>
                    <div class=" line"></div>

                    <a class="country_detail" href="javascript:void(0);" data-trigger='nifty'
                        data-target='#langModal-mobile'>
                        <span class="d-inline-block circle-id"></span>
                        <span class="contry_name">Indonesia</span>
                        <span class='dot'></span>
                        <span class="lang_name">Bhs Indonesia</span>
                    </a>
                    <div class="  line"></div>

                </div>
                <div class="flex-row text-right mid">

                    @auth
                        <a class="member_leavel enlarge" href="{{ url('profile/member-level') }}">
                            <div class="member_leavel_name">Baru</div>

                        </a>
                        <div class="line"></div>


                        <a href="{{ url('profile') }}" class="enlarge user-account">
                            <div>
                                <i class="icon-user-o" style="font-size:1.2rem;"></i>
                            </div>
                            <div class="text-center username">


                                <br>
                                <span>@auth {{ Auth::user()->username }} @endauth </span>
                            </div>
                        </a>

                        <div class="line"></div>


                        <a class="pointer button icon" href="{{ url('memo') }}" data-toggle="tooltip" data-placement="top"
                            title="Pesan">
                            <i class="icon-mail_outline"></i>
                            <div class="mail_icon" style="display:none;">
                                0
                            </div>
                        </a>
                        <div class="line"></div>

                        <a class="pointer" href="javascript:void(0)"
                            onclick="openLiveChat('{{ $siteConfig->url_livechat }}' , '')"
                            data-toggle="tooltip" data-placement="top" title="Obrolan Langsung">
                            <i class="icon-chat1"></i>
                        </a>
                        <div class="  line"></div>

                        <div class="social-icons info_toggle fade-in" id="blk-helpIcons--nexttop-bar"
                            style="flex-wrap:nowrap;">
                            <a class="pointer button twitter icon circle" href="{{ url('info/how-sportsbook') }}"
                                data-toggle="tooltip" data-placement="top" title="Cara bermain">
                                <i class="icon-help-circle"></i>
                            </a>
                            <a class="pointer button twitter icon circle" href="{{ url('info/faq-general') }}"
                                data-toggle="tooltip" data-placement="top" title="Pusat Info">
                                <i class="icon-info"></i>
                            </a>
                        </div>
                        <button class="btn button icon circle share" style="" id="btn-showhelpIcons--nexttop-bar">
                            <i class="icon-bars"></i>
                            <i class="icon-close hide"></i>
                        </button>
                    @endauth
                    @guest
                        <a class="pointer button twitter icon" href="{{ url('info/how-sportsbook') }}"
                            data-toggle="tooltip" data-placement="top" title="Cara bermain">
                            <i class="icon-help-circle"></i>
                        </a>
                        <div class="line"></div>


                        <a class="pointer button twitter icon" href="{{ url('info/faq-general') }}"
                            data-toggle="tooltip" data-placement="top" title="Pusat Info">
                            <i class="icon-info"></i>
                        </a>
                        <div class="  line"></div>
                        <a class="pointer" href="javascript:void(0)"
                            onclick="openLiveChat('{{ $siteConfig->url_livechat }}' , '')" data-toggle="tooltip"
                            data-placement="top" title="Obrolan Langsung">
                            <i class="icon-chat1"></i>
                        </a>
                        <div class="  line"></div>
                    @endguest

                    <button style="{{ Auth::check() ? 'display:none' : '' }}" type="button"
                        class="btn fix btn-tertiery green_over" _ajaxLForm data-trigger='nifty'
                        data-target='#login-modal--layout'>LOGIN</button>
                    <a style="{{ Auth::check() ? 'display:none' : '' }}" type="button"
                        class="btn fix btn-accent yellow_over" style="margin-right: 0;"
                        href="{{ url('register') }}">DAFTAR</a>
                    <a style="{{ Auth::check() ? '' : 'display:none' }}" class="btn btn-primary"
                        href="{{ url('logout') }}" style="margin-right: 0;" i18n="@Logout">KELUAR</a>
                </div>

                <div class="acc-panel flex-row last" style="{{ Auth::check() ? '' : 'display:none' }}">
                    <div class="dropdown">
                        <button class="btn btn-link enlarge wallet btn-refresh-wallet">
                            <i class="icon-wallet"></i>
                            <span class="bal-txt">IDR @auth {{ number_format(Auth::user()->active_balance, 2) }}
                                @endauth
                            </span>
                            <i class="icon-refresh-2"></i>
                        </button>
                        <button class="btn btn-link wallet" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="wallet-dd-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="18"
                                    height="18" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                    viewBox="0 0 512 298.04">
                                    <path fill-rule="nonzero"
                                        d="M12.08 70.78c-16.17-16.24-16.09-42.54.15-58.7 16.25-16.17 42.54-16.09 58.71.15L256 197.76 441.06 12.23c16.17-16.24 42.46-16.32 58.71-.15 16.24 16.16 16.32 42.46.15 58.7L285.27 285.96c-16.24 16.17-42.54 16.09-58.7-.15L12.08 70.78z" />
                                </svg>
                            </span>
                        </button>
                        <div class="dropdown-menu wallet-balance-dd">
                            <div class="wallet-type">
                                <div class="col-md-6 noSidePadding">Dompet Permainan:</div>
                                <button class="col-md-5 noSidePadding btn-link wallet-balance btn-refresh-wallet">
                                    <span class="bal-txt">
                                        IDR
                                    </span>
                                </button>
                                <i class="icon-refresh-2 col-md-1 noSidePadding btn-refresh-wallet"></i>
                            </div>
                            <div class="wallet-type">
                                <div class="col-md-6 noSidePadding">Dompet Referral:</div>
                                <button class="col-md-5 noSidePadding btn-link wallet-balance btn-refresh-wallet-ref">
                                    <span class="bal-ref-txt">
                                        IDR 0.00
                                    </span>
                                </button>
                                <i class="icon-refresh-2 col-md-1 noSidePadding btn-refresh-wallet-ref"></i>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown enlarge">
                        <div class="dropdown-menu othergame_blc" aria-labelledby="dropdownothergameblc"
                            style="min-width:230px">
                            <table class="table">

                                <tr>
                                    <td class="col-xs-5"><button class="btn btn-clear btn-refresh-IDN">IDN <i
                                                class="icon-refresh"></i></button></td>
                                    <td class="col-xs-6"><span class="bal-IDN">IDR 0.00</span></td>
                                    <td class="col-xs-1"><button class="btn btn-clear btn-tran-IDN"
                                            data-toggle="tooltip" data-placement="bottom"
                                            title="Transfer SEMUA ke Dompet"><i
                                                class="icon-arrow-bold-up"></i></button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="dropdown enlarge">
                        <button class="btn btn-clear btn-collapse-balances pull-right animation"
                            id="transaction-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Transaksi &nbsp;
                            <span class="wallet-dd-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="18"
                                    height="18" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                    viewBox="0 0 512 298.04">
                                    <path fill-rule="nonzero"
                                        d="M12.08 70.78c-16.17-16.24-16.09-42.54.15-58.7 16.25-16.17 42.54-16.09 58.71.15L256 197.76 441.06 12.23c16.17-16.24 42.46-16.32 58.71-.15 16.24 16.16 16.32 42.46.15 58.7L285.27 285.96c-16.24 16.17-42.54 16.09-58.7-.15L12.08 70.78z" />
                                </svg>
                            </span>
                        </button>
                        <div class="dropdown-menu transaction-dropdown" aria-labelledby="transaction-dropdown">
                            <ul class="drop_link" style="margin-bottom:0">

                                <li><a href="{{ url('account/deposit') }}"> <i class="icon-pig"></i>
                                        <span>Deposit</span></a></li>

                                <li><a href="{{ url('account/withdrawal') }}"><i class="icon-transfer"></i>
                                        <span>Withdraw</span></a></li>

                                <li><a href="{{ url('account/history') }}"><i class="icon-history"></i>
                                        <span i18n="@History">Pernyataan</span></a>
                                </li>

                                <li style="border-bottom: 0"><a href="{{ url('profile/referral-downline') }}"><i
                                            class="icon-users"></i> <span>Referral</span></a></li>

                            </ul>
                        </div>
                    </div>
                    <a href="{{ url('promo/my-promo') }}" class="enlarge"><i class="icon-gift"
                            style="font-size:1.2rem;"></i><span>Promo saya</span></a>

                </div>
            </div>
            <div class="flex-col show-for-medium flex-right">
                <div class="flex-row  text-right" style="justify-content: flex-end;">
                    <button style="{{ Auth::check() ? 'display:none' : '' }}" type="button"
                        class="btn btn-primary btnLogin" _ajaxLForm _ajaxLForm data-trigger='nifty'
                        data-target='#login-modal--layout'>LOGIN</button>
                    <a style="{{ Auth::check() ? 'display:none' : '' }}" type="button" class="btn btn-tertiery"
                        href="{{ url('register') }}">DAFTAR</button>
                        <a style="{{ Auth::check() ? '' : 'display:none' }}" class="btn btn-primary"
                            href="{{ url('logout') }}">KELUAR</a>
                </div>
            </div>
        </div>
    </div>

</div>
