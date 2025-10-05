<form id="depositForm" class="needs-validation" action="{{ route('gateway-submit') }}" method="POST" accept-charset="UTF-8"
    enctype="multipart/form-data">
    @csrf
    <div class="box-wrapper plr-15">

        <div class="form-group row">
            <div class="col-md-8">
                <input name="gateway_method" type="hidden" value="53">
                <input name="pgmethod" type="hidden" value="9">
                <h2 class="filter-title">Prestige </h2>
            </div>
        </div>
        <div class="form-group row" id="isShowBankLst--deposit-form">

            <div class="col-md-12">
                <div class=" deposit-form row d-flex align-items-center" id="deposit-form-5">

                    <div class="col-md-3 col-xs-4  ">
                        <div class="font-weight-bold">
                            Bank Penerima<span class="text-danger">*</span>
                        </div>
                    </div>

                    <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                        <select class="form-control bank_list m-15" data-type="5" data-plugin="bank_list"
                            id="bank_name_5" name="bank_name">

                            <option selected value="QRIS" data-pgmethod="9">QRIS </option>
                        </select>
                    </div>

                </div>
                <div class="col-md-12 text-center py-1">
                    <input type="hidden" class="bank" name="min_amount" value="{{ $siteConfig->min_deposit }}">
                    <input type="hidden" class="bank" name="max_amount" value="{{ $siteConfig->max_deposit }}">
                    <h4 class="bank_limit">
                        min:
                        {{ number_format($siteConfig->min_deposit, 2) }}
                        ~ max: ({{ number_format($siteConfig->max_deposit, 2) }})
                    </h4>
                </div>

                <input type="hidden" name="acc_code" value=''>
                <input type="hidden" id="bank_id" name="bank_id" value=''>

            </div>


        </div>

        <div class="row d-flex align-items-center js-hp-field" style="display: none;">
            <div class="col-md-3 col-xs-4 ">
                <div class="font-weight-bold">
                    Nomor Pengirim<span class="text-danger">*</span>
                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">

                <input type="text" list="user-hp-list" name="acc_no" class="form-control  m-15"
                    placeholder="NOMOR HP cth: 0812345xxxxx" value="" autocomplete="off" minlength="8"
                    maxlength="15" required="" disabled>
                <datalist id="user-hp-list">
                    <option value="011342789"></option>

                </datalist>
            </div>
        </div>

        <div class="row d-flex align-items-center promo_bonus">
            <div class="col-md-3 col-xs-4">
                <div class="font-weight-bold">
                    Bonus </div>
            </div>
            <div class="col-md-9 col-xs-8   d-flex flex-wrap">

                <div class="m-15" style="width: 100%;">
                    <div style="    width: 100%; ">

                        <select class="form-control promoList " name="promo_event" data-plugin="promoList"
                            id="promo_event">
                            <option value="0">Pilih promo tersedia</option>
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
                                class="ignore form-control underline " maxlength="15" placeholder="Masukkan kode promo"
                                value="">
                            <span class="input-group-btn">
                                <button class="btn btn-link  " id="btn_apply_pcode" type="button">Apply</button>
                                <button class="btn btn-link" id="btn_clear_pcode" style="display:none;"
                                    type="button">Clear</button>
                            </span>
                        </div><!-- /input-group -->
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
                <input type="tel" class="form-control m-15" placeholder="0.00" id="deposite_amount"
                    name="deposite_amount" autocomplete="off">
            </div>
        </div>


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

                    <button type="button" class="btn btn-primary" onclick="load_method_form()">Back</button>

                    <button type="submit" id="submitDeposit" class="btn btn-secondary">Kirim</button>

                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        // var _bank_min=  <!--$bank->min_amount--!> ;
        // var min_amount = _bank_min;
        // var max_amount =  <!--$bank->max_amount --!>;
        var _method = "53";
        var otp_validation = 0;

        // if(_method == 6 ) {
        //     var _min_amount = "0";
        //     var _max_amount = "0";

        //     var min_amount = parseFloat(_min_amount);
        //     var max_amount = parseFloat(_max_amount);
        // } else {
        var _bank_min = parseFloat($('.bank[name ="min_amount"]').val());
        var min_amount = _bank_min;
        var max_amount = parseFloat($('.bank[name ="max_amount"]').val());
        // }

        var min_string = "Jumlah deposit minimum adalah ";
        var max_string = "Jumlah deposit maksimum adalah ";
        // $('#bankInfo_de001').hide();
        $('#promoInfo_de001').hide();


        $('.bank_list').on('change', function() {
            var selected = $(this).find("option:selected").val();
            var select_name = $(this).val();
            var position = $(this).find(":selected");
            var token = $("input[name='_token']").val();
            // $('#bankInfo_de001').hide();
            var type = $(this).data('type');
            var thiselem = $(this);

            if (select_name == "") {
                if ($('.promoList').find(":selected").index() == 0 || !$('.promoList')[0]) {

                    $("#deposite_amount").rules("remove", "min max");
                    $("#deposite_amount").rules("add", {
                        min: min_amount,
                        max: max_amount,

                        messages: {
                            min: "Jumlah deposit minimum adalah " + window
                                .currencyCode + window.commaSeparateNumber(min_amount),
                            max: "Jumlah deposit maksimum adalah " + window
                                .currencyCode + window.commaSeparateNumber(max_amount),
                        }
                    });
                }
                $(".js-hp-field").hide();
                $(".js-hp-field input,.js-hp-field select").prop('disabled', true);
                // $("#bankList").html('');
            } else {
                if (thiselem.find("option:selected").data('payment_type') !== undefined && thiselem
                    .find("option:selected").data('payment_type') == 'VA') {
                    $('#promoList').html('');
                    $('#promoInfo_de001').hide();
                    $('#promo_event').prop('disabled', true);
                    $('.promo_bonus').hide();
                    $('#pcode_not_confirm').val('');
                    $('#pcode_not_confirm').prop('disabled', true);
                    $('#promo_code').val('');
                    $('#promo_code').prop('disabled', true);
                    $('#f_grp_promo_code').hide();
                    $('.fs-sm').show();
                    $('#payment_type').val('VA');
                } else {
                    $('#promo_event').prop('disabled', false);
                    $('.promo_bonus').show();
                    $('#payment_type').val('');

                }
                $.ajax({
                    url: "{{ url('account/load_gateway_form?method=53') }}" +
                        '&bank=' + selected + '&pgmethod=' + $(position).data('pgmethod'),
                    type: "GET",

                    beforeSend: function() {
                        $("button[type='submit']").prop('disabled', true);
                        2000
                    },
                    success: function(data) {
                        $("button[type='submit']").prop('disabled', false);
                        if (data) {
                            _bank_min = (data.bank_setting.min_deposit > data.bank
                                .min_amount ? data.bank_setting.min_deposit : data.bank
                                .min_amount);
                            max_amount = (data.bank_setting.max_deposit < data.bank
                                .max_amount ? data.bank_setting.max_deposit : data.bank
                                .max_amount);
                            $(".bank_limit").html('min: ' + window.commaSeparateNumber(
                                    _bank_min) + ' ~ max: ' + window
                                .commaSeparateNumber(max_amount));
                            $("#bank_id").val(data.bank.id);
                            if (data.bank.user_hp) {
                                $(".js-hp-field").show();
                                $(".js-hp-field input,.js-hp-field select").prop('disabled',
                                    false);
                            } else {
                                $(".js-hp-field").hide();
                                $(".js-hp-field input,.js-hp-field select").prop('disabled',
                                    true);
                            }

                            // $('#bankInfo_de001').fadeIn();
                            // _bank_min = parseFloat($('.bank[name ="min_amount"]').val());
                            if (data.bank.acc_code) {
                                $("input[name='acc_code']").val(data.bank.acc_code);
                            }
                            // min_amount =  ;
                            if (min_amount < _bank_min) {
                                min_amount = _bank_min;
                            }
                            $("#deposite_amount").rules("remove", "min max");
                            $("#deposite_amount").rules("add", {
                                min: min_amount,
                                max: max_amount,

                                messages: {
                                    min: "Jumlah deposit minimum adalah " +
                                        window.currencyCode + window
                                        .commaSeparateNumber(min_amount),
                                    max: "Jumlah deposit maksimum adalah " +
                                        window.currencyCode + window
                                        .commaSeparateNumber(max_amount),
                                }
                            });

                        } else {
                            // ("#bankList").html('')
                        }


                    }
                });
            }

            return false;

        });
        $('.promoList').on('change', function() {
            //var selected = $(this).find("option:selected").val();
            var promo_id = $(this).val();

            // var position = $(this).find(":selected").index();
            $('#promoList').html('');
            $('#promoInfo_de001').hide();

            if (promo_id == 0) {
                $('input[name="promo_code"]').prop('disabled', false);
                var msgMin = min_string;
                adddepositAmtRules(min_amount, max_amount, msgMin);
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
            // console.log('addrul',intMin , intMax,msgMin)
            $("#deposite_amount").rules("remove", "min max");
            $("#deposite_amount").rules("add", {
                min: intMin,
                max: intMax,

                messages: {
                    min: msgMin + window.currencyCode + window.commaSeparateNumber(intMin),
                    max: "lang.The maximum deposit amount is " + window.currencyCode + window
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
                // beforeSend: function () {
                //     $("#bankList").html();
                //     2000
                // },
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
                    min_amount = _bank_min;

                    if (_bank_min < parseFloat($('.promo[name ="promo_min_amount"]').val())) {
                        min_amount = parseFloat($('.promo[name ="promo_min_amount"]').val());

                    }
                    var o = {
                        msg: ''
                    };
                    var cal_min_amount = min_amount;
                    // var msgMin = o.msg;
                    // console.log('cmlslla',cal_min_amount)

                    adddepositAmtRules(cal_min_amount, max_amount, min_string);

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
                r = getPromoNAddDepoRules(v, cbPromoCode,
                    "{{ url('pcode_details') }}");

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
            adddepositAmtRules(_bank_min, max_amount, msgMin);
            return false;
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
                    min: min_amount,
                    max: max_amount,

                },

                // bank_name: {
                //     required:true
                // },
                gateway_method: {
                    required: true
                },
                // promo_event: {
                //     required: true
                // },
                termcondition: {
                    required: true
                },
                receipt: {
                    extension: 'jpeg|jpg|png',
                },
                acc_no: {
                    pattern: /^08[0-9]+$/,
                }

            },
            // Specify validation error messages
            messages: {

                deposite_amount: {
                    required: " tidak boleh kosong",
                    number: "Jumlahnya harus berupa angka",
                    min: "Jumlah deposit minimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(min_amount),
                    max: "Jumlah deposit maksimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(max_amount),
                },
                // bank_name: {
                //     required: " tidak boleh kosong",
                // },
                gateway_method: {
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
                acc_no: {
                    pattern: "Nomor rekening harus diawali dengan 08",
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
            },
            unhighlight: function(element, errorClass, validClass) {

                $(element).addClass("has-success").removeClass("has-error");
                $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                $('button[type=submit]').prop('disabled', true);
                //console.log($(form).serialize());

                if (otp_validation == 1) {
                    $('#otp_popup__depo').nifty("show");
                } else {
                    form.submit();
                }
            }
        });

        if ($('input[name="gateway_method"]').val() == 1) {
            $('#bank_name_5').rules("remove", 'required');

        } else {
            $('#bank_name_5').rules("add", {
                required: true
            });
        }
        var droppedFiles = false;
        $('.file-drop-area').on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
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

        $('.file-drop-area input[type="file"]').on('change', function(e) {
            var file = e.target.files;
            if (file) {
                var fileName = file[0] ? file[0].name : '   or drag and drop file here';

                $('.file-drop-area .file-msg').html(fileName);
            } else {
                $('.file-drop-area .file-msg').html('   or drag and drop file here');
            }
        })

        $('#deposite_amount').priceFormat({
            prefix: '',
            centsLimit: 0,
            thousandsSeparator: ',',
            clearOnEmpty: true
        });
        $('#bank_name_5').trigger("change");
    });
</script>
