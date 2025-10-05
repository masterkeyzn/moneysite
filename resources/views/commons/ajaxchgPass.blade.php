<div class="row chg-pass">
    <div class="col-xs-12 offset-lg-3 col-lg-6">
        <form id="chgPwdForm" class="needs-validation" method="POST" action="{{ url('chg-pass') }}">
            @csrf
            <div class="form-group row no-gutters">
                <label for="CurrentPwd" class="col-md-5 col-form-label text-left" i18n>Kata sandi saat ini<span
                        class="text-danger">&nbsp;*&nbsp;</span></label> <!--TODO currency-->
                <div class="col-md-7">
                    <input class="form-control" id="currentPwd" name="currentPwd" type="Password">
                </div>
            </div>
            <div class="form-group row no-gutters">
                <label for="newPwd" class="col-xs-12 col-md-5 col-form-label  text-left" i18n>kata sandi baru<span
                        class="text-danger">&nbsp;*&nbsp;</span></label> <!--TODO currency-->
                <div class="col-xs-12 col-md-7">
                    <input class="form-control" id="newPwd" name="newPwd" type="password" required>
                    <!-- <small class="text-left">* Minimal 8 karakter dan memiliki min 1 alfabet, 1 angka dan 1 karakter khusus  (!@#$%^&*()_+) </small> -->
                    <small class="text-left">* Minimal 8 karakter dan memiliki min 1 alfabet, 1 angka dan 1 karakter
                        khusus (!@#$%^&amp;*()_+) </small>
                    <i class="icon-eye toggle-password" input_id="#newPwd"></i>
                </div>
            </div>
            <div class="form-group row no-gutters">
                <label for="ConfirmPwd" class="col-xs-12  col-md-5 col-form-label  text-left">konfirmasi sandi<span
                        class="text-danger">&nbsp;*&nbsp;</span></label> <!--TODO currency-->
                <div class="col-xs-12  col-md-7">
                    <input class="form-control" id="confirmPwd" name="confirmPwd" type="password" required>
                    <i class="icon-eye toggle-password" input_id="#confirmPwd"></i>
                </div>
            </div>
            <div class="alert alert-success message--chg-pass" style="display:none;">
                Berhasil mengubah kata sandi </div>
            <div class="form-group row no-gutters mt-3">
                <div class="col-xs-12  col-6"></div>
                <div class="col-xs-12 col-6 text-center">
                    <button type="submit" class="btn btn-primary" i18n>Submit</button>
                </div>
            </div>

        </form>

    </div>
</div>
<script>
    $(document).ready(function() {
        bindChgPassFormJS(pwd_regex =
            /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/, 8);
    });
</script>
