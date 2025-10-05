<div class="row profile-edit">
    <div class="col-lg-5 col-xs-12">
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Nama pengguna :</p>
            </div>
            <div class="col-xs-8 noSidePadding username-wrapper" style="flex-wrap: wrap">
                <div>{{ Auth::user()->username }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Tingkat Anggota :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <div class="memer_leavel">
                    <p>New</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Nama Sesuai Rekening :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->userbank->account_name }} </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Alamat email :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xs-12 ">
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Nomor Kontak. :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->phone }}</p>
            </div><!--(//TODO masked)-->
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Refferal Kode :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                @if (Auth::user()->referral && Auth::user()->referral->status == 'active')
                    <p>
                        <input type="text" class="form-control"
                            value="/register?ref={{ Auth::user()->referral->referral_code }}" readonly
                            id="elCopyText"
                            style="width: 80%;display:inline-block;">&nbsp;&nbsp;&nbsp;<a
                            href="javascript:void(0);" id="btn-copy--profile-edit"> <i
                                class="icon-copy"></i></a>
                    </p>
                @elseif (Auth::user()->referral && Auth::user()->referral->status == 'inactive')
                    <p>
                        <span class="kyc-label unverified"><i class="icon-info"></i> Suspended</span>
                    </p>
                @else
                    <p>
                        <a class="" href="{{ url('profile/activate-referral') }}">
                            <span class="kyc-label unverified"><i class="icon-info"></i>
                                Unverified</span>
                            <span>Klik sini untuk mengaktifkan Kode Referal</span>
                        </a>
                    </p>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n>Pin kedua :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>
                    <span class="switch_lable">OFF</span>
                    <label class="switch">
                        <input type="checkbox"  name="is_on_second_pin" value="1">
                        <span class="slider round"></span>
                    </label>
                    <span class="switch_lable">ON</span>
                    <a href="{{ url('setup-pin') }}" class="btn btn-secondary" style=display:none;>Reset sini</a>
                </p>
            </div>


        </div>
    </div>

</div>
