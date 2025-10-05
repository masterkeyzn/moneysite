<x-desktop.profile-app>
    <div class="outlet tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="container-b3">
                
                <div class="row ">
                    <div class="col-xs-12 offset-lg-3 col-lg-8" id="enable-2fa">
                        <form id="enable2FA" class="needs-validation" method="POST"
                            action="{{ url('') }} ">
                            @csrf
                            <h3 class="mt-3">Aktivasi 2FA</h3>

                            <h4 class="mt-3">
                                Apa itu 2FA? </h4>
                            <p>
                                2FA (Two-Factor Authentication) digunakan untuk memberikan pin kedua
                                saat masuk ke akun. Pin ini hanya dapat digunakan sekali dan hanya akan
                                berlaku selama beberapa detik. Pin 2FA dapat diperoleh menggunakan
                                aplikasi seperti Google Authenticator atau Authy. </p>
                            <h4>
                                Berikut adalah langkah-langkah untuk mengaktifkan 2FA: </h4>
                            <ol>
                                <li>
                                    Unduh aplikasi Google Authenticator atau Authy dari Play Store atau
                                    App Store. Berikut adalah tautan unduhan untuk aplikasi tersebut.
                                    <div class="mb-3 navTabTrans">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a
                                                    href="#android" aria-controls="android"
                                                    role="tab" data-toggle="tab">Android</a>
                                            </li>
                                            <li role="presentation"><a href="#ios"
                                                    aria-controls="ios" role="tab"
                                                    data-toggle="tab">IOS</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active"
                                                id="android">
                                                <div class="row d-flex align-center text-center">
                                                    <div class="col-md-2 col-xs-4">
                                                        <a class="app-link copy-link"
                                                            href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2"
                                                            target="_blank">
                                                            <img class="app-icon img-responsive img-rounded"
                                                                src="https://files.sitestatic.net/assets/imgs/googleAuth-150x150.webp"
                                                                alt="Google Authenticator">
                                                        </a>
                                                        <div>Authenticator</div>
                                                    </div>

                                                    <div class="col-md-2 col-xs-4">
                                                        <a class="app-link copy-link"
                                                            href="https://play.google.com/store/apps/details?id=com.authy.authy"
                                                            target="_blank">
                                                            <img class="app-icon img-responsive img-rounded"
                                                                src="https://files.sitestatic.net/assets/imgs/authy-150x150.webp"
                                                                alt="Authy">
                                                        </a>
                                                        <div>Authy</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="ios">
                                                <div class="row d-flex align-center text-center">
                                                    <div class="col-md-2 col-xs-4">
                                                        <a class="app-link copy-link"
                                                            href="https://apps.apple.com/us/app/google-authenticator/id388497605"
                                                            target="_blank">
                                                            <img class="app-icon img-responsive img-rounded"
                                                                src="https://files.sitestatic.net/assets/imgs/googleAuth-150x150.webp"
                                                                alt="Google Authenticator">
                                                        </a>
                                                        <div>Authenticator</div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-4">
                                                        <a class="app-link copy-link"
                                                            href="https://apps.apple.com/us/app/twilio-authy/id494168017"
                                                            target="_blank">
                                                            <img class="app-icon img-responsive img-rounded"
                                                                src="https://files.sitestatic.net/assets/imgs/authy-150x150.webp"
                                                                alt="Authy">
                                                        </a>
                                                        <div>Authy</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Tambahkan kode rahasia dengan memindai kode batang QR ini atau
                                    dengan menyalin kode di bawah ini dan memasukkannya ke dalam
                                    aplikasi autentikator. </li>
                            </ol>

                            <div class="mt-4">
                                <label>QR image</label>
                            </div>
                            <div class="form-group row d-flex align-center">
                                <div class="col-md-3 col-form-label text-left">
                                    <img src="data:image/png;base64,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"
                                        class="img-responsive img-rounded"
                                        style="background: #ffffff" alt="">
                                </div> <!--TODO currency-->
                                <div class="col-md-6">
                                    <p>Jika autentikator Anda tidak mendukung kode QR, silakan masukkan
                                        kode di kolom di bawah ini.</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <label>Secret Code:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            id="visible-code" name="fa2_secret"
                                            value="WELGHDDYV6DNADSCRWDSGI3FTUWGPYDUCTJBORW4XBI2VOW7QJ62RAM43PPLVHJU7YSSKX6BD222GNBS76KCG4QW55TW264SU3YGF6Y"
                                            readonly>
                                        <span class="input-group-btn">
                                            <button class="btn-sm btn-secondary"
                                                id="btn-copy-visible-code" type="button"><i
                                                    class="icon-copy"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <h4>
                                        Informasi Penting: </h4>
                                    <p>
                                        Setelah aktivasi, pastikan untuk menyimpan kode rahasia; jangan
                                        menghapusnya dari aplikasi autentikator, dan jangan
                                        membagikannya dengan siapa pun. Jika hilang dan tidak dapat
                                        dipulihkan, Anda dapat menghubungi Layanan Pelanggan untuk
                                        verifikasi akun. </p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <div class="form-check">


                                        <label class="form-check-label"
                                            for="save-visible-code"><input class="form-check-input"
                                                type="checkbox" id="save-visible-code"
                                                name="save-visible-code" required>&nbsp;
                                            Centang kotak konfirmasi untuk memastikan bahwa
                                            langkah-langkah di atas telah diselesaikan, kemudian
                                            masukkan PIN 6 digit dari aplikasi autentikator dan klik
                                            LANJUTKAN untuk mengaktifkannya. </label>
                                    </div>
                                </div>
                            </div>
                            <div id="verification-code" style="display:none">
                                <div class="form-group row no-gutters  mt-3">
                                    <div class="col-md-6 col-md-offset-2">
                                        <div class="verification-code text-center">
                                            <label class="control-label">Kode Verifikasi</label>
                                            <div class="pin-in-grp" id="fa2_enableGroup">


                                                <input type="password" maxlength="1"
                                                    name="pincode[1]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">
                                                <input type="password" maxlength="1"
                                                    name="pincode[2]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">
                                                <input type="password" maxlength="1"
                                                    name="pincode[3]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">
                                                <input type="password" maxlength="1"
                                                    name="pincode[4]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">
                                                <input type="password" maxlength="1"
                                                    name="pincode[5]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">
                                                <input type="password" maxlength="1"
                                                    name="pincode[6]" required
                                                    class="form-control pincode text-center"
                                                    style="width:16.66%;float:left">


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group  no-gutters mt-3">

                                <div class="col-xs-12 col-md-6 col-md-offset-2 text-center">
                                    <button type="submit" class="btn btn-primary"
                                        i18n>Lanjutkan</button>
                                </div>
                            </div>



                        </form>

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
</x-desktop.profile-app>