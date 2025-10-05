<x-desktop.profile-app>
    <div class="outlet tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="container-b3">
                <div class="row history">

                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row chg-pass activate_referral">
                                <div class="col-xs-12 offset-lg-3 col-lg-8">
                                    <div class="title">Formulir Aktivasi Kode Referal</div>
                                    <br />
                                    @if (isset(Auth::user()->referral->status) && Auth::user()->referral->status == 'verify')
                                        <div class="alert alert-danger col-xs-12 offset-lg-3 col-lg-12"
                                            id="result-text">
                                            Pengajuan Anda untuk mengaktifkan referral sedang dalam proses.
                                        </div>
                                    @else
                                        <form id="chgPwdForm" class="needs-validation activateReferralForm"
                                            method="POST" action="{{ url('submit_activation_referral') }}">
                                            @csrf
                                            <div id="step_one_form">
                                                <div class="form-group row no-gutters">
                                                    <label class="col-md-5 col-xs-12 col-form-label text-left"
                                                        i18n>Bank<span class="text-danger">&nbsp;*&nbsp;</span></label>
                                                    <div class="col-md-7 col-xs-12">
                                                        <select class="form-control" data-type="05" id="bank_user_id"
                                                            name="bank_name" style="height: 35px;">
                                                            <option selected value="">- Silahkan
                                                                pilih -</option>
                                                            <option value="2779932" status = "1" class=""
                                                                data-metName="Bank" data-method="5">
                                                                {{ Auth::user()->userbank->bank_name . ' (' . Auth::user()->userbank->account_number . ')' }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row no-gutters">
                                                    <label class="col-md-5 col-form-label text-left" i18n>Nama Sesuai
                                                        Rekening<span class="text-danger">&nbsp;*&nbsp;</span></label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="name" id="full_name"
                                                            value="{{ Auth::user()->userbank->account_name }}"
                                                            class="form-control "
                                                            placeholder="SILAHKAN MASUK NAMA PEMILIK AKUN" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group row no-gutters">
                                                    <label class="col-md-5 col-form-label text-left" i18n>ID CARD (KTP /
                                                        SIM
                                                        / PASPOR)<span class="text-danger">&nbsp;*&nbsp;</span></label>
                                                    <div class="col-md-7 d-flex flex-wrap">
                                                        <div class="file-drop-area file-drop-area">
                                                            <span class="btn btn-secondary " i18n>Pilih
                                                                File</span>
                                                            <span class="file-msg">
                                                                atau seret dan taruh file di sini </span>
                                                            <input class="file-input" name="user_identification"
                                                                id="user_identification" type="file" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="alert alert-success message--chg-pass"
                                                    style="display:none;">
                                                    Berhasil mengubah kata sandi </div>
                                                <div class="form-group row no-gutters mt-3">
                                                    <div class="col-xs-12  col-6"></div>
                                                    <div class="col-xs-12 col-6 text-center">
                                                        <button type="button" class="btn btn-primary" id="next_btn"
                                                            i18n>Lanjut</button>
                                                    </div>
                                                </div>
                                                <input type="text" name="method" value="5" style="opacity: 0;">
                                            </div>

                                            <div id="step_two_form" style="ding: 0 10px; ">
                                                <div>
                                                    <h4>Syarat Dan Ketentuan Umum Referal</h4>
                                                    <ul style="    font-size: small;">
                                                        <li>Saya memberikan Informasi Pribadi yang akurat
                                                            dan benar, serta mempertanggung jawabkan atas
                                                            ketidakbenaran data yang saya berikan</li>
                                                        <li>Saya berkomitmen untuk tidak melakukan Tindakan
                                                            Phising . Phising adalah tindakan mempromosikan
                                                            salah satu website dengan mengunakan Nama
                                                            website orang lain</li>
                                                        <li>Saya berkomitmen untuk tidak melakukan promosi
                                                            atau membuat SEO / membuat tautan back link
                                                            dengan menggunakan situs Link Pemerintah atau
                                                            metode apapun yang berkaitan dan aktifitas
                                                            merugikan lainnya.</li>
                                                        <li>Saya menyadari bahwa melanggar syarat dan
                                                            ketentuan ini dapat mengakibatkan penutupan akun
                                                            dan pemblokiran data, serta saya bersedia
                                                            menerima segala konsekuensi yang timbul akibat
                                                            pelangaran tersebut</li>
                                                        <li>Semua keputusan pihak Admin / penyenglenggara
                                                            website adalah mutlak dan Admin website berhak
                                                            melakukan perubahan syarat dan ketentuan ini
                                                            sewaktu- waktu, harap membaca dengan seksama
                                                            terkait syarat dan ketentuan ini dari waktu ke
                                                            waktu.</li>
                                                    </ul>
                                                </div>
                                                <div class="form-group form-check ">
                                                    <div class="col-md-12 submit-box" style="padding: 0;">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" id="terms" name="terms"
                                                                    value= "on">
                                                                &nbsp;Dengan memilih tombol KIRIMKAN
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row no-gutters mt-3">
                                                    <div class="col-xs-12  col-6"></div>
                                                    <div class="col-xs-12 col-6 text-center">
                                                        <button type="submit" class="btn btn-primary"
                                                            i18n>Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    @endif
                                </div>

                                <div class="col-xs-12 offset-lg-3 col-lg-4" style="margin: 80px 0;">
                                    <img class="img-fluid"
                                        src="https://files.sitestatic.net/assets/imgs/asf/ASF_desktop.webp"
                                        alt="asf">
                                </div>
                            </div>

                            <div class="modal-wrapper nifty-modal slide-in-bottom add_bank_modal"
                                id="regbank_popup__depo"></div>

                        </div>

                    </div>



                    <script>
                        $(document).ready(function() {
                            bindChgPassFormJS(pwd_regex =
                                /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/, 8);

                            /*set domain based ref url*/
                            var base_url = window.location.origin;
                            var ref_url = $("#elCopyText").val();
                            var ref_final_url = base_url + ref_url;
                            $("#elCopyText").val(ref_final_url);
                            // console.log(ref_final_url);
                            /*set domain based ref url end*/
                        });
                    </script>
                </div>
            </div>

        </div>

    </div>
    @slot('js2')
        <script>
            $(document).ready(function() {

                fileUploadReceipt('.file-drop-area');

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
                $('#mobile').keyup(function() {
                    $('#btn-otp').prop('disabled', true);
                    $('#btn-veri-otp').prop('disabled', true);
                    if ($('#mobile').hasClass('pending')) {
                        $('#mobile-error').text("Memvalidasi nomor ponsel...");
                        $('#mobile-validate-loader').show();
                    }
                });

                $('#email').keyup(function() {
                    $('#btn-otp').prop('disabled', true);
                    $('#btn-veri-otp').prop('disabled', true);
                    if ($('#email').hasClass('pending')) {
                        $('#email-error').text("Memvalidasi email...");
                        $('#email-validate-loader').show();
                    }
                });

                var fullNameRegexPattern = /^[^0-9*|\":<>[\]{}`\\();@#%^*&$~!`=+?-]+$/;
                if (window.currencyCode == 'HKD' || window.currencyCode == 'IDR') {
                    fullNameRegexPattern = /^\s{0,1}[a-zA-Z-.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                }


                $(".activateReferralForm").validate({
                    ignore: ":hidden:not(.always-validate), [readonly=readonly]",
                    rules: {
                        mobile: {
                            minlength: function(element) {
                                return $("#mobile").attr('minlength');
                            },
                            maxlength: function(element) {
                                return $("#mobile").attr('maxlength');
                            },
                            pattern: /^[0-9]+$/,
                            remote: {
                                url: '{{ url('checkExistingMobile') }}',
                                type: "post",
                                dataType: "json",
                                async: true,
                                data: {
                                    mobileno: function() {
                                        return $('#mobile').val();
                                    },
                                    checkForAffiliate: true,
                                },
                                complete: function(data) {
                                    if (!$('#mobile').hasClass('pending') && !$('#mobile').hasClass(
                                            'has-error')) {
                                        $('#mobile-validate-loader').hide();
                                        $('#btn-otp').prop('disabled', false);
                                        $('#btn-veri-otp').prop('disabled', false);
                                    }
                                },
                                //  headers: {
                                //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                //  },
                            }
                        },
                        email: {
                            email: true,
                            remote: {
                                url: '{{ url('checkExistingEmail') }}',
                                type: "post",
                                dataType: "json",
                                async: true,
                                data: {
                                    email: function() {
                                        return $('#email').val();
                                    },
                                    checkForAffiliate: true,
                                },
                                complete: function(data) {
                                    if (!$('#email').hasClass('pending') && !$('#email').hasClass(
                                            'has-error')) {
                                        $('#email-validate-loader').hide();
                                        $('#btn-otp').prop('disabled', false);
                                        $('#btn-veri-otp').prop('disabled', false);
                                    }
                                },
                                //  headers: {
                                //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                //  },
                            }
                        },
                        name: {
                            required: true,
                            //pattern: /^[a-z A-Z]+$/,
                            // pattern : /^\s{0,1}[a-zA-Z_.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/,
                            pattern: fullNameRegexPattern,

                            minlength: 3
                        },
                        bank_name: {
                            required: true
                        },
                        otp_success_code: {
                            required: true,
                        },
                        terms: {
                            required: true,
                        },
                        user_identification: {
                            extension: 'jpeg|jpg|png|bmp',
                        }
                    },
                    // Specify validation error messages
                    messages: {
                        required: true,
                        mobile: {
                            minlength: function(element) {
                                var min_length = $("#mobile").attr('minlength');
                                var str = "Diperlukan minimal :mobno_minlength karakter";
                                var minlength_msg = str.replace(":mobno_minlength", min_length);
                                return minlength_msg;
                            },
                            maxlength: function(element) {
                                var max_length = $("#mobile").attr('maxlength');
                                var str = "lang.A minimum of :mobno_maxlength charaters are required";
                                var maxlength_msg = str.replace(":mobno_maxlength", max_length);
                                return maxlength_msg;
                            },
                            pattern: "Nomor ponsel harus terdiri dari angka saja",
                            remote: "Nomor ponsel tidak tersedia"
                        },
                        email: {
                            required: "Diperlukan Email",
                            email: "Email tidak valid",
                            remote: "Email tidak tersedia"
                        },
                        name: {
                            required: "Diperlukan Nama Lengkap",
                            pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                            minlength: "Diperlukan minimal 3 karakter",

                        },
                        bank_name: {
                            required: "Bank Diperlukan",
                        },
                        otp_success_code: {
                            required: "Kode OTP tidak diverifikasi",
                        },
                        terms: {
                            required: "Diperlukan Konfirmasi Syarat & Ketentuan",
                        },
                        user_identification: {
                            extension: "File yang dipilih tidak valid",
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
                        } else if (eleId == 'mobile' && !$('#mobile').hasClass('pending')) {
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
                        } else if (eleId == 'mobile' && !$('#mobile').hasClass('pending')) {
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
                        } else if (eleId == 'mobile' && !$('#mobile').hasClass('pending')) {
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
                        } else if (eleId == 'mobile' && !$('#mobile').hasClass('pending')) {
                            chgEleShowSuccess(element);
                        } else {
                            chgEleShowSuccess(element);
                        }

                    },
                    submitHandler: function(form, event) {
                        event.preventDefault();
                        event.stopPropagation();

                        ajaxForm(form);
                        return true;
                    }
                });

                $('#step_two_form').hide();
                $('#next_btn').click(function(e) {
                    if ($(".activateReferralForm").valid()) {
                        $('#step_one_form').hide();
                        $('#step_two_form').show();
                    }
                })




                function ajaxForm(form) {
                    $(form).find('button[type="submit"]').prop('disabled', true);
                    window.ajax_submit(form).done(
                        function(d) {
                            if (d.status = 's') { //success

                                $(form).each(function() {
                                    this.reset();
                                    $('.file-drop-area .file-msg').html('   or drag and drop file here');
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

                let isBtnOtpCanEnable = true;

                //Commented by vicky ref - FRONT-5650
                // $("#bank_user_id").click(function(){
                //     $(this).find("option").each(function(){
                //         if($(this).attr('data-method') != '5' && $(this).val() != ""){
                //             $(this).remove();
                //         }
                //     });
                // });

                $('#btn_add_ubank__depo').click(function(e) {
                    // $(this).prop('disabled',  true);
                    $('#regbank_popup__depo').html('');
                    $('#regbank_popup__depo').load(window.uriPrefix + '/regaccform?type=' + 5 +
                        '&showOnlyBank=false',
                        function(d) {
                            var fullName = $(d).find('input[name="name"]').val();

                            if (fullName) {
                                $('#full_name').val(fullName);
                                $('#full_name').prop('readonly', true);
                            }
                            $('#regbank_popup__depo').nifty("show");
                            window.bindBankRegFormVal('#bank_register_popup'); // only show for bank method
                        });
                });

                function enableBtnOtp() {
                    //becoz of setTimeOut Enable after XXseconds, hence should check if btn should be disabled
                    if (isBtnOtpCanEnable) {
                        //.text(Kirim ulang OTP)
                        $('#btn-otp').prop('disabled', false);
                    }
                }


                function disableBtnOtp4ever() {
                    isBtnOtpCanEnable = false;
                    $('#btn-otp').prop('disabled', true);
                }

                function removeEleFeedback(element) {
                    $(element).next("i").remove();
                    $(element).next("em").remove();
                }

                $('#btn-otp').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    $(this).prop('disabled', true);
                    $('#btn-veri-otp').prop('disabled', false);

                    let thisBtn = this;
                    let data = {
                        is_activate_referral: '1'
                    };

                    // 0 = mobile, 1 = email
                    var type = $('input[name="type"]')[0].checked ? 'mobile' : 'email';
                    type = 'email';

                    if (type == 'mobile') {
                        data.mobileno = $('input[name="mobile"]').val();
                        data.contact_country = $('input[name="contact_country"]').val();
                    } else {
                        data.email = $('input[name="email"]').val();
                    }


                    window.json_post("{{ url('getOTP') }}", data).done(function(d) {


                        if (d.s == 's' && d.data) {

                            //disable verifiy otp btn if success get OTP
                            $('#btn-veri-otp').prop('disabled', false);

                            $('#otp-prefix').text(d.data.otp_prefix);
                            $('#input-opt-prefix').val(d.data.otp_prefix);
                            $('#otp-feedback').removeClass('has-error').addClass('has-success').next(
                                '.js-feedback').text(d.m);

                        } else {

                            // $('#otp-prefix').text( '');
                            $('#otp-feedback').removeClass('has-success').addClass('has-error').next(
                                '.js-feedback').text(d.m);

                            //Enable btn if exception occurred
                            enableBtnOtp();

                        }
                        //revalidate otp_success_code in case before user submitted form first, else will show 2 err msgs
                        removeEleFeedback($('#otp_success_code'));
                    }).fail(function() {
                        //Enable btn if exception occurred
                        enableBtnOtp();
                    }).always(function() {
                        //Enable btn only after 60secs
                        setTimeout(function(cb) {
                            cb();
                        }.bind(null, enableBtnOtp), 60000);
                    });
                    return false;
                });

                $('#btn-veri-otp').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    let data = {};

                    // 0 = mobile, 1 = email
                    var type = $('input[name="type"]')[0].checked ? 'mobile' : 'email';
                    type = 'email';

                    if (!$('#input-opt-prefix').val()) {
                        return sweetAlert("Kode OTP tidak terkirim, silakan klik Kirim OTP untuk melanjutkan.",
                            'warning');
                    }

                    data = {
                        is_activate_referral: '1',
                        name: $('input[name="name"]').val(),
                        otp_prefix: $('#input-opt-prefix').val(),
                        otp: $('input[name="otp"]').val()
                    };

                    if (type == 'mobile') {
                        data.mobileno = $('input[name="mobile"]').val();
                        data.contact_country = $('input[name="contact_country"]').val();
                    } else {
                        data.email = $('input[name="email"]').val();
                    }

                    $(this).prop('disabled', true);

                    let thisBtn = this;

                    window.json_post("{{ url('verifyOTP') }}", data).done(function(d) {

                        if (d.s == 's' && d.data) {
                            // once verify success
                            $('input[name="otp_success_code"]').val(d.data.success_code);
                            $('#otp-feedback').removeClass('has-error').addClass('has-success').next(
                                '.js-feedback').text(d.m);
                            $('input[name="otp"]').prop('readonly', true);

                            $('#otp-input-group-btn').hide().find('button').prop('disabled', true);

                            $('#mobile').prop('readonly',
                                true); //don't allow user change mobile no anymore
                            $('#email').prop('readonly',
                                true); //don't allow user change mobile no anymore
                            disableBtnOtp4ever();
                            $('#otp_popup__depo').nifty("hide");
                        } else {
                            $('#btn-otp').prop('disabled', false);
                            $('#otp-feedback').removeClass('has-success').addClass('has-error').next(
                                '.js-feedback').text(d.m);
                        }

                        //revalidate otp_success_code in case before user submitted form first, else will show 2 err msgs
                        // $regi_validator.element('#otp_success_code');
                        removeEleFeedback($('#otp_success_code'));
                    }).always(function() {
                        $(thisBtn).prop('disabled', false);
                        console.log($(thisBtn));
                    });
                    return false;
                });

            });
        </script>
    @endslot
</x-desktop.profile-app>
