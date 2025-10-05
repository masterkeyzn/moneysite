<x-desktop.account-app>
    <div style="padding-right: 15px;  padding-left: 15px;">
        <div class="row">
            <form id="withdrawForm" action="{{ url('withdrawals_store') }}" method="post" class="needs-validation">
                @csrf

                <div class="box-wrapper">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-xs-4 ">
                            <div class="font-weight-bold">
                                Dompet </div>
                        </div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                            <div class="form-check d-flex">
                                <label class="radio m-15">
                                    <input class="with-gap" name="walletType" checked type="radio" value="game">
                                    <span class="filter-title">
                                        <span class="wallet-type-title">Permainan</span>
                                        <span class="wallet-type-amount">IDR
                                            {{ number_format(Auth::user()->active_balance, 2) }}</span>
                                    </span>
                                </label>
                                <label class="radio m-15" id="opt_wdTypeNew">
                                    <input class="with-gap" name="walletType" type="radio" value="referral">
                                    <span class="filter-title">
                                        <span class="wallet-type-title">Referral</span>
                                        <span class="wallet-type-amount">IDR 0.00</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-xs-4">
                            <div class="font-weight-bold">
                                Jumlah </div>
                        </div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                            <input type="tel" class="form-control number m-15 " name="withdrawal_amount"
                                id="withdrawal_amount" autocomplete="off">
                            <div class="alert alert-danger m-15" id="promotion_pending_alert" style="display:none">
                                <strong>Saat ini anda sedang dalam kondisi promosi yang masih
                                    berjalan, silahkan coba untuk melakukan penarikan dana setelah
                                    masa promosi berakhir</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-xs-4 ">
                            <div class="font-weight-bold">
                                Akun </div>
                        </div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                            <div class="form-check d-flex">
                                <label class="radio m-15">
                                    <input class="with-gap" name="withdrawType" checked type="radio" value="existing">
                                    <span class="filter-title">Terdaftar</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center" id="existingbank_show">
                        <div class="col-md-3 col-xs-4 ">
                            <div class="font-weight-bold">
                                Sudah terdaftar<span class="text-danger">*</span>
                            </div>
                        </div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                            <select class="form-control m-15" name="existing_bank" id="existing_bank">

                                <option selected value="">- Silahkan pilih -</option>
                                <option value="{{ Auth::user()->userbank->id }}">
                                    {{ Auth::user()->userbank->bank_name . ' (' . Auth::user()->userbank->account_number . ')' }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-xs-4  ">
                            <div class="font-weight-bold">
                                Nama Sesuai Rekening </div>
                        </div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">

                            <input type="text" disabled name="fullName"
                                value="{{ Auth::user()->userbank->account_name }} " maxlength="100"
                                class="form-control m-15" id="fullName" placeholder="" required>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-xs-4  "></div>
                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                            <button type="submit" class="btn btn-secondary m-15" id="btn-submit">Withdraw</button>
                        </div>
                    </div>
                </div>

            </form>
            <script>
                window.wmin = {{ $siteConfig->min_withdrawal }};
                window.wmax = {{ $siteConfig->max_withdrawal }};
                $(document).ready(function() {
                    $('#withdrawForm').submit(function(e) {
                        if ($('#acc_no').hasClass('pending')) {
                            $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                            showLoadingImgFn();
                            $('#acc_no-loader').show();
                            setTimeout(function() {
                                removeLoadingImgFn();
                                if (!$('#acc_no').hasClass('pending')) {
                                    $('#withdrawForm').submit();
                                }
                            }, 2000);
                        }
                    });

                    $('#acc_no').keyup(function() {
                        if ($('#acc_no').hasClass('pending')) {
                            $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                            $('#acc_no-loader').show();
                        }
                    });


                    // $("#withdrawal_amount").change(function () {
                    //     if (parseInt($('#total').val().replace(/\,/g, '')) < parseInt($(this).val())) {
                    //         alert('Balance not enought.')
                    //         $(this).val('');
                    //     }
                    // });

                    $('#accountNo_show').hide();


                    // $('#withdrawal_amount').on('blur',function(e){
                    //     $(this).val(formatNumberInput(e.target,'blur'));

                    // });

                    // $('#withdrawal_amount').on('keyup',function(e){
                    //     $(this).val(formatNumberInput(e.target,''));

                    // });

                    function setNewAccType() {
                        var selVal = $('#withdrawForm input[type=radio][name=acc_type]:checked').val();
                        $("#acc_no").val(null);

                        if (selVal == 5) {



                            $('#newfundmethod_show select[name=new_bank]').prop('disabled', 'disabled');
                            $('#newfundmethod_show select[name=new_bank]').val('');
                            $('#newbank_show select[name=new_bank]').prop('disabled', false);
                            $('#newfundmethod_show').hide();
                            $('#newbank_show').show();
                            if (window.currencyCode == 'BRL') {
                                $('#agency_code_show').show();
                            }
                            if (window.currencyCode == 'AUD') {
                                $("#bsb_code_show").show();
                            }
                            if (window.currencyCode == 'INR') {
                                $('#ifsc_code_show').show();
                            }

                            $("#new_fund_method").rules("remove", "required");
                            $("#acc_no").attr("minlength", window.accLength);
                            $("#new_bank").rules("add", {
                                required: true,
                                messages: {
                                    required: " tidak boleh kosong",
                                }
                            });

                        } else if (selVal == 7) {

                            $('#newbank_show select[name=new_bank]').prop('disabled', 'disabled');
                            $('#newbank_show select[name=new_bank]').val('');
                            $('#newfundmethod_show select[name=new_bank]').prop('disabled', false);
                            $('#newbank_show').hide();
                            $('#newfundmethod_show').show();
                            $("#new_bank").rules("remove", "required");
                            $("#acc_no").removeAttr("minlength");
                            $("#acc_no").attr("maxlength", "20");
                            if (window.currencyCode == 'BRL') {
                                $('#agency_code_show').hide();
                            }
                            if (window.currencyCode == 'AUD') {
                                $("#bsb_code_show").hide();
                            }
                            if (window.currencyCode == 'INR') {
                                $('#ifsc_code_show').hide();
                            }
                            $("#new_fund_method").rules("add", {
                                required: true,
                                messages: {
                                    required: " tidak boleh kosong",
                                }
                            });
                        }
                    }
                    $('#withdrawForm input[type=radio][name=acc_type]').change(function() {


                        setNewAccType();

                    });

                    $.validator.addMethod(
                        "endWithZero",
                        function(value, element) {
                            return true;
                        },
                        "Nilai harus diakhiri dengan 0"
                    );

                    function onChgWithdrawType() {
                        // var val = $('#withdrawForm input[type=radio][name=withdrawType]:checked').val();

                        window.wmin = {{ $siteConfig->min_withdrawal }};
                        window.wmax = {{ $siteConfig->max_withdrawal }};

                        if ($(this).val() == 'new') {

                            form_validate();

                            $('#existingbank_show').hide();
                            $('#accountNo_show').show();
                            $('#acc_type_btn_group').show();

                            setNewAccType();


                            $("#existing_bank").rules("remove", "required");



                            $("#acc_no").rules("add", {
                                required: true,
                                number: true,
                                minlength: function(element) {
                                    return $("#acc_no").attr('minlength');
                                },
                                maxlength: function(element) {
                                    return $("#acc_no").attr('maxlength');
                                },
                                remote: {
                                    url: "{{ url('checkAccNo-wd') }}",
                                    type: "post",
                                    dataType: "json",
                                    data: {
                                        acc_type: function() {
                                            return $('#withdrawForm input[type=radio][name=acc_type]:checked')
                                                .val();
                                        }
                                    },
                                    complete: function(data) {
                                        isBankAccValidating = false;
                                        $('#acc_no-loader').hide();
                                    },
                                    //  headers: {
                                    //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    //  },
                                },

                                messages: {
                                    required: " tidak boleh kosong",
                                    number: "Hanya numerik yang diterima.",
                                    // minlength:"Panjang Akun harus minimal 8 karakter.",
                                    minlength: function(element) {
                                        var min_length = $("#acc_no").attr('minlength');
                                        var str = "Diperlukan minimal :acc_length karakter";
                                        var minlength_msg = str.replace(":acc_length", min_length);
                                        return minlength_msg;
                                    },
                                    maxlength: "Akun Tidak boleh tidak boleh lebih dari 20 karakter.",
                                    remote: "Nomor akun ini telah terdaftar / ditangguhkan."
                                }
                            });
                        } else //existing bank
                        {
                            $('#newbank_show').hide();
                            $('#newfundmethod_show').hide();
                            $('#accountNo_show').hide();
                            $("#new_bank").rules("remove", "required");
                            $("#new_fund_method").rules("remove", "required");
                            $("#acc_no").rules("remove", "required number remote minlength maxlength");
                            $('#acc_type_btn_group').hide();
                            if ($(this).val() == 'existing') {
                                $('#existingbank_show').show();
                                $("#existing_bank").rules("add", {
                                    required: true,

                                    messages: {
                                        required: " tidak boleh kosong",
                                    }
                                });
                                form_validate();

                            } else {
                                $("#existing_bank").rules("remove", "required");
                                $('#existingbank_show').hide();
                                $.get("{{ url('check_pg_limt') }}?pg_key=" + $(this).data('pg_key'), function(
                                    d) {
                                    if (d && d.data) {
                                        window.wmin = d.data.min_w_amount;
                                        window.wmax = d.data.max_w_amount;
                                        form_validate();
                                    }
                                })
                            }


                        }
                    }
                    $('#withdrawForm input[type=radio][name=withdrawType]').change(onChgWithdrawType);
                    $('#withdrawForm input[type=radio][name=walletType]').change(function() {
                        $('#withdrawForm input[name=withdrawal_amount]').val('');
                    });


                    // $("#existing_bank").change(function () {
                    //     var selectedCountry = $(this).children("option:selected").attr('class');
                    //     selectedCountry=selectedCountry.toString().replace('_',' ');
                    //     $('#ref_no').val(selectedCountry);
                    // });

                    var fullNameRegexPattern = /^[^0-9*|\":<>[\]{}`\\();@#%^*&$~!`=+?-]+$/;
                    if (window.currencyCode == 'HKD' || window.currencyCode == 'IDR') {
                        fullNameRegexPattern = /^\s{0,1}[a-zA-Z-.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                    }

                    function form_validate() {
                        $("#withdrawForm").validate().destroy();
                        $("#withdrawForm").validate({
                            rules: {
                                fullName: {

                                    required: true,
                                    pattern: fullNameRegexPattern,
                                    // pattern : /^\s{0,1}[a-zA-Z_.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/,
                                    minlength: 3
                                },
                                withdrawal_amount: {

                                    required: true,
                                    normalizer: function(value) {
                                        return value ? convertToNumber(value) : null;
                                    },
                                    number: true,
                                    min: window.wmin,
                                    max: window.wmax,
                                    endWithZero: true,
                                    remote: {
                                        url: "{{ url('checkWalletAmount') }}",
                                        type: "post",
                                        dataType: "json",
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                        data: {
                                            walletType: function() {
                                                return $("[name=walletType]:checked").val();
                                            }
                                        }
                                    }
                                },

                                existing_bank: {
                                    required: true,

                                },
                                acc_no: {
                                    required: true,

                                },
                                bsb_no: {
                                    required: true,
                                    minlength: function(element) {
                                        return $("#bsb_no").attr('minlength');
                                    },
                                    maxlength: function(element) {
                                        return $("#bsb_no").attr('maxlength');
                                    },
                                    pattern: /^[0-9]+$/,

                                },
                                ifsc_code: {
                                    required: true,
                                    minlength: function(element) {
                                        return $("#ifsc_code").attr('minlength');
                                    },
                                    maxlength: function(element) {
                                        return $("#ifsc_code").attr('maxlength');
                                    },
                                    pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{11}$/,
                                },
                                agency_code: {
                                    minlength: 1,
                                    maxlength: 4,
                                    pattern: /^[0-9]+$/,
                                },

                            },
                            // Specify validation error messages
                            messages: {
                                fullName: {
                                    required: "Diperlukan Nama Lengkap",
                                    pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                                    minlength: "Diperlukan minimal 3 karakter",

                                },
                                withdrawal_amount: {
                                    required: " tidak boleh kosong",
                                    number: "Jumlahnya harus berupa angka",
                                    min: "Jumlah penarikan minimum adalah " + window.currencyCode + window
                                        .commaSeparateNumber(window.wmin),
                                    max: "Jumlah penarikan maksimum adalah " + window.currencyCode + window
                                        .commaSeparateNumber(window.wmax),
                                    remote: "Jumlah terlampaui"
                                },
                                existing_bank: {
                                    required: " tidak boleh kosong",
                                },
                                ifsc_code: {
                                    required: "Kode IFSC diperlukan",
                                    pattern: "Kode IFSC harus berisi setidaknya satu alfabet dan angka",
                                    minlength: "Diperlukan minimal 11 karakter",
                                    maxlength: "Maksimal 11 karakter saja",
                                },
                                agency_code: {
                                    required: "Diperlukan Kode Agensi",
                                    pattern: "Kode Agensi hanya dapat terdiri dari angka",
                                    minlength: function(element) {
                                        var min_length = 1;
                                        var str = "Diperlukan minimal :acc_length karakter";
                                        var minlength_msg = str.replace(":acc_length", min_length);
                                        return minlength_msg;
                                    },
                                    maxlength: "Maksimal 4 karakter saja",
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
                                $('button[type=submit]').prop('disabled', true);
                                form.submit();
                            }
                        });
                    }

                    form_validate();
                    $('#withdrawForm input[type=radio][name=withdrawType][value="existing"]').each(onChgWithdrawType);
                    $('#withdrawal_amount').priceFormat({
                        prefix: '',
                        centsLimit: 0,
                        thousandsSeparator: ',',
                        clearOnEmpty: true
                    });



                    /*min and max length changing based on bank id*/
                    var default_minlength, default_maxlength, custom_minLength, custom_maxLength, selectedBank;
                    default_minlength = $("#acc_no").attr('minlength');
                    default_maxlength = $("#acc_no").attr('maxlength');
                    custom_minLength = default_minlength;
                    custom_maxLength = default_maxlength;

                    $('#new_bank').on('change', function() {
                        selectedBank = $(this).find("option:selected").attr('data-bcode');
                        console.log(selectedBank);
                        if (selectedBank == 'MDR') {
                            custom_minLength = 13;
                            custom_maxLength = 13;
                        } else if (selectedBank == 'BNI' || selectedBank == 'BCA' || selectedBank == 'DMN' ||
                            selectedBank == 'BSI' || selectedBank == 'BLA') {
                            custom_minLength = 10;
                            custom_maxLength = 10;
                        } else if (selectedBank == 'BRI') {
                            custom_minLength = 15;
                            custom_maxLength = 15;
                        } else if (selectedBank == 'CIMBN' || selectedBank == 'BANKJAGO' || selectedBank ==
                            'MDRLV' || selectedBank == 'SEABANK') {
                            custom_minLength = 12;
                            custom_maxLength = 12;
                        } else {
                            var custom_minLength = default_minlength;
                            var custom_maxLength = default_maxlength;
                        }
                        $("#acc_no").attr('minlength', custom_minLength);
                        $("#acc_no").attr('maxlength', custom_maxLength);
                    });
                    /*min and max length changing based on bank id*/
                })
            </script>
        </div>
    </div>
</x-desktop.account-app>
