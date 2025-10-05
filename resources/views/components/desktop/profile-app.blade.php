<x-desktop.app>
    <div class="content my01">
        <div class="container-wrapper profile-head">
            <div class="container container-box noSidePadding">
                <div class="title fs-lg clearfix">
                    <span>Profil saya</span>

                </div>
                <div class="head-content">
                    <div class="row no-gutters">
                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <div class="row no-gutters">
                                <div class="clearfix col-xs-12 col-md-7">
                                    <div class="pull-left  ml-3" style="margin-right:1rem;">
                                        <!--mr-2-->
                                        <i class="icon-shield"></i>
                                    </div>
                                    <div class="acc_safety_info ">
                                        <div class="fs-md" i18n>Keamanan Akun: Normal</div>
                                        <div class="info-2">
                                            <a routerLink="{{ url('profile/edit') }}"><i class="icon-user1"></i></a>
                                            <a href="#"><i class="icon-credit-card-alt"></i></a>
                                            <a href="#"><i class="icon-mobile1"></i></a>
                                            <a href="{{ url('memo') }}" class="mail_link"><i
                                                    class="icon-envelope"></i>
                                                <div class="mail_icon" style="display:none;">
                                                    0
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 mt-4  mt-md-2 text-center msg" i18n>
                                    Anda memiliki <span class="txt_mail_cnt">0</span> pesan baru yang belum dibaca
                                    dari kami. </div>


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5  mt-4  mt-md-2">

                        </div>
                        <div class="col-xs-12  mt-3  ">
                            <div class="mdc-tab-bar" role="tablist">
                                <div class="mdc-tab-scroller">
                                    <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll profile-scoller"
                                        style="margin-bottom: 0px; overflow-x: scroll;">
                                        <div class="mdc-tab-scroller__scroll-content">
                                            <!---->
                                            <a role="tab" href="{{ url('profile/edit') }}" data-tabname="edit"
                                                data-active="profileedit" class="mdc-tab" aria-selected="false"
                                                tabindex="-1" id="goog_2098347606-FIXED-0">
                                                <span class="mdc-tab__content">

                                                    <span class="mdc-tab__text-label"><!---->Detail<!----></span>

                                                </span>

                                                <span class="mdc-tab-indicator">
                                                    <span
                                                        class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                        style=""></span>
                                                </span>

                                                <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                    style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                            </a>
                                            <!---->
                                            <a role="tab" href="{{ url('profile/change-password') }}"
                                                data-tabname="change-password" data-active="profilechange-password"
                                                class="mdc-tab" aria-selected="true" tabindex="0"
                                                id="goog_2098347606-FIXED-1">
                                                <span class="mdc-tab__content">

                                                    <span class="mdc-tab__text-label"><!---->Tukar kata
                                                        sandi<!----></span>

                                                </span>

                                                <span class="mdc-tab-indicator">
                                                    <span
                                                        class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                        style=""></span>
                                                </span>

                                                <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                    style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                            </a>

                                            <!--security-->
                                            <a role="tab" href="{{ url('profile/security') }}"
                                                data-tabname="security" data-active="profilesecurity" class="mdc-tab"
                                                aria-selected="true" tabindex="0" id="goog_2098347606-FIXED-11">

                                                <span class="mdc-tab__content">

                                                    <span class="mdc-tab__text-label">Keamanan</span>

                                                </span>

                                                <span class="mdc-tab-indicator">
                                                    <span
                                                        class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                        style=""></span>
                                                </span>

                                                <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                    style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                            </a>
                                            <!---->

                                            <!---->

                                            <a role="tab" href="{{ url('profile/referral-downline') }}"
                                                data-tabname="referral-downline" data-active="profilereferral-downline"
                                                class="mdc-tab ref_down" aria-selected="false" tabindex="-1"
                                                id="goog_2098347606-FIXED-3">
                                                <span class="mdc-tab__content">

                                                    <span class="mdc-tab__text-label"><!---->Referral
                                                        Downline<!----></span>

                                                </span>

                                                <span class="mdc-tab-indicator">
                                                    <span
                                                        class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                        style=""></span>
                                                </span>

                                                <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                    style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                            </a>

                                            <!---->
                                            <a role="tab" href="{{ url('profile/member-level') }}"
                                                data-tabname="member-level" data-active="profilemember-level"
                                                class="mdc-tab ref_down" aria-selected="false" tabindex="-1"
                                                id="goog_2098347606-FIXED-4">
                                                <span class="mdc-tab__content">

                                                    <span class="mdc-tab__text-label"><!---->Tingkat
                                                        Anggota<!----></span>

                                                </span>

                                                <span class="mdc-tab-indicator">
                                                    <span
                                                        class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                        style=""></span>
                                                </span>

                                                <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                    style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                            </a>
                                            <!---->


                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".comingsoon").click(function(e) {
                    $("#btn-close--login-modal").trigger("click");
                    e.preventDefault();
                    sweetAlert(transMsgs.pageComingSoon);
                    return false;
                });
            });
        </script>
    </div>
    @isset($js2)
        @slot('js')
            {{ $js2 }}
        @endslot
    @endisset
</x-desktop.app>
