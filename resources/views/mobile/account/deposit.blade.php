<x-mobile.app>
    <style>
        * {
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
        }
    </style>
    <script>
        function load_method_form() {
            showLoadingImgFn();
            $.get('{{ url('account/load_methods_form') }}', function(d) {
                $('.content-form').html(d);
                removeLoadingImgFn();
            }).fail(
                function(xhr, status, error) {
                    removeLoadingImgFn();
                    sweetAlert(xhr.responseJSON ? xhr.responseJSON.message : xhr.responseText);
                }
            );
        }
        $(document).ready(function() {
            // load_method_form();
        })
    </script>
    <style>

    </style>
    <div class="container-wrapper acc">
        <div class="container container-box noSidePadding">
            <div class="head-content">
                <div class="row no-gutters">
                    <div class="col-12">
                        <ng-content select="app-game-bals"></ng-content>
                    </div>
                    <div class="col-12 account_menu">

                        <div class="mdc-tab-bar" role="tablist">
                            <div class="mdc-tab-scroller">
                                <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll mdc-tab-scroller__scroll-x"
                                    style="margin-bottom: 0px;">
                                    <div class="mdc-tab-scroller__scroll-content" style="justify-content:center">
                                        <ul class="list-inline" style="margin-bottom: 0">
                                            <li> <!---->
                                                <div class="deposit-notice-menu">
                                                    <a role="tab" href="{{ url('account/deposit') }}"
                                                        data-active='accountdeposit' class="mdc-tab mdc-tab--active"
                                                        aria-selected="true" tabindex="-1"
                                                        id="goog_2098347606-FIXED-0">
                                                        <span class="mdc-tab__content">

                                                            <span
                                                                class="mdc-tab__text-label"><!---->Deposit<!----></span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                                        &nbsp;

                                                    </a>

                                                </div>

                                                <!---->
                                            </li>
                                            <li> <a role="tab" href="{{ url('account/withdrawal') }}"
                                                    data-active='accountwithdrawal' class="mdc-tab"
                                                    aria-selected="false" tabindex="0" id="goog_2098347606-FIXED-1">
                                                    <span class="mdc-tab__content">

                                                        <span class="mdc-tab__text-label"><!---->Withdraw<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                                </a><!----></li>
                                            <li><a role="tab" href="{{ url('account/lastDirectTransfer') }}"
                                                    data-active='accountlastdirecttransfer' class="mdc-tab"
                                                    aria-selected="false" tabindex="-1" id="goog_2098347606-FIXED-3">
                                                    <span class="mdc-tab__content">

                                                        <span class="mdc-tab__text-label"><!---->5
                                                            Transaksi Terakhir<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                </a><!----></li>
                                            <li>
                                                <!----><a role="tab" href="{{ url('account/history') }}"
                                                    data-active='accounthistory' class="mdc-tab" aria-selected="false"
                                                    tabindex="-1" id="goog_2098347606-FIXED-2">
                                                    <span class="mdc-tab__content">

                                                        <span
                                                            class="mdc-tab__text-label"><!---->Pernyataan<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                </a><!---->
                                            </li>
                                        </ul>




                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="content">
                <div class="deposit">
                    <div class="row">

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-xs-12 col-md-8 content-form">
                                <div class="methods_form">
                                    @if ($bankdeposit->isNotEmpty())
                                        <div class="box-wrapper plr-15">
                                            <div class="row   align-items-center">

                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div class="">
                                                        Konfirmasi Transfer Bank <br> (Manual Cek)
                                                    </div>
                                                </div>

                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">
                                                    @foreach ($bankdeposit as $bank)
                                                        <a class="payment-methods payment-methods-items {{ $bank->status_bank === 'active' ? 'online' : 'offline' }}"
                                                            data-form="0" data-provider="{{ $bank->id }}"
                                                            data-method="5" href="javascript:void(0);">


                                                            <div
                                                                class="verti {{ $bank->status_bank === 'active' ? 'online' : 'offline' }}">
                                                                <img class="img-fluid" alt="bsi"
                                                                    src="{{ asset('assets/svg/bank_logo/' . strtolower($bank->bank_name) . '.svg') }}">
                                                            </div>

                                                        </a>
                                                    @endforeach
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($ewalletdeposit->isNotEmpty())
                                        <div class="box-wrapper plr-15">
                                            <div class="row   align-items-center">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div class="">
                                                        E-walet <br> (Manual Cek)
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">
                                                    @foreach ($ewalletdeposit as $ewallet)
                                                        <a class="payment-methods payment-methods-items  {{ $ewallet->status_bank === 'active' ? 'online' : 'offline' }}"
                                                            data-provider="{{ $ewallet->id }}" data-method="7"
                                                            href="javascript:void(0);">

                                                            <div
                                                                class="verti {{ $ewallet->status_bank === 'active' ? 'online' : 'offline' }}">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('assets/svg/bank_logo/' . strtolower($ewallet->bank_name) . '.svg') }}">
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($pulsadeposit->isNotEmpty())
                                        <div class="box-wrapper plr-15">
                                            <div class="row   align-items-center">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div class="">
                                                        E-walet <br> (Manual Cek)
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">
                                                    @foreach ($pulsadeposit as $pulsa)
                                                        <a class="payment-methods payment-methods-items  {{ $pulsa->status_bank === 'active' ? 'online' : 'offline' }}"
                                                            data-provider="{{ $pulsa->id }}" data-method="6"
                                                            href="javascript:void(0);">

                                                            <div
                                                                class="verti {{ $pulsa->status_bank === 'active' ? 'online' : 'offline' }}">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('assets/svg/bank_logo/' . strtolower($pulsa->bank_name) . '.png') }}">
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (env('PAYMENT_GATEWAY_STATUS') === true)
                                        <div class="box-wrapper plr-15 ">
                                            <div class="row  align-items-center ">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <span></span>
                                                    <div class=" ">
                                                        Jasa Pembayaran QRIS <br> (Cek Automatis)
                                                    </div>
                                                </div>

                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap pg_sec"
                                                    style="align-items: stretch;">

                                                    <a class="pg_method payment-methods  online"
                                                        href="javascript:void(0);" data-form="53" data-method="9">

                                                        <div class="pg_title online">
                                                            <img class="img-fluid provider_logo" alt="qris - prestige"
                                                                src="https://files.sitestatic.net/sprites/bank_logos/payment_gtway/bank_logos/prestige.png?v=5.44">
                                                        </div>
                                                        <div class="pg_bank_logs_sec">

                                                            <img class="img-fluid pg_bank_logo" alt="QRIS-prestige"
                                                                src="https://files.sitestatic.net/sprites/bank_logos/payment_gtway/bank_logos/QRIS.png"
                                                                style="display:block; margin-left:auto; margin-right:auto">



                                                        </div>
                                                    </a>
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <script>
                                    function load_form($type, $method = 0, $provider = 0) {
                                        showLoadingImgFn();
                                        $.get('{{ url('account/load_deposit_form') }}?isgateway=' + $type + '&method=' + $method +
                                            '&provider=' + $provider,
                                            function(d) {
                                                $('.content-form').html(d);
                                                removeLoadingImgFn();
                                                window.scrollTo(0, 0);
                                            }).fail(
                                            function(xhr, status, error) {
                                                removeLoadingImgFn();
                                                sweetAlert(xhr.responseJSON ? xhr.responseJSON.message : xhr.responseText);
                                            }
                                        );
                                    }

                                    $(document).ready(function() {

                                        let def = 'BankTransfer';
                                        let preload = $('#preload').val();
                                        $('.deposit .tab-pane[data-toggle="' + def + '"]').toggleClass('show');
                                        if (preload == 0) {
                                            load_form(preload);
                                        }
                                        $('.payment-methods').on('click', function(e) {
                                            e.preventDefault();

                                            $(this).addClass('tick');
                                            $('.payment-methods').removeClass('active');
                                            $(this).addClass('active');
                                            var _self = this;

                                            function load_dform() {
                                                load_form($(_self).data('form'), $(_self).data('method'), $(_self).data('provider'));
                                            }
                                            if ($(this).hasClass('offline')) {
                                                sweetAlert(transMsgs.offlineBank, 'warning', 'Warning', true).then(
                                                    function(isConfirm) {
                                                        // if(isConfirm){ // The isConfirm is return undefined value. So hide this condition.
                                                        load_dform();
                                                        // }
                                                    }
                                                );

                                            } else {
                                                load_dform();
                                            }


                                        })



                                    });
                                </script>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-wrapper nifty-modal slide-in-bottom add_bank_modal" id="regbank_popup__depo"></div>

                <div class='md-overlay'></div>

            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {

            $(function() {
                var path = window.location.pathname || '';
                path = path.replace(new RegExp('/', 'g'), '').toLowerCase();
                $('.mdc-tab[data-active="' + path + '"]').addClass('mdc-tab--active');
                $('.mdc-tab[data-active="' + path + '"] .mdc-tab-indicator').addClass(
                    'mdc-tab-indicator--active');
            });

        });
    </script>
</x-mobile.app>
