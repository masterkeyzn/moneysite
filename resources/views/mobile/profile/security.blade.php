<x-mobile.app>
    <div class="container">
        <style>
        </style>
        <div class="row ">
            <div class="col-xs-12 offset-lg-3 col-lg-8" id="enable-2fa">
                <form id="enable2FA" class="needs-validation" method="POST" action="{{ url('enable2FA') }} ">
                    @csrf
                    <h3 class="mt-3">Aktivasi 2FA</h3>

                    <h4 class="mt-3">
                        Apa itu 2FA? </h4>
                    <p>
                        2FA (Two-Factor Authentication) digunakan untuk memberikan pin kedua saat masuk
                        ke akun. Pin ini hanya dapat digunakan sekali dan hanya akan berlaku selama
                        beberapa detik. Pin 2FA dapat diperoleh menggunakan aplikasi seperti Google
                        Authenticator atau Authy. </p>
                    <h4>
                        Berikut adalah langkah-langkah untuk mengaktifkan 2FA: </h4>
                    <ol>
                        <li>
                            Unduh aplikasi Google Authenticator atau Authy dari Play Store atau App
                            Store. Berikut adalah tautan unduhan untuk aplikasi tersebut.
                            <div class="mb-3 navTabTrans">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#android" aria-controls="android"
                                            role="tab" data-toggle="tab">Android</a></li>
                                    <li role="presentation"><a href="#ios" aria-controls="ios" role="tab"
                                            data-toggle="tab">IOS</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="android">
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
                            Tambahkan kode rahasia dengan memindai kode batang QR ini atau dengan
                            menyalin kode di bawah ini dan memasukkannya ke dalam aplikasi autentikator.
                        </li>
                    </ol>

                    <div class="mt-4">
                        <label>QR image</label>
                    </div>
                    <div class="form-group row d-flex align-center">
                        <div class="col-md-3 col-form-label text-left">
                            <img src="data:image/png;base64,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"
                                class="img-responsive img-rounded" style="background: #ffffff" alt="">
                        </div> <!--TODO currency-->
                        <div class="col-md-6">
                            <p>Jika autentikator Anda tidak mendukung kode QR, silakan masukkan kode di
                                kolom di bawah ini.</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-10">
                            <label>Secret Code:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="visible-code" name="fa2_secret"
                                    value="2OFGF7D2JPJ2BNYYVWC37ZD4TEFIYFP2H3KKHIGCFTTU57GVMKCUMTD3FOZW7PQOF45PRJTQFRHAGNBLT7ZLCQKTJ7GO7JN3EVB4DKQ"
                                    readonly>
                                <span class="input-group-btn">
                                    <button class="btn-sm btn-secondary" id="btn-copy-visible-code" type="button"><i
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
                                menghapusnya dari aplikasi autentikator, dan jangan membagikannya dengan
                                siapa pun. Jika hilang dan tidak dapat dipulihkan, Anda dapat
                                menghubungi Layanan Pelanggan untuk verifikasi akun. </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-10">
                            <div class="form-check">


                                <label class="form-check-label" for="save-visible-code"><input class="form-check-input"
                                        type="checkbox" id="save-visible-code" name="save-visible-code" required>&nbsp;
                                    Centang kotak konfirmasi untuk memastikan bahwa langkah-langkah di
                                    atas telah diselesaikan, kemudian masukkan PIN 6 digit dari aplikasi
                                    autentikator dan klik LANJUTKAN untuk mengaktifkannya. </label>
                            </div>
                        </div>
                    </div>
                    <div id="verification-code" style="display:none">
                        <div class="form-group row no-gutters  mt-3">
                            <div class="col-md-6 col-md-offset-2">
                                <div class="verification-code text-center">
                                    <label class="control-label">Kode Verifikasi</label>
                                    <div class="pin-in-grp" id="fa2_enableGroup">


                                        <input type="password" maxlength="1" name="pincode[1]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">
                                        <input type="password" maxlength="1" name="pincode[2]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">
                                        <input type="password" maxlength="1" name="pincode[3]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">
                                        <input type="password" maxlength="1" name="pincode[4]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">
                                        <input type="password" maxlength="1" name="pincode[5]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">
                                        <input type="password" maxlength="1" name="pincode[6]" required
                                            class="form-control pincode text-center" style="width:16.66%;float:left">


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group  no-gutters mt-3">

                        <div class="col-xs-12 col-md-6 col-md-offset-2 text-center">
                            <button type="submit" class="btn btn-primary" i18n>Lanjutkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-mobile.app>
