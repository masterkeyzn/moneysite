<div class="container mt-3">
    <style media="screen">
    </style>
    <div class="menu-bottom">
        <nav class="navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="flex-row  text-center">
                    <div class="  footericon-single">
                        <a href="{{ url('') }}"><i class="icon-home"></i>
                            <div>HOME</div>
                        </a>
                    </div>
                    @auth
                        <div class="  footericon-single">
                            <a href="{{ url('promo/my-promo') }}"><i class="icon-gift"></i>
                                <div style="text-transform:uppercase;">Promo saya</div>
                            </a>
                        </div>
                        <div class=" footericon-single">
                            <a href="javascript:void(0);" class="text-uppercase togglemenu-trigger footer-funds"
                                data-showID="#fundshover_menu"><i class="icon-transfer"></i>
                                <div>Dana</div>
                            </a>
                            <ul class="list-inline horizontal-hover togglemenu-content" id="fundshover_menu">
                                <li>
                                    <a href="{{ url('account/deposit') }}" (click)="closeNav($event);">
                                        <div class="fs-sm mt-1" i18n>Deposit</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('account/withdrawal') }}" (click)="closeNav($event);">
                                        <div class="fs-sm mt-1" i18n>Withdraw</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('account/history') }}" (click)="closeNav($event);">
                                        <div class="fs-sm mt-1" i18n="@History">Pernyataan &nbsp;
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=" footericon-single">
                            <a href="{{ url('memo') }}" style="position:relative;"><i class="icon-mail_outline"></i>
                                <div>MEMO</div>
                                <div class="mail_icon" style="display:none;">
                                    0
                                </div>
                            </a>
                        </div>
                    @endauth


                    @guest

                        <div class="  footericon-single">
                            <a href="{{ url('promotion') }}"><i class="icon-gift"></i>
                                <div>PROMOSI</div>
                            </a>
                        </div>
                    @endguest


                    <div class=" footericon-single" style="position: relative">
                        <a href="{{ $siteConfig->url_livechat }}" class="text-uppercase togglemenu-trigger"><i
                                class="icon-chat1"></i>
                            <div>Obrolan Langsung</div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
        $(

            function() {
                $(".togglemenu-trigger").click(function() {
                    var currentToggle = $(this).attr("data-showID");
                    if ($(currentToggle).hasClass("show")) {
                        $(currentToggle).removeClass("show");
                    } else {
                        $(".togglemenu-content").removeClass("show");
                        $(currentToggle).addClass("show");
                    }

                });
            }

        );
    </script>
</div>
