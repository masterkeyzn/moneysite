<x-mobile.app>
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
                                                        data-active='accountdeposit' class="mdc-tab"
                                                        aria-selected="false" tabindex="-1"
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
                                                    data-active='accounthistory' class="mdc-tab mdc-tab--active"
                                                    aria-selected="true" tabindex="-1" id="goog_2098347606-FIXED-2">
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


                <div class="row">
                    <div class="pb-4 pb-md-0 col-md-8">
                        <div class="title">
                            <h6 class="d-none d-md-block">&nbsp;</h6>
                        </div>
                        <link rel="stylesheet" type="text/css"
                            href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
                        <link rel="stylesheet" type="text/css"
                            href="https://cdn.sitestatic.net/assets/daterangepicker/daterangepicker.css" />
                        <form id="searchhistory" class="needs-validation searchhistory">
                            @csrf
                            <div class="box-wrapper plr-15">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-3 col-xs-4 ">
                                        <div class="">
                                            Jenis Transaksi<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                        <select class="form-control m-15" name="transaction_type" id="transaction_type"
                                            required>
                                            <option disabled>- Silahkan pilih -</option>
                                            <option value="1" selected> Pernyataan Game </option>
                                            <option value="2"> Transaksi </option>
                                            <!-- <option value="3"> Betting </option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-3 col-xs-4 ">
                                        <div class="">
                                            Tipe Penyaring </div>
                                    </div>
                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                        <select class="form-control m-15" name="filter_type" id="filter_type">
                                            <option value="">- SEMUA -</option>
                                            <option value="Rebate"> Rebate </option>
                                            <option value="Referral"> Referral </option>
                                            <!-- <option value="3"> Betting </option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center wrapper dateWrapper" style="display:none;">
                                    <div class="col-md-3 col-xs-4 ">
                                        <div class="">
                                            Tanggal </div>
                                    </div>
                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                        <input type="text" id="datepicker_cutoff12pm"
                                            class="form-control datepicker m-15" name="daterange" />
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center wrapper dateWrapper">
                                    <div class="col-md-3 col-xs-4 ">
                                        <div class="">
                                            Tanggal </div>
                                    </div>
                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                        <input type="text" id="datepicker_cutoff12am"
                                            class="form-control datepicker m-15" name="daterange" />
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-3 col-xs-4  "></div>
                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                        <button type="submit" class="btn btn-primary m-15" id="history_search"
                                            style="font-size:inherit;padding:revert !important;">Cari
                                            Pesan Disini</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="mt-2" id="historySearchResult">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @slot('js')
        <script type="text/javascript" src="https://cdn.sitestatic.net/assets/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.sitestatic.net/assets/daterangepicker/daterangepicker.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <script src="https://cdn.sitestatic.net/assets/jquery-validation/jquery.validate.min.js"></script>
        <script src="https://cdn.sitestatic.net/assets/jquery-validation/additional-methods.min.js"></script>
        <script>
            $(document).ready(function() {


                $('#transaction_type').on('change', function() {
                    var sel_type = $(this).val();

                    $('#datepicker_cutoff12pm').prop('disabled', sel_type != 1).parents('.dateWrapper').toggle(
                        sel_type == 1);
                    $('#datepicker_cutoff12am').prop('disabled', sel_type != 2).parents('.dateWrapper').toggle(
                        sel_type == 2);
                });

                var start_cutoff12pm = moment().subtract(0, 'days').subtract(12, 'hours'),
                    end_cutoff12pm = moment().subtract(12, 'hours');
                console.log(start_cutoff12pm);

                var start = moment().subtract(0, 'days'),
                    end = moment();
                console.log(start);
                $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                });

                $('.datepicker').on('click', function(e) {
                    e.preventDefault();
                    $(this).attr("autocomplete", "off");
                });


                function cb(start, end) {
                    console.log(this);
                    console.log(start);
                    console.log(end);
                    $(this).val(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
                }



                $('#datepicker_cutoff12pm').daterangepicker({
                    locale: {
                        format: 'YYYY-MM-DD',
                        cancelLabel: 'Clear'
                    },
                    startDate: start_cutoff12pm,
                    endDate: end_cutoff12pm,
                    ranges: {
                        "Hari ini": [moment().subtract(12, 'hours'), moment().subtract(12, 'hours')],
                        "Kemarin": [moment().subtract(1, 'days').subtract(12, 'hours'), moment().subtract(1,
                            'days').subtract(12, 'hours')],
                        "7 Hari Terakhir": [moment().subtract(6, 'days').subtract(12, 'hours'), moment()
                            .subtract(12, 'hours')
                        ],
                        "30 hari terakhir": [moment().subtract(29, 'days').subtract(12, 'hours'), moment()
                            .subtract(12, 'hours')
                        ],
                        "Bulan ini": [moment().startOf('month'), moment().endOf('month').subtract(12, 'hours')],
                        "Bulan lalu": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month').subtract(12, 'hours')]
                    }
                }, cb);

                $('#datepicker_cutoff12am').daterangepicker({
                    locale: {
                        format: 'YYYY-MM-DD',
                        cancelLabel: 'Clear'
                    },
                    startDate: moment().startOf('month'),
                    endDate: moment().endOf('month'),
                    ranges: {
                        "Hari ini": [moment(), moment()],
                        "Kemarin": [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        "7 Hari Terakhir": [moment().subtract(6, 'days'), moment()],
                        "30 hari terakhir": [moment().subtract(30, 'days'), moment()],
                        "Bulan ini": [moment().startOf('month'), moment().endOf('month')],
                        "Bulan lalu": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    }
                }, cb);


                //cb(start, end);

                $("#searchhistory").validate({
                    rules: {
                        transaction_type: {

                            required: true,
                        },

                        daterange: {
                            required: true,

                        }
                    },
                    // Specify validation error messages
                    messages: {

                        transaction_type: {
                            required: " tidak boleh kosong",

                        },
                        daterange: {
                            required: " tidak boleh kosong",
                        },
                    },
                    errorElement: "em",
                    errorPlacement: function(error, element) {
                        // Add the `help-block` class to the error element
                        error.addClass("help-block mlr-15");

                        // Add `has-feedback` class to the parent div.form-group
                        // in order to add icons to inputs
                        //element.parents(".col-sm-6").addClass("has-feedback");
                        element.addClass("has-feedback");
                        if (element.prop("type") === "checkbox") {
                            error.insertAfter(element.parent("label"));
                        } else {
                            error.insertAfter(element);
                        }

                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if (!element.next("i")[0]) {
                            $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                                .insertAfter(element);
                        }
                    },
                    success: function(label, element) {
                        // Add the span element, if doesn't exists, and apply the icon classes to it.

                        if (!$(element).next("i")[0]) {
                            $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                                .insertAfter($(element));
                        }
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass("has-error").removeClass("has-success");
                        $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).addClass("has-success").removeClass("has-error");
                        $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                    },
                    submitHandler: function(form) {
                        $('#historySearchResult').html('');
                        $('button[type=submit]').prop('disabled', true);
                        $.post('{{ url('getStatement') }}', $('#searchhistory').serialize(),
                            function(data) {


                                $('#historySearchResult').html(data);

                            }).always(
                            function() {
                                $('button[type=submit]').prop('disabled', false);
                                $('button[type=submit]').removeClass("disabled");
                            }

                        );
                        return false;
                    }
                });

                var searchParams = new URLSearchParams(window.location.search);
                var trans_type = searchParams.get('transactionType');
                var filter_type = searchParams.get('filterType');
                if (trans_type) {
                    $('#transaction_type').val(trans_type);
                }
                if (filter_type) {
                    $('#filter_type').val(filter_type);
                }
                var submitButton = document.getElementById('history_search');
                submitButton.click();
            });
        </script>
    @endslot
</x-mobile.app>
