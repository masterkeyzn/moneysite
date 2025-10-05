<!--This Blade is just to cater for multiple extends -->



<div class="container-wrapper profile-head">
    <div class="container container-box noSidePadding">
        <div class="title fs-lg clearfix">
            <button class="btn btn-link " id="btn-close--login-modal"> X
            </button>&nbsp;&nbsp;
            <span>Profil saya</span>

            <a href="{{ url('logout') }}" class="btn-logout"><i class="icon-logout"></i></a>
        </div>
        <div class="head-content">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <div class="row no-gutters">
                        <div class="clearfix col-xs-12 col-md-7">

                            <div class="acc_safety_info ">

                                <div class="flex-row  text-center icon_menu">
                                    <div class="icon-single">
                                        <a href="{{ url('profile/referral-downline') }}">
                                            <i class="icon-user1"></i>
                                            <div>
                                                Referral </div>
                                        </a>
                                    </div>
                                    <div class="icon-single">
                                        <a href="{{ url('memo') }} " class="mail_link">
                                            <i class="icon-envelope"></i>
                                            <div>MEMO</div>
                                            <div class="mail_icon" style="display:none;">
                                                0
                                            </div>
                                        </a>
                                    </div>
                                    <div class="icon-single">
                                        <a href="{{ url('profile/member-level') }}" class="mail_link ">
                                            <i class="icon-users"></i>
                                            <div>Tingkat Anggota</div>
                                        </a>
                                    </div>
                                    <div class="icon-single">
                                        <a href="{{ url('profile/security') }}" class="mail_link ">
                                            <i class="icon-users"></i>
                                            <div>Keamanan</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5  mt-4  mt-md-2">

                </div>
                <div class="col-xs-12 carousel slide" data-ride="carousel" id="wallet-balance">
                    <div class="swiper-wrapper carousel-inner">
                        <div class="bal-box swiper-slide item active">
                            <button class="btn btn-clear btn-refresh-wallet">
                                <div class="row no-gutters">
                                    <div class="col-xs-12">
                                        <div class="bal-box-inner">
                                            <span class="bal-txt fs-lg">IDR
                                                {{ number_format(Auth::user()->active_balance, 2) }}</span>
                                            &nbsp;
                                            <i class="i-refresh icon-refresh-2"></i>
                                        </div>
                                        <div class="bal-title">
                                            Dompet Permainan </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="bal-box swiper-slide item">
                            <button class="btn btn-clear btn-refresh-wallet-ref">
                                <div class="row no-gutters">
                                    <div class="col-xs-12">
                                        <div class="bal-box-inner">
                                            <span class="bal-ref-txt fs-lg">IDR 0.00</span>
                                            &nbsp;
                                            <i class="i-refresh icon-refresh-2"></i>
                                        </div>
                                        <div class="bal-title">
                                            Dompet Referral </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <a href="#" class="swiper-btn swiper-button-prev swiper-button-disabled" role="button"
                            onclick="$('#wallet-balance').carousel('prev');$('.swiper-btn').toggleClass('swiper-button-disabled')">
                            <span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.1587 23.9614C20.4207 23.6994 20.4207 23.2745 20.1587 23.0124L14.1464 17.0001L20.1587 10.9877C20.4207 10.7256 20.4207 10.3008 20.1587 10.0387C19.8966 9.77668 19.4717 9.77668 19.2097 10.0387L12.7229 16.5256C12.4608 16.7877 12.4608 17.2125 12.7229 17.4745L19.2097 23.9614C19.4717 24.2235 19.8966 24.2235 20.1587 23.9614Z" />
                                </svg>
                            </span>
                        </a>

                        <a href="#" class="swiper-btn swiper-button-next" role="button"
                            onclick="$('#wallet-balance').carousel('next');$('.swiper-btn').toggleClass('swiper-button-disabled')">
                            <span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.8413 10.0386C13.5792 10.3006 13.5792 10.7255 13.8413 10.9876L19.8536 16.9999L13.8413 23.0123C13.5792 23.2744 13.5792 23.6992 13.8413 23.9613C14.1033 24.2233 14.5282 24.2233 14.7903 23.9613L21.2771 17.4744C21.5392 17.2123 21.5392 16.7875 21.2771 16.5255L14.7903 10.0386C14.5282 9.77653 14.1033 9.77653 13.8413 10.0386Z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12  mt-3  ">
                    <div class="mdc-tab-bar" role="tablist">
                        <div class="mdc-tab-scroller">
                            <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll profile-scoller"
                                style="margin-bottom: 0px; overflow-x: scroll;">
                                <div class="mdc-tab-scroller__scroll-content">
                                    <!---->
                                    <a role="tab" href="{{ url('profile/edit') }}" data-tabname="edit"
                                        data-active="profileedit" class="mdc-tab" aria-selected="false" tabindex="-1"
                                        id="goog_2098347606-FIXED-0">
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

                                            <span class="mdc-tab__text-label"><!---->Tukar kata sandi<!----></span>

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

                                            <span class="mdc-tab__text-label"><!---->Referral Downline<!----></span>

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

                                            <span class="mdc-tab__text-label"><!---->Tingkat Anggota<!----></span>

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

            <div class="outlet tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="container-b3">
                        <!--Outlet -->
                        <div class="row profile-edit">
                            <div class="col-lg-5 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Nama pengguna :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding username-wrapper" style="flex-wrap: wrap">
                                        <div>{{ Auth::user()->username }}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Tingkat Anggota :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        <div class="memer_leavel">
                                            <p>New</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Nama Sesuai Rekening :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        <p>{{ Auth::user()->userbank->account_name }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Alamat email :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xs-12 ">
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Nomor Kontak. :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        <p>{{ Auth::user()->phone }}</p>
                                    </div><!--(//TODO masked)-->
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Refferal Kode :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        @if (Auth::user()->referral && Auth::user()->referral->status == 'active')
                                            <p>
                                                <input type="text" class="form-control"
                                                    value="/register?ref={{ Auth::user()->referral->referral_code }}"
                                                    readonly id="elCopyText"
                                                    style="width: 80%;display:inline-block;">&nbsp;&nbsp;&nbsp;<a
                                                    href="javascript:void(0);" id="btn-copy--profile-edit"> <i
                                                        class="icon-copy"></i></a>
                                            </p>
                                        @elseif (Auth::user()->referral && Auth::user()->referral->status == 'inactive')
                                            <p>
                                                <span class="kyc-label unverified"><i class="icon-info"></i>
                                                    Suspended</span>
                                            </p>
                                        @else
                                            <p>
                                                <a class="" href="{{ url('profile/activate-referral') }}">
                                                    <span class="kyc-label unverified"><i class="icon-info"></i>
                                                        Unverified</span>
                                                    <span>Klik sini untuk mengaktifkan Kode Referal</span>
                                                </a>
                                            </p>
                                        @endif
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xs-4 noSidePadding">
                                        <p class="_label" i18n>Pin kedua :</p>
                                    </div>
                                    <div class="col-xs-8 noSidePadding">
                                        <p>
                                            <span class="switch_lable">OFF</span>
                                            <label class="switch">
                                                <input type="checkbox"  name="is_on_second_pin"
                                                    value="1">
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="switch_lable">ON</span>
                                            <a href="{{ url('setup-pin') }}" class="btn btn-secondary"
                                                style=display:none;>Reset sini</a>
                                        </p>
                                    </div>


                                </div>
                            </div>

                        </div>


                        <script>
                            $(document).ready(function() {
                                /*set domain based ref url*/
                                var base_url = window.location.origin;
                                var ref_url = $("#elCopyText").val();
                                var ref_final_url = base_url + ref_url;
                                $("#elCopyText").val(ref_final_url);
                            });
                        </script>
                    </div>
                </div>

            </div>

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
