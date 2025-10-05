<style>
    * {
        -webkit-backface-visibility: visible;
    }

    select>option.disble {
        background-color: #d4d4d4;
    }
</style>

<form id="depositForm" class="needs-validation" action="{{ url('deposits_store') }}" method="post" accept-charset="UTF-8"
    enctype="multipart/form-data">
    @csrf
    <div class="box-wrapper plr-15">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4  ">
                <div class="font-weight-bold">
                    Metode Penyetoran<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <div class="m-15 radio_2">


                    @if (request('method') == 5)
                        <input class="" id="radioBank5" name="deposite_method" checked type="radio"
                            value="5">
                        <label class=" " for="radioBank5">
                            <span class="radio-title">
                                Bank </span>
                            <span class="marked">
                                <i class ="icon-checkmark"></i>
                            </span>
                        </label>
                    @endif

                    @if (request('method') == 7)
                        <input class="" id="radioBank7" name="deposite_method" checked type="radio"
                            value="7">
                        <label class=" " for="radioBank7">

                            <span class="radio-title">
                                E-wallet </span>
                            <span class="marked">
                                <i class ="icon-checkmark"></i>
                            </span>
                        </label>
                    @endif

                    @if (request('method') == 6)
                        <input class="" id="radioBank6" name="deposite_method" checked type="radio"
                            value="6">
                        <label class=" " for="radioBank6">

                            <span class="radio-title">
                                Pulsa </span>
                            <span class="marked">
                                <i class ="icon-checkmark"></i>
                            </span>
                        </label>
                    @endif

                </div>
            </div>
        </div>

        <div class=" deposit-form row d-flex align-items-center" id="deposit-form-5">
            <div class="col-md-3 col-xs-4  ">
                <div class="font-weight-bold">
                    Bank Penerima<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                <select class="form-control bank_list m-15" data-type="5" data-plugin="bank_list" id="bank_name_5"
                    name="bank_name" disabled>
                    <option selected value="">-Silahkan pilih -</option>
                    @foreach ($bankdeposit as $bank)
                        <option value="{{ $bank->id }}" data-status="{{ $bank->status_bank == 'active' ? 1 : 0 }}">
                            {{ $bank->bank_name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="deposit-form  row d-flex align-items-center" id="deposit-form-7" style="display:none;">
            <div class="col-md-3 col-xs-4  ">
                <div class="font-weight-bold">
                    E-wallet<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <select class="form-control bank_list m-15" data-type="7" data-plugin="bank_list" id="bank_name_7"
                    name="bank_name" disabled>
                    <option selected value="">-Silahkan pilih -</option>
                    @foreach ($ewalletdeposit as $ewallet)
                        <option value="{{ $ewallet->id }}"
                            data-status="{{ $ewallet->status_bank == 'active' ? 1 : 0 }}">
                            {{ $ewallet->bank_name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="deposit-form  row d-flex align-items-center" id="deposit-form-6" style="display:none;">
            <div class="col-md-3 col-xs-4  ">
                <div class="font-weight-bold">
                    Pulsa<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <select class="form-control bank_list m-15" data-type="6" data-plugin="bank_list" id="bank_name_6"
                    name="bank_name" disabled>
                    <option selected value="">-Silahkan pilih -</option>
                    @foreach ($pulsadeposit as $pulsa)
                        <option value="{{ $pulsa->id }}"
                            data-status="{{ $pulsa->status_bank == 'active' ? 1 : 0 }}">
                            {{ $pulsa->bank_name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row  info-lst" id="bankInfo_de001">
            <div class="col-md-3">
                <div class="qrcode"></div>
            </div>
            <div class="col-xs-12 col-md-9 ">
                <div class="bankInfo-box" id="bankList">

                </div>
            </div>
        </div>


        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4">
                <div class="font-weight-bold">
                    Bonus </div>
            </div>
            <div class="col-md-9 col-xs-8   d-flex flex-wrap">

                <div class="m-15" style="width: 100%;">
                    <div style="    width: 100%; ">

                        <select class="form-control promoList " name="promo_event" data-plugin="promoList"
                            id="promo_event">
                            <option value="">Pilih promo tersedia</option>
                            @foreach ($bonusdeposit as $bonus)
                                <option value="{{ $bonus->id }}">{{ $bonus->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="fs-sm" style="  ">
                        <span style="">Ada kode promosi? </span> <button class="btn btn-link txt_accent fs-sm"
                            id="btn_add_promo">Tambah disini</button>
                    </div>
                    <div class="" id="f_grp_promo_code" style="display:none; margin-top:5px;  ">
                        <div class="input-group uline">
                            <input type="text" disabled id="pcode_not_confirm" name ="pcode_not_confirm"
                                class="ignore form-control underline " maxlength="15"
                                placeholder="Masukkan kode promo" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-link  " id="btn_apply_pcode" type="button">Apply</button>
                                <button class="btn btn-link" id="btn_clear_pcode" style="display:none;"
                                    type="button">Clear</button>
                            </span>
                        </div>
                    </div>
                    <div class="" style="position: relative; width:100% ; margin-bottom:5px; ">
                        <input type="hidden" disabled id="promo_code" name ="promo_code" class="form-control "
                            maxlength="15" value="">
                    </div>

                </div>

            </div>

        </div>

        <div class="row info-lst" id="promoInfo_de001">
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-md-9 ">
                <div class="bankInfo-box" id="promoList">

                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4 ">
                <div class="font-weight-bold">
                    Jumlah Deposit<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <input type="tel" class="form-control m-15"  id="deposite_amount"
                    name="deposite_amount" autocomplete="off">
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4  ">
                <div class="font-weight-bold">
                    Keterangan </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">

                <input type="text" class="form-control m-15" id="ref_no" maxlength="35" minlength="5"
                    name="ref_no" placeholder="No. Referensi / Nama Pengirim">
            </div>
        </div>

        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4 ">
                <div class="font-weight-bold">
                    Bukti Transfer </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <div class="file-drop-area file-drop-area-receipt m-15">
                    <span class="btn btn-secondary " i18n>Pilih File</span>
                    <span class="file-msg">
                        atau seret dan taruh file di sini </span>
                    <input class="file-input" name="receipt" id="receipt" type="file">
                </div>
            </div>
        </div>

        <!--  only for interwin MYR -->
        <!--  only for interwin MYR-->

        <div class="row d-flex align-items-center">

            <div class="col-md-12 d-flex flex-wrap">
                <label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termcondition">
                    Saya telah membaca dan menyetujui Syarat dan Ketentuan Promosi. Kami tidak menerima jenis setoran
                    dalam bentuk cek. Semua jenis pembayaran dalam bentuk cek ke akun kami akan diabaikan. </label>

            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4  ">

            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <div class="m-15">
                    <button type="submit" class="btn btn-secondary">Kirim</button>

                </div>
            </div>
        </div>
    </div>


</form>

<script>
    window.removeOptions = function($select, $options) {
        window.setOriginalSelect($select);
        $options.remove();
    }

    window.restoreOptions = function($select) {
        var ogHTML = $select.data("originalHTML");
        if (ogHTML != undefined) {
            $select.html(ogHTML);
        }
    }
    window.setBankUserOptions = function(method) {

        var $s = $('select#bank_user_id');
        window.restoreOptions($s); // Make sure you're working with a full deck
        var $optsToRemove = $s.find('option').not('[data-method=' + method + ']').not('[value=""]');
        if (method == 5) {
            $optsToRemove = $optsToRemove.not('[data-method=' + 7 + ']');
        }
        window.removeOptions($s, $optsToRemove);

    }

    var secret_key = 'aa';
    var bank_min_amount = _min_amount = 10000;
    var bank_max_amount = _max_amount = 999999999;
    var min_string = "The minimum deposit amount is";
    var max_string = "The maximum deposit amount is";
    var method = {{ request('method') }};
    var providerID = {{ request('provider') }};
    var otp_validation = 0;

    $(document).ready(function() {
        $('#user_identification-field').hide();
        $('#source-fund-field').hide();
        $('#source_fund').prop('disabled', true);
        $('#user_identification').prop('disabled', true);
        $('#source_fund').prop('disabled', true);

        window.setBankUserOptions(method);
        $('#bankInfo_de001').hide();
        $('#promoInfo_de001').hide();


        var onFirstLoad = true;

        function onChgDepositeMethod() {
            $('.deposit-form').hide();
            $('#deposit-form-' + $(this).val()).show();
            $('select.bank_list').prop('disabled', true);
            $('select.bank_list').val('');
            $('#bank_name_' + $(this).val()).prop('disabled', false);
            $('#bank_user_id').prop('disabled', false);

            if (method == 6) {
                $('#ref_no').attr('placeholder', 'No Ref /No Serial /No Pengirim');
            } else {
                $('#ref_no').attr('placeholder', 'No. Referensi / Nama Pengirim');
            }
            $('#bankList').html('');
            $('#bankInfo_de001').hide();

        }

        $('input[name=deposite_method]').change(onChgDepositeMethod);

        $('input[name=deposite_method][value="' + method + '"]').each(onChgDepositeMethod);


        $('#deposite_amount').on('keyup', function(e) {
            if ($('#max_depo_alert').length > 0) {
                checkDepositAmount();
            }
        });

        function checkDepositAmount() {
            var amt = parseInt($('#deposite_amount').val().replace(',', '')) || 0;
            if ($('#deposite_amount').hasClass('has-error') ||
                !$('#max_depo_alert').val() || $('#max_depo_alert').val() == 0 ||
                amt < parseInt($('#max_depo_alert').val())) {
                $('#user_identification-field').hide();
                $('#source-fund-field').hide();
                $('#source_fund').prop('disabled', true);
                $('#user_identification').prop('disabled', true);
                $('#source_fund').prop('disabled', true);
            } else {
                $('#user_identification-field').show();
                $('#source-fund-field').show();
                $('#user_identification').prop('disabled', false);
                $('#source_fund').prop('disabled', false);
            }
        }


        // $('#deposite_amount').on('keyup',function(e){
        //     $(this).val(formatNumberInput(e.target,''));

        // });

        // $('#deposite_amount').on('blur',function(e){
        //     $(this).val(formatNumberInput(e.target,'blur'));

        // });

        $('.bank_list').on('change', function() {

            //var status = $(this).find("option:selected").data('status');
            var select_name = $(this).val();
            var position = $(this).find(":selected").index()

            $('#bankList').html('');
            $('#bankInfo_de001').hide();
            var type = $(this).data('type');
            bank_max_amount = _max_amount;
            bank_min_amount = _min_amount;
            $('.min_deposit').val(_min_amount);
            $('.max_deposit').val(_max_amount);
            var _self = this;

            function onSelBankIsNotEmpty() {
                $('#bankInfo_de001').fadeIn();
                var _bank_min = $('#bank_min_deposit').val();
                var _bank_max = $('#bank_max_deposit').val();
                bank_min_amount = parseInt(_bank_min);
                bank_max_amount = parseInt(_bank_max);
                var o = {
                    msg: ''
                };
                var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                var msgMin = o.msg;

                adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);
            }

            function onSelBankIsEmpty() {
                var o = {
                    msg: ''
                };
                var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                var msgMin = o.msg;
                adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);
            }

            function getBankDetails() {
                var token = $("input[name='_token']").val();
                var _onFirstLoad = onFirstLoad;

                var __self = _self;
                $.ajax({
                    url: "{{ url('agnt_bnk_details') }}",
                    type: "POST",
                    data: {
                        select_name: select_name,
                        _token: token,
                        type: type,
                        lang: window.lang
                    },
                    beforeSend: function() {
                        $("#bankList").html();
                        2000
                    },
                    success: function(data) {
                        if (data) {


                            $("#bankList").html(data);

                            if ($('#depo_acc_status').val() == 'OFFLINE') {
                                if (!_onFirstLoad) {
                                    sweetAlert(transMsgs.offlineBank, 'warning', 'Warning',
                                        true).then(
                                        function(isConfirm) {
                                            if (isConfirm) {

                                                onSelBankIsNotEmpty();
                                            } else {
                                                $("#bankList").html('');
                                                $(__self).val(null);
                                                onSelBankIsEmpty();
                                            }
                                        }
                                    );

                                    return;
                                }

                            }

                            onSelBankIsNotEmpty();
                            return;


                        } else {
                            $("#bankList").html('');
                            $(_self).val(null);
                            onSelBankIsEmpty();
                        }
                    }
                });
            }

            if (!!select_name) {
                getBankDetails();
            } else {
                onSelBankIsEmpty();

            }



            return false;

        });

        // Add new banks for user form pokerace ------------------------------------------------------------------


        $('#btn_add_ubank__depo').click(function(e) {

            // $(this).prop('disabled',  true);
            $('#regbank_popup__depo').html('');
            $('#regbank_popup__depo').load(window.uriPrefix + '/regaccform?type=' + method, function() {
                $('#regbank_popup__depo').nifty("show");
                if (method == 5) {
                    window.bindBankRegFormVal('#bank_register_popup');
                } else {
                    window.bindNewFundRegFormVal("#pulsa_register_form");
                }

            });
        });
        // document.getElementById("bank_user_id").onchange = function () {

        //     status = this.options[this.selectedIndex].getAttribute("status");
        //     switch(status ){
        //         case "2" :
        //             $(this).val("");
        //           return sweetAlert( "This account is currently suspend");
        //         break;
        //         case "0" :
        //             $(this).val("");
        //             return sweetAlert( "This account  is currently inactive");
        //         break;
        //      }

        // }

        // end of add bank section ---------------------------------------------------------------------------------------------

        function getMinDepoWithPromo(bank_min, msgMin) {
            msgMin.msg = min_string;
            bank_min = bank_min ? bank_min : _min_amount;
            var selPromoInd = $('.promoList').find(":selected").index();
            var hasSelPromo = !!selPromoInd || !!$('#promo_code').val();
            if (!hasSelPromo) {
                return bank_min;
            } else {

                promo_min_amount = parseInt($('#promo_min_amount').val()); //

                if (!!promo_min_amount) {

                    if (promo_min_amount > bank_min) {
                        msgMin.msg = "Persyaratan minimal deposit untuk promo adalah  ";

                        return promo_min_amount;
                    }
                }

            }

            return bank_min;
        }

        $('select[data-plugin="bank_list"][data-type="' + method + '"]').prop('disabled', false).val(providerID)
            .trigger('change');
        onFirstLoad = false;
        $('.promoList').on('change', function() {
            //var selected = $(this).find("option:selected").val();
            var promo_id = $(this).val();

            // var position = $(this).find(":selected").index();
            $('#promoList').html('');
            $('#promoInfo_de001').hide();

            if (promo_id == 0) {
                $('input[name="promo_code"]').prop('disabled', false);
                var msgMin = min_string;
                adddepositAmtRules(bank_min_amount, bank_max_amount, msgMin);
                $('input[name="pcode_not_confirm"]').prop('disabled', false);
                $('#btn_apply_pcode').prop('disabled', false);
            } else {
                $('input[name="promo_code"]').val('');
                $('input[name="promo_code"]').prop('disabled', true);

                function cbPromoList(r) {
                    if (r.status) {
                        $('input[name="pcode_not_confirm"]').val('').prop('disabled', true);
                        $('#btn_apply_pcode').prop('disabled', true);
                    }
                }
                getPromoNAddDepoRules(promo_id, cbPromoList);
                return false;

            }
            return false;
        });

        function adddepositAmtRules(intMin, intMax, msgMin) {
            $("#deposite_amount").rules("remove", "min max");
            $("#deposite_amount").rules("add", {
                min: intMin,
                max: intMax,

                messages: {
                    min: msgMin + window.currencyCode + window.commaSeparateNumber(intMin),
                    max: "Jumlah deposit maksimum adalah" + window.currencyCode + window
                        .commaSeparateNumber(intMax),
                }
            });
        }

        function getPromoNAddDepoRules(promo_id, cb, reqUrl = "{{ url('promo_details') }}") {
            $('#promoInfo_de001').hide();
            $("#promoList").html('');
            var result = {
                status: true,
                msg: ''
            };
            var token = $("input[name='_token']").val();

            //clear promo code first
            $('input[name="promo_code"]').prop('disabled', true).val('');
            $.ajax({
                url: reqUrl,
                type: "POST",
                async: true,
                data: {
                    select_name: promo_id,
                    _token: token
                },
                beforeSend: function() {
                    $("#bankList").html();
                    2000
                },
                success: function(data) {
                    if (data) {

                        $("#promoList").html(data);
                        $('#promoInfo_de001').fadeIn();


                        depoValidator.showErrors({
                            "promo_code": null
                        });
                    }
                },
                error: function(xhr, status, error) {

                    result.status = false;


                    if (xhr.responseJSON) {
                        result.msg = xhr.responseJSON.message;

                    } else {
                        result.msg = xhr.responseText;
                    }
                    $('#promo_event').val(0);

                },
                complete: function() {


                    cb(result);

                    var o = {
                        msg: ''
                    };
                    var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                    var msgMin = o.msg;
                    adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);

                },
            });

            return result;
        }

        $('#btn_add_promo').click(function() {
            $('#f_grp_promo_code').fadeIn();
            var v = $('#promo_event').val();
            if (!!v && v != 0) {
                $('#pcode_not_confirm').prop('disabled', true);
            } else {
                $('#pcode_not_confirm').prop('disabled', false);
            }
            $(this).parent().hide();
            return false;
        });
        var btn_click = false;
        $('#btn_apply_pcode').click(function(e) {
            if (btn_click == true) {
                return;
            }
            btn_click = true;
            e.preventDefault();
            $(this).prop('disabled', true);

            function cbPromoCode(r) {
                if (r.status) {

                    $('#promo_event').val(0).prop('disabled', true);
                    $('input[name="promo_code"]').prop('disabled', false).val($(
                        'input[name="pcode_not_confirm"]').val());
                    $('input[name="pcode_not_confirm"]').prop('disabled',
                        true); //when pcode correct , user shud click clear btn
                    $('#btn_apply_pcode').hide();
                    $('#btn_clear_pcode').show();
                    depoValidator.showErrors({
                        "promo_code": null
                    });
                } else {
                    depoValidator.showErrors({
                        "promo_code": r.msg
                    });
                }

                setTimeout(function() {
                    $('#btn_apply_pcode').prop('disabled', false).blur().focusout();
                    btn_click = false;
                }, 2000);
            }

            var v = $('#pcode_not_confirm').val();
            var r = {
                'status': true,
                'msg': ''
            };
            if (!v || (v && v.length < 2)) {
                r.status = false;
                r.msg = "Kode promo tidak boleh lebih dari 8 karakter";
            } else if (!v || (v && v.length > 15)) {
                r.status = false;
                r.msg = "Kode promo tidak boleh lebih dari 15 karakter";
            } else {
                r = getPromoNAddDepoRules(v, cbPromoCode, "{{ url('pcode_details') }}");
                return false;
            }

            cbPromoCode(r);

            return false;
        });


        $(document).on('click', '#btn_clear_pcode, #btn-clear-all-promo', function() {
            $('input[name="promo_code"]').prop('disabled', false).val('');
            $('input[name="pcode_not_confirm"]').prop('disabled', false).val('');
            $('#promo_event').prop('disabled', false).val(0);
            $('#btn_apply_pcode').prop('disabled', false);
            $('#btn_clear_pcode').hide();
            $('#btn_apply_pcode').show();
            $("#promoList").html('');
            $('#promoInfo_de001').hide();
            var msgMin = min_string;
            adddepositAmtRules(bank_min_amount, bank_max_amount, msgMin);
            return false;
        });

        fileUploadReceipt('.file-drop-area-receipt');
        fileUploadReceipt('.file-drop-area-user_identification');

        function fileUploadReceipt(className) {
            var droppedFiles = false;
            $(className).on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                })
                .on('dragover dragenter', function() {
                    $(this).addClass('is-dragover');
                })
                .on('dragleave dragend drop', function() {
                    $(this).removeClass('is-dragover');
                })
                .on('drop', function(e) {
                    droppedFiles = e.originalEvent.dataTransfer.files;
                    $(this).find('input[type="file"]').prop('files', droppedFiles);

                    if (droppedFiles) {
                        $(this).find('.file-msg').html(droppedFiles[0].name);
                    } else {

                        $(this).find('.file-msg').html('   or drag and drop file here');
                    }
                });

            $(className + ' input[type="file"]').on('change', function(e) {
                var file = e.target.files;
                if (file) {
                    var fileName = file[0] ? file[0].name : '   or drag and drop file here';

                    $(className + ' .file-msg').html(fileName);
                } else {
                    $(className + ' .file-msg').html('   or drag and drop file here');
                }
            })
        }




        $('#btn_clear_pcode').click(function() {
            $('#promoList').html('');
        });


        var depoValidator = $("#depositForm").validate({
            // Specify validation rules
            ignore: ".ignore",
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                deposite_amount: {
                    required: true,
                    normalizer: function(value) {
                        return value ? convertToNumber(value) : null;
                    },
                    number: true,
                    min: bank_min_amount,
                    max: bank_max_amount,

                },
                bank_name: {
                    required: true
                },
                bank_user_id: {
                    required: true,
                },
                deposite_method: {
                    required: true
                },
                // promo_event: {
                //     required:true
                // },
                promo_code: {
                    minlength: 2,
                    maxlength: 15,
                    // validatePromoCode:true
                },
                termcondition: {
                    required: true
                },
                receipt: {
                    extension: 'jpeg|jpg|png|bmp',
                },
                ref_no: {
                    pattern: /^[a-zA-Z0-9, .\/\\\-]+$/,
                    maxlength: 35,
                    minlength: 5,
                }

            },
            // Specify validation error messages
            messages: {

                deposite_amount: {
                    required: " tidak boleh kosong",
                    number: "Jumlahnya harus berupa angka",
                    min: "Jumlah deposit minimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_min_amount),
                    max: "Jumlah deposit maksimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_max_amount),
                },
                bank_name: {
                    required: " tidak boleh kosong",
                },
                bank_user_id: {
                    required: " tidak boleh kosong",
                    remote: "Please Select Valid Bank"
                    //remote : transMsgs.bankAccountNamesNotAvailable,
                },
                deposite_method: {
                    required: " tidak boleh kosong",
                },
                promo_event: {
                    required: "Metode Promosi diperlukan. Silakan pilih Metode Promosi.",
                },
                termcondition: {
                    required: "Syarat dan ketentuan diperlukan",
                },
                receipt: {
                    extension: "File yang dipilih tidak valid",
                },
                ref_no: {
                    pattern: "Hanya huruf, angka, koma, spasi, dan - / \ ",
                    maxlength: "Maksimal 20 karakter saja",
                    minlength: "Diperlukan minimal 5 karakter",
                    required: " tidak boleh kosong",
                }


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
                checkDepositAmount();

            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("has-success").removeClass("has-error");
                $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                checkDepositAmount();

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                //console.log($(form).serialize());
                function cbSubmit() {
                    if (otp_validation == 1) {
                        $('#otp_popup__depo').nifty("show");
                    } else {
                        ajaxForm(form);
                    }
                }

                if (!!$('#pcode_not_confirm').val() && !$('#promo_code').val() && (!$(
                        '#promo_event').val() || $('#promo_event').val() == 0)) {
                    sweetAlert(transMsgs.pCodeConfirm, 'warning', 'Warning', true).then(
                        function(isConfirm) {
                            if (isConfirm) {
                                cbSubmit();
                            }
                        }
                    );
                } else {
                    cbSubmit();
                }

                return false;
            }
        });



        $('#deposite_amount').priceFormat({
            prefix: '',
            centsLimit: 0,
            thousandsSeparator: ',',
            clearOnEmpty: true
        });
    });


    function ajaxForm(form) {
        $(form).find('button[type="submit"]').prop('disabled', true);
        window.ajax_submit(form).done(
            function(d) {
                if (d.status = 's') { //success

                    $(form).each(function() {
                        this.reset();
                        $('.info-lst').hide();
                        $('.bankInfo-box').html('');
                        $('.file-drop-area .file-msg').html('   or drag and drop file here');
                        $('.file-drop-area .file-msg-user_identification').html(
                            '   or drag and drop file here');
                    });


                    $(form).validate().resetForm();
                    if (d.redirectUrl) {
                        console.log('redirecting to redirectUrl');
                        location.href = d.redirectUrl;
                    }
                    sweetAlert(d.msg, 'success', transMsgs.success).then(function() {
                        location.reload();
                    });

                } else {
                    sweetAlert(d.msg);
                }
            }
        );
    }
</script>
