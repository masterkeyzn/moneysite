<div id="r-side-bar">
    <div class="side-bar-content container">
        @guest
            <style type="text/css">
            </style>
            <div class="modal-header text-center">
                <button class="btn btn-link pull-left" id="btn-close--login-modal"> X </button>
                <div style="width:100%;">
                    <h4 class="text-center modal-title">Login</h4>
                </div>
            </div>
            <div class="modal-body">
                <form name="loginForm" id="loginForm" class="form-horizontal needs-validation" action="{{ url('login') }}"
                    method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="password" class="fs-lg" i18n>Nama pengguna</label>
                        <div class="icon-input">
                            <input type="text" class="form-control input-l" maxlength="50" name="username"
                                autocomplete="off" required="required" id="UserName" aria-describedby="emailHelp"
                                placeholder="">
                            <i class="icon-user left"></i>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="fs-lg" i18n>Kata sandi</label>
                        <div class="icon-input">

                            <input type="password" class="form-control  input-l" maxlength="20" id="pwd--login"
                                name="password" required="required" autocomplete="current-password" />
                            <i class="icon-lock left"></i>
                            <i class="icon-eye toggle-password" input_id="#pwd--login"></i>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label>
                            <input type="checkbox" id="RememberMe" name="RememberMe" value="1" checked>
                            <small class="text-left"> Ingat saya </small>
                        </label>
                    </div>

                    <div class="row  alert alert-danger message" _login-modal>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" *ngIf="!inProgress"
                            class="btn btn-block btn-primary fs-lg btn-submit">Login</button>
                        <button type="button" *ngIf="!inProgress" class="btn btn-link" id="forgotPwd-btn--login-modal"
                            i18n>
                            Lupa kata sandi? &nbsp;<i class="icon-redo"></i>
                        </button>
                        <app-ellipsis *ngIf="inProgress"></app-ellipsis>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center" id="footer--login-modal">
                <div class="footer-content">Tidak terdaftar? <a href="{{ url('register') }}" i18n>Daftar</a></div>
            </div>
        @endguest
    </div>
</div>
