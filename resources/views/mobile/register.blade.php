<x-mobile.app>
    <div class="container  ">
        <div class="row">
            <div class="col-xs-12">
                <div class="mb-1">
                    <h3 class="d-inline-block">Daftar Akun </h3>
                    <form class="register-form form form-horizontal " [formGroup]="register-form" id="registerForm1"
                        method="post" action="{{ url('register') }}" class="needs-validation">
                        <input type='hidden' name='stage_val' value="0" id='stage_val'>
                        @csrf
                        <div class="register_form_one">
                            <div class="sub-title">Rincian Akun</div>
                            <div class="form-group  ">
                                <div class="col-md-5">
                                    <label>Nama pengguna</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control " placeholder="" name="user_name"
                                        id="user_name" required autocomplete="nope">
                                    <small class="text-left">
                                        * Nama akun harus 6-12 karakter, hanya menggunakan huruf
                                        dan/atau angka (0-9) dan tidak ada simbol (@#$~%&) <br> cth :
                                        <b>namaakun1</b>
                                    </small>

                                </div>
                            </div>

                            <div class="form-group  ">
                                <div class="col-md-5">
                                    <label>Kata sandi</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password_register"
                                        id="password_register_1" placeholder="" required autocomplete="new-password">
                                    <!-- <small class="text-left">* Minimal 8 karakter dan memiliki min 1 alfabet, 1 angka dan 1 karakter khusus  (!@#$%^&*()_+) <br> cth : <b>gilaslot1@</b> </small> -->
                                    <small class="text-left">* Minimal 8 karakter dan memiliki min 1
                                        alfabet, 1 angka dan 1 karakter khusus (!@#$%^&amp;*()_+) <br>
                                        cth : <b>password1@</b> </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>konfirmasi sandi</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" class="form-control input_text" name="password_confirmation"
                                        id="password_confirmation" placeholder="" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="sub-title">Contact info</div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Alamat email</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="email" class="form-control " placeholder="" name="email"
                                        id="email" value="" required autocomplete="off">
                                    <div class="loader-b" id="email-validate-loader"
                                        style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                    </div>
                                    <small class="text-left">* Silakan isi alamat email yang benar
                                        untuk keperluan Lupa Password </small>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Nomor telepon</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input type="tel" style="" class="form-control" placeholder=""
                                            id="mobileno" name="mobileno" required autocomplete="off" minlength="5"
                                            maxlength="20">

                                        <div class="loader-b" id="mobile-validate-loader"
                                            style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                        </div>
                                    </div><!-- /input-group -->
                                </div>
                            </div>

                            <div class="form-group" id="refCode_formgrp" style="display:none">
                                <div class="col-xs-5  col-md-5">
                                    <label>Kode Referensi / Afiliasi</label>
                                </div>
                                <div class="col-xs-7  col-md-7">
                                    <span class="txt-refCode" id="txt-refCode__reg"></span>
                                    <input type="hidden" class="refCode" value="" name="referralCode">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4 text-right" style="padding-top:15px">
                                </div>
                                <input type="hidden" value="1" name="isRegHasBank">
                                <div class="col-xs-8 text-right" style="padding-top:15px"
                                    id="register_form_two_next_btn">
                                    <button type="button" class="btn btn-secondary next_btn">Lanjut</button>
                                </div>
                            </div>
                        </div>
                        <div class="register_form_two">
                            <input type="hidden" value="1" name="isRegHasBank">
                            <div class="sub-title">
                                Informasi bank
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Nama Sesuai Rekening</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="name1" placeholder=""
                                        name="name" maxlength="100">
                                    <small class="text-left">* Nama yang terdaftar harus sesuai dengan
                                        nama rekening bank yang digunakan untuk menyetor dan menarik
                                        dana.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 ">
                                    <label for="acc_type" style="padding-top: 7.5px;">Jenis Akun
                                        Transaksi<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-xs-6 radio_2">
                                            <input class=" " name="acc_type" id="radioBank5" checked
                                                type="radio" value="5">
                                            <label class=" " for="radioBank5">
                                                <span class="radio-title">
                                                    Bank </span>
                                                <span class="marked">
                                                    <i class ="icon-checkmark"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 radio_2">
                                            <input class=" " name="acc_type" id="radioEwallet7" type="radio"
                                                value="7">
                                            <label class="" for="radioEwallet7">
                                                <span class="radio-title">
                                                    E-wallet </span>
                                                <span class="marked">
                                                    <i class ="icon-checkmark"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="isShowBankOptions">
                                <div class="col-md-5">
                                    <label>Bank</label>
                                </div>
                                <div class="col-md-7">
                                    <select class="form-control" data-plugin="bank_list" id="bankOpts--register"
                                        name="bank_name">
                                        <option selected value="">- Silahkan pilih -</option>
                                        <option value="BCA" data-bcode="BCA">BCA</option>
                                        <option value="BNI" data-bcode="BNI">BNI</option>
                                        <option value="MANDIRI" data-bcode="MDR">MANDIRI</option>
                                        <option value="BRI" data-bcode="BRI">BRI</option>
                                        <option value="CIMB" data-bcode="CIMBN">CIMB</option>
                                        <option value="BSI" data-bcode="Other">BSI</option>
                                        <option value="BANKJAGO" data-bcode="Other">BANK JAGO</option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group" id="isShowEwalletOptions" style="display:none;">
                            <div class="col-md-5">
                                <label>E-wallet</label>
                            </div>
                            <div class="col-md-7">
                                <select class="form-control" data-plugin="bank_list" id="ewalletOpts--register"
                                    name="ewallet_name" disabled>
                                    <option selected value="">- Silahkan pilih -</option>
                                    <option value="OVO">OVO</option>
                                    <option value="DANA">DANA</option>
                                    <option value="LINKAJA">LINK AJA</option>
                                    <option value="GOPAY">GOPAY</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5">
                                <label id="isShowBankLable">No. Rekening Bank</label>
                                <label id="isShowEwalletLable" style="display:none;">No. Dompet
                                    Elektronik</label>
                            </div>
                            <div class="col-md-7">
                                <input type="tel" class="form-control " placeholder="" name="acc_no"
                                    id="acc_no" required autocomplete="off" minlength="8" maxlength="20">
                                <div class="loader-b" id="accno-validate-loader"
                                    style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                </div>
                                <small class="text-left">* Pastikan rekening anda Valid, Aktif, dan
                                    belum terdaftar di situs ini </small>
                            </div>
                        </div>

                        <div class="form-group row no-gutters">
                            <div class="col-xs-4 col-md-5" style="margin-left:15px;">
                                <label>Captcha</label>
                            </div>
                            <div class="col-xs-3 col-md-2">
                                <input type="tel" id='registerCaptchaimg' class="form-control"
                                    name="registerCaptchaimg" maxlength="4" autocomplete="off"
                                    style="height: 38px;">
                            </div>
                            <button class="btn btn-refresh col-xs-4  col-md-4 text-left" type="button"
                                id="registerfreshCaptcha">
                                <img data-url="{{ url('captcha-image-register') }}?v=" id="Captchaimga"
                                    class="captcha_img  " autocomplete="off">
                                <i class="icon-refresh"></i>
                            </button>
                        </div>
                        <div class="form-group form-check submit-box">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" id="terms" name="terms" value= "on">
                                        &nbsp;Dengan memilih tombol DAFTAR,
                                        saya menyatakan bahwa saya berusia 18 tahun atau lebih. Saya
                                        telah membaca dan menyetujui Syarat & Ketentuan. Lihat <a
                                            href="{{ url('info/terms-conditions/terms') }}" target="_blank">Syarat
                                            & Ketentuan </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 text-right" style="padding-top:15px"
                                id="register_form_two_prev_btn">
                                <button type="button" class="btn btn-tertiery prev_btn">Sebelumnya</button>
                            </div>
                            <div class="col-xs-8 text-right" style="padding-top:15px"
                                id="register_form_two_submit_btn">
                                <button type="submit" class="btn btn-secondary">Submit </button>
                            </div>
                        </div>



                </div>
                </form>

                <script type="text/javascript">
                    $(document).ready(function() {
                        var captcha_v = 1;
                        $('#registerfreshCaptcha').click(function(e) {

                            captcha_v++;
                            e.preventDefault();
                            e.stopPropagation();
                            $("#registerCaptchaimg").val('');
                            var url = '{{ url('captcha-image-register') }}?v=' + Date.now() + Math.floor(
                                Math.random() * 100000000);
                            $('#Captchaimga').attr("src", url);
                        })

                        var is_term_required = '1' ? true : false;
                        var is_lineID_required = '1' ? true : false;
                        var register_form_no_steps = 1;
                        var is_register_need_acc = 1;
                        if (register_form_no_steps == 1) {
                            $('#registerfreshCaptcha').trigger('click');
                            $('.register_form_two').css('display', 'block');
                            $('#register_form_two_next_btn').css('display', 'none');
                            $('#register_form_two_prev_btn').css('display', 'none');

                            $("#stage_val").val(parseInt('1'));

                            if (is_register_need_acc == 1) {
                                $('#register_form_two_btn').css('display', 'none');
                                $('#register_form_two_submit_btn').removeClass('col-xs-8').addClass("col-xs-12");
                            }
                        }

                        @if (Session::has('ref'))
                            localStorage.setItem('refCode', '{{ Session::get('ref') }}');
                        @endif

                        @if (Session::has('removeRef'))
                            localStorage.removeItem('refCode');
                        @endif


                        var formSteps = parseInt('1'); //count fr  0
                        var ref_code = "";
                        var pwd_regex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
                        var minPwdLen = 8;
                        var minPwdMsg = "Diperlukan minimal 8 karakter";
                        if (minPwdLen == 6) {
                            minPwdLen = 6;
                            minPwdMsg = "Diperlukan minimal 6 karakter";
                        }

                        if (!!ref_code) {
                            if (ref_code == 'null') {
                                ref_code = '';
                            }
                            localStorage.setItem('refCode', ref_code);

                            if (!!ref_code) {
                                $('#refCode_formgrp').show();
                            }
                        } else {
                            var refCode = localStorage.getItem('refCode');
                            if (!!refCode) {
                                $('.register-form .refCode').val(refCode);
                                $('#txt-refCode__reg').text(refCode);
                                $('#refCode_formgrp').show();
                            }
                        }


                        $('input[name=acc_type]').change(function() {
                            $('#bankOpts--register').val(null);
                            $('#ewalletOpts--register').val(null);
                            $("#acc_no").val(null);

                            if ($(this).val() == '7') {
                                $('#isShowBankOptions,#isShowBankLable').hide();
                                $('#isShowEwalletOptions,#isShowEwalletLable').show();
                                $('#bankOpts--register').prop('disabled', true);
                                $('#ewalletOpts--register').prop('disabled', false);
                                $("#acc_no").removeAttr("minlength");
                                $("#acc_no").attr("maxlength", "20");
                                if (window.currencyCode == 'BRL') {
                                    $("#agency_code_show").hide();
                                }
                                if (window.currencyCode == 'AUD') {
                                    $("#bsb_code_show").hide();
                                }
                                if (window.currencyCode == 'INR') {
                                    $("#ifsc_code_show").hide();
                                }
                            } else {
                                $('#isShowBankOptions,#isShowBankLable').show();
                                $('#isShowEwalletOptions,#isShowEwalletLable').hide();
                                $('#bankOpts--register').prop('disabled', false);
                                $('#ewalletOpts--register').prop('disabled', true);
                                $("#acc_no").attr("minlength", window.accLength);
                                if (window.currencyCode == 'BRL') {
                                    $("#agency_code_show").show();
                                }
                                if (window.currencyCode == 'AUD') {
                                    $("#bsb_code_show").show();
                                }
                                if (window.currencyCode == 'INR') {
                                    $("#ifsc_code_show").show();
                                }
                            }
                        });

                        var thankyou = "Terima kasih atas pendaftaran Anda";
                        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
                        var captchaCode = $('#6_letters_code').val();
                        var datastring = "6_letters_code=" + captchaCode;
                        var username = $("#username").val();
                        var acc_no = $("#acc_no").val();
                        var securecode = $("#registerCaptchaimg").val();
                        var email_id = $("#email_id").val();
                        var mobileno = $("#mobileno").val();
                        var birthDate = $("#birthDate").val();

                        var fullNameRegexPattern = /^[^0-9*|\":<>[\]{}`\\();@#%^*&$~!`=+?-]+$/;
                        if (window.currencyCode == 'HKD' || window.currencyCode == 'IDR') {
                            fullNameRegexPattern = /^\s{0,1}[a-zA-Z-.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                        }

                        var nameRegexPattern = /^[a-zA-Z0-9]+$/;
                        var lineRegexPattern = /^[a-zA-Z0-9_\-\.]+$/;

                        function isInputSuccess(selector) {
                            return $(selector + ".has-success:not(.pending)").length > 0;
                        }

                        $regi_validator = $("#registerForm1").validate({
                            ignore: ":hidden:not(.always-validate)",
                            rules: {
                                name: {

                                    required: true,
                                    //pattern: /^[a-z A-Z]+$/,
                                    // pattern : /^\s{0,1}[a-zA-Z_.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/,
                                    pattern: fullNameRegexPattern,

                                    minlength: 3
                                },

                                user_name: {
                                    required: true,
                                    minlength: 6,
                                    maxlength: 12,
                                    pattern: nameRegexPattern,
                                    remote: {
                                        url: '{{ url('checkUserNameAvailability') }}',
                                        type: "post",
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                    }
                                },

                                acc_no: {
                                    required: true,
                                    minlength: function(element) {
                                        return $("#acc_no").attr('minlength');
                                    },
                                    maxlength: function(element) {
                                        return $("#acc_no").attr('maxlength');
                                    },
                                    pattern: /^[0-9]+$/,
                                    remote: {
                                        url: '{{ url('checkAccNo') }}',
                                        type: "post",
                                        dataType: "json",
                                        async: true,
                                        data: {
                                            acc_type: function() {
                                                return $('#registerForm1 input[type=radio][name=acc_type]:checked')
                                                    .val();
                                            }
                                        },
                                        complete: function(data) {
                                            if (!$('#acc_no').hasClass('pending')) {
                                                $('#accno-validate-loader').hide();
                                            }
                                        },
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                    }
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
                                bank_name: {
                                    required: true
                                },
                                password_register: {
                                    required: true,
                                    minlength: minPwdLen,
                                    maxlength: 20,
                                    pattern: pwd_regex
                                },
                                password_confirmation: {
                                    required: true,
                                    equalTo: '#password_register_1'
                                },
                                email: {
                                    required: true,
                                    email: true,
                                    remote: {
                                        url: '{{ url('checkExistingEmail') }}',
                                        type: "post",
                                        dataType: "json",
                                        async: true,
                                        complete: function(data) {
                                            if (!$('#email').hasClass('pending')) {
                                                $('#email-validate-loader').hide();
                                            }
                                        },
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                    }
                                },
                                line_id: {
                                    required: is_lineID_required,
                                    maxlength: 50,
                                    pattern: lineRegexPattern,
                                    remote: {
                                        url: '{{ url('checkExistingLineID') }}',
                                        type: "post",
                                    }
                                },
                                otp_success_code: {
                                    required: true,
                                },
                                mobileno: {
                                    required: true,
                                    minlength: function(element) {
                                        return $("#mobileno").attr('minlength');
                                    },
                                    maxlength: function(element) {
                                        return $("#mobileno").attr('maxlength');
                                    },
                                    pattern: /^[0-9]+$/,
                                    remote: {
                                        url: '{{ url('checkExistingMobile') }}',
                                        type: "post",
                                        dataType: "json",
                                        async: true,
                                        complete: function(data) {
                                            if (!$('#mobileno').hasClass('pending')) {
                                                $('#mobile-validate-loader').hide();
                                            }
                                        },
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                    }
                                },
                                identity: {
                                    required: true,
                                    pattern: /^\d{3}\.\d{3}\.\d{3}-\d{2}$/,
                                    remote: {
                                        url: '{{ url('checkIdentity') }}',
                                        type: "post",
                                        dataType: "json",
                                        async: true,
                                        complete: function(data) {
                                            if (!$('#identity').hasClass('pending')) {
                                                $('#identity-validate-loader').hide();
                                            }
                                        },
                                    }
                                },
                                terms: {
                                    required: is_term_required,
                                },
                                registerCaptchaimg: {
                                    required: true,
                                    minlength: 4,
                                    maxlength: 4,
                                    remote: {
                                        url: '{{ url('check_register_captcha') }}',
                                        type: "post",
                                        dataType: "json",
                                        complete: function(data) {
                                            console.log(data);
                                            if (data && data.responseJSON == "refreshCaptcha")
                                                $('#registerfreshCaptcha').trigger('click');
                                        },
                                        //  headers: {
                                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //  },
                                    }
                                },
                                birthDate: {
                                    dateISO: true,
                                },
                                address: {
                                    required: true,
                                    maxlength: 200,
                                }

                            },
                            // Specify validation error messages
                            messages: {
                                required: true,
                                name: {
                                    required: "Diperlukan Nama Lengkap",
                                    pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                                    minlength: "Diperlukan minimal 3 karakter",

                                },
                                user_name: {
                                    required: "Diperlukan Nama Akun",
                                    pattern: "Nama akun hanya dapat terdiri dari huruf dan angka",
                                    minlength: "Diperlukan minimal 6 karakter",
                                    maxlength: "Maksimal 12 karakter saja",
                                    remote: "Nama Akun tidak tersedia"
                                },
                                acc_no: {
                                    required: "Diperlukan nomor rekening bank",
                                    pattern: "Nomor rekening bank hanya dapat terdiri dari angka",
                                    // minlength:"Diperlukan minimal 8 karakter",
                                    minlength: function(element) {
                                        var min_length = $("#acc_no").attr('minlength');
                                        var str = "Diperlukan minimal :acc_length karakter";
                                        var minlength_msg = str.replace(":acc_length", min_length);
                                        return minlength_msg;
                                    },
                                    maxlength: "Maksimal 20 karakter saja",
                                    remote: "Nomor Rekening Sudah Terdaftar"
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
                                bank_name: {
                                    required: "Bank Diperlukan",
                                },
                                password_register: {
                                    required: "Diperlukan Kata Sandi",
                                    minlength: minPwdMsg,
                                    maxlength: "Maksimal 20 karakter saja",
                                    pattern: "Format yang tidak valid",
                                },
                                password_confirmation: {
                                    required: "Konfirmasi Kata Sandi Diperlukan",
                                    equalTo: "Konfirmasi Kata Sandi tidak sama dengan kata sandi",
                                },
                                email: {
                                    required: "Diperlukan Email",
                                    email: "Email tidak valid",
                                    remote: "Email tidak tersedia"
                                },
                                line_id: {
                                    required: "Line ID diperlukan",
                                    maxlength: "Maksimal 50 karakter saja",
                                    pattern: "Format yang tidak valid",
                                    remote: "Line ID tidak tersedia"
                                },

                                otp_success_code: {
                                    required: "Kode OTP tidak diverifikasi",
                                },
                                mobileno: {
                                    required: "Diperlukan nomor ponsel",
                                    minlength: function(element) {
                                        var min_length = $("#mobileno").attr('minlength');
                                        var str = "Diperlukan minimal :mobno_minlength karakter";
                                        var minlength_msg = str.replace(":mobno_minlength", min_length);
                                        return minlength_msg;
                                    },
                                    maxlength: function(element) {
                                        var max_length = $("#mobileno").attr('maxlength');
                                        var str = "lang.A minimum of :mobno_maxlength charaters are required";
                                        var maxlength_msg = str.replace(":mobno_maxlength", max_length);
                                        return maxlength_msg;
                                    },
                                    pattern: "Nomor ponsel harus terdiri dari angka saja",
                                    remote: "Nomor ponsel tidak tersedia"
                                },
                                identity: {
                                    required: "Bidang ini wajib diisi",
                                    pattern: "Format tidak valid",
                                },
                                terms: {
                                    required: "Diperlukan Konfirmasi Syarat & Ketentuan",
                                },
                                registerCaptchaimg: {
                                    required: "Captcha Diperlukan",
                                    remote: "Captcha tidak valid",
                                    minlength: "Diperlukan minimal 4 karakter",
                                },
                                birthDate: {
                                    required: "Tanggal lahir diperlukan",
                                    dateISO: "Tanggal tidak valid",
                                },
                                address: {
                                    required: "Address Required",
                                    maxlength: "Maximum of 200 charaters only",
                                },
                                ifsc_code: {
                                    required: "Kode IFSC diperlukan",
                                    pattern: "Kode IFSC harus berisi setidaknya satu alfabet dan angka",
                                    minlength: "Diperlukan minimal 11 karakter",
                                    maxlength: "Maksimal 11 karakter saja",
                                },
                                currency: {
                                    required: "lang.Currency is required",
                                }

                            },
                            errorElement: "em",
                            errorPlacement: function(error, element) {
                                // Add the `help-block` class to the error element
                                error.addClass("help-block");

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
                                function addErrorEleIcon(element) {
                                    if (!$(element).next("i")[0]) {
                                        $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(
                                            element);
                                    }
                                }

                                let eleId = element.id;
                                if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                    addErrorEleIcon(element);
                                } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                    addErrorEleIcon(element);
                                } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                    addErrorEleIcon(element);
                                } else {
                                    addErrorEleIcon(element);
                                }

                            },

                            success: function(label, element) {
                                // Add the span element, if doesn't exists, and apply the icon classes to it. 
                                function addSuccessEleIcon(element) {
                                    if (!$(element).next("i")[0]) {
                                        $("<i class='icon-checkmark  form-control-feedback absolute'></i>")
                                            .insertAfter(element);
                                    }
                                }
                                let eleId = element.id;

                                if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                    addSuccessEleIcon(element);
                                } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                    addSuccessEleIcon(element);
                                } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                    addSuccessEleIcon(element);
                                } else {
                                    addSuccessEleIcon(element);
                                }

                            },
                            highlight: function(element, errorClass, validClass) {

                                function chgEleShowError(element) {
                                    $(element).addClass("has-error").removeClass("has-success");
                                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                                }

                                let eleId = element.id;

                                if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                    chgEleShowError(element);
                                } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                    chgEleShowError(element);
                                } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                    chgEleShowError(element);
                                } else {
                                    chgEleShowError(element);
                                }
                            },
                            unhighlight: function(element, errorClass, validClass) {

                                function chgEleShowSuccess(element) {
                                    $(element).addClass("has-success").removeClass("has-error");
                                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                                }

                                let eleId = element.id;

                                if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                    chgEleShowSuccess(element);
                                } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                    chgEleShowSuccess(element);
                                } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                    chgEleShowSuccess(element);
                                } else {
                                    chgEleShowSuccess(element);
                                }

                            },
                            submitHandler: function(form, event) {
                                event.preventDefault();
                                event.stopPropagation();
                                $('button[type=submit]').prop('disabled', true);
                                var curr_stage = parseInt($("#stage_val").val());
                                if (formSteps == curr_stage) {

                                    //form.submit();
                                    var action = $(form).attr('action');
                                    var data = $(form).serialize();
                                    json_post(action, data).done(function(d) {
                                        //if success reset form



                                        let __cbRedirectTo = function cbRedirectTo(d, form) {
                                            if (!d.redirectUrl) {
                                                d.redirectUrl = "/";
                                            }
                                            window.location.href = window.uriPrefix + d.redirectUrl;

                                            $(form).each(function() {
                                                this.reset();
                                            });
                                            $(form).validate().resetForm();

                                            return true;
                                        }.bind(null, d, form);

                                        if (d.m) {
                                            sweetAlert(d.m, 'success', 'success').then(function() {
                                                return __cbRedirectTo();
                                            });
                                        } else {
                                            return __cbRedirectTo();
                                        }


                                    }).always(function() {

                                        $('button[type=submit]').prop('disabled', false);
                                        return true;
                                    });
                                } else {
                                    $('button[type=submit]').prop('disabled', false);
                                    return true;
                                }
                            }
                        });

                        $('#mobileno').keyup(function() {
                            if ($('#mobileno').hasClass('pending')) {
                                $('#mobileno-error').text("Memvalidasi nomor ponsel...");
                                $('#mobile-validate-loader').show();
                            }
                        });

                        $('#email').keyup(function() {
                            if ($('#email').hasClass('pending')) {
                                $('#email-error').text("Memvalidasi email...");
                                $('#email-validate-loader').show();
                            }
                        });

                        $('#acc_no').keyup(function() {
                            if ($('#acc_no').hasClass('pending')) {
                                $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                                $('#accno-validate-loader').show();
                            }
                        });

                        $('#identity').keyup(function() {
                            if ($('#identity').hasClass('pending')) {
                                $('#identity-error').text("Dalam verifikasi...");
                                $('#identity-validate-loader').show();
                            }
                        });

                        $('.next_btn').on('click', function() {

                            validatingForm(0);
                        });

                        function validatingForm(times) {
                            times++;
                            if (times > 2) {
                                sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali", 'warning');
                            }

                            if (($('#mobileno').hasClass('pending') || $('#email').hasClass('pending'))) {
                                showLoadingImgFn();
                            }

                            setTimeout(function() {
                                if ($("#registerForm1").valid()) {
                                    if (!$('#mobileno').hasClass('pending') && !$('#email').hasClass('pending')) {
                                        removeLoadingImgFn();
                                        switchForm(1);
                                    } else {
                                        validatingForm(times);
                                    }
                                } else if ($('#mobileno').hasClass('pending') || $('#email').hasClass('pending')) {
                                    validatingForm(times);
                                } else {
                                    removeLoadingImgFn();
                                    sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali",
                                        'warning');
                                }
                            }, 1000);
                        }

                        function switchForm(val) {
                            var stepTwo_lang = "Langkah";
                            var stepLast_lang = "Langkah Terakhir";

                            var curr_stage = $("#stage_val").val();
                            var up_val = parseInt(curr_stage) + val; // val -1 = previous tab, 1 = next tab
                            $("#stage_val").val(up_val);
                            window.scrollTo(0, 0);
                            switch (up_val) {
                                case 0:
                                    $('.register_form_one').css("display", "block");
                                    $('.register_form_two,.register_form_three').css("display", "none");
                                    $('#step_title').find('span').text($('#step_title').attr('data-title'));
                                    break;
                                case 1:
                                    $('#registerfreshCaptcha').trigger('click');
                                    $('.register_form_one,.register_form_three').css("display", "none");
                                    $('.register_form_two,.prev_btn').css("display", "block");
                                    $('#step_title').find('span').text($('#step_title').attr('data-title') + ' - ' +
                                        stepTwo_lang + ' 2 ');
                                    break;
                                case 2:
                                    $('#registerfreshCaptcha').trigger('click');
                                    $('.register_form_one,.register_form_two').css("display", "none");
                                    $('.register_form_three,.prev_btn').css("display", "block");
                                    $('#step_title').find('span').text(stepLast_lang);
                                    break;

                            }
                        }

                        $('.prev_btn').on('click', function() {
                            switchForm(-1);
                        });

                        $(document).on('keyup', function(event) {
                            event.preventDefault();
                            if (event.which == 13) {
                                var el = $(this).find('#registerForm1 .next_btn:visible')
                                if (!el) {

                                    el = $(this).find('#registerForm1  button[type="submit"]:visible');
                                }
                                el.click();
                            }
                        });


                        /*min and max length changing based on bank id*/
                        var default_minlength, default_maxlength, custom_minLength, custom_maxLength, selectedBank;
                        default_minlength = $("#acc_no").attr('minlength');
                        default_maxlength = $("#acc_no").attr('maxlength');
                        custom_minLength = default_minlength;
                        custom_maxLength = default_maxlength;

                        $('#bankOpts--register').on('change', function() {
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
                        if (window.location.href.indexOf("ref") > -1) {
                            var url = new URL(location);
                            url.searchParams.delete('ref');
                            history.pushState(null, document.title, url);
                        }

                    });
                </script>
            </div>
        </div>

    </div>

    </div>
</x-mobile.app>
