<x-desktop.profile-app>
    <div class="outlet tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="container-b3">
                <link rel="stylesheet" type="text/css"
                    href="{{ asset('css/'. $siteConfig->themes .'/member_level.css?v=0.61') }}" />

                <div class="member-level">
                    <div class="row profile-detail">
                        <div class="col-lg-8 col-sm-11 col-xs-12 profile-detail-row">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 col-xs-5 noSidePadding">Nama pengguna:
                                </div>
                                <div>{{ Auth::user()->username }}</div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-11 col-xs-12 profile-detail-row">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 col-xs-5 noSidePadding">Tingkat saat
                                    ini:</div>
                                <span class="level-title New">Baru tingkat anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="level-progress-bar col-lg-5 col-sm-5 col-xs-11 flex noSidePadding">
                            <div class=""><span class="level-title New">Baru</span></div>
                            <div class="progress col-lg-8 col-sm-8 col-xs-6 noSidePadding">
                                <div class="progress-bar progress-bar-striped New"
                                    role="progressbar" aria-valuenow="0.00" aria-valuemin="0"
                                    aria-valuemax="100" style="width:0.00%;display:inline-block">
                                </div>
                            </div>
                            <div class=""><span class="level-title Regular">Reguler</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-sm-7 col-xs-12">
                            <div class="row border-btm">
                                <div class="col-lg-5 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                        0</div>
                                    <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Jumlah Deposit Saat Ini</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-5 col-sm-5 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                        1</div>
                                    <div class="col-lg-7 col-sm-7 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Jumlah Deposit yang Diperlukan
                                            untuk Level Selanjutnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-xs-12">
                            <div class="row border-btm">
                                <div class="col-lg-5 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                        0</div>
                                    <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Turnover saat ini</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-5 col-sm-5 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                        0</div>
                                    <div class="col-lg-7 col-sm-7 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Jumlah Turnover yang Diperlukan
                                            untuk Level Selanjutnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-xs-12">
                            <div class="row border-btm">
                                <div class="col-lg-5 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                        2024-09-08</div>
                                    <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Tanggal mulai ditingkatkan</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-6 noSidePadding">
                                    <div
                                        class="col-lg-5 col-sm-5 col-xs-12 noSidePadding fl-right txt-bold txt-highlight">
                                    </div>
                                    <div class="col-lg-7 col-sm-7 col-xs-12 noSidePadding grey1">
                                        <div class="progress-label">Level Kedaluwarsa Jika tidak aktif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row black-bg-box">
                        <div class="row flex">
                            <div class="col-lg-3 col-sm-4 col-xs-12 level-outer-box">
                                <div class="col-lg-12 col-sm-12 col-xs-3 noSidePadding level-box">
                                    <a href="javascript:void(0);" onclick="chg_level(0)">
                                        <div
                                            class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold level-name">
                                            Reguler</div>
                                        <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding">
                                            <img src="https://files.sitestatic.net/assets/imgs/member_level_Regular.png"
                                                width="65" height="65"
                                                class="img-fluid center-block level-logo">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-xs-3 noSidePadding level-box">
                                    <a href="javascript:void(0);" onclick="chg_level(1)">
                                        <div
                                            class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold level-name">
                                            Perak</div>
                                        <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding">
                                            <img src="https://files.sitestatic.net/assets/imgs/member_level_Silver.png"
                                                width="65" height="65"
                                                class="img-fluid center-block level-logo">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-xs-3 noSidePadding level-box">
                                    <a href="javascript:void(0);" onclick="chg_level(2)">
                                        <div
                                            class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold level-name">
                                            Emas</div>
                                        <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding">
                                            <img src="https://files.sitestatic.net/assets/imgs/member_level_Gold.png"
                                                width="65" height="65"
                                                class="img-fluid center-block level-logo">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-xs-3 noSidePadding level-box">
                                    <a href="javascript:void(0);" onclick="chg_level(3)">
                                        <div
                                            class="col-lg-7 col-sm-7 col-xs-12 noSidePadding fl-right txt-bold level-name">
                                            Platinum</div>
                                        <div class="col-lg-5 col-sm-5 col-xs-12 noSidePadding">
                                            <img src="https://files.sitestatic.net/assets/imgs/member_level_Platinum.png"
                                                width="65" height="65"
                                                class="img-fluid center-block level-logo">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-8 col-xs-12 level-desc-box">
                                <div class="col-xs-7 ">
                                    <div class="row">
                                        <div class="col-xs-12 level-title-box noSidePadding">
                                            <span class="level-title Regular"
                                                id="box_level_name">Reguler tingkat anggota</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7 col-xs-12 noSidePadding grey2">
                                            <p class="_label level-desc-label progress-label" i18n>
                                                Akumulasi Deposit yang Diperlukan</p>
                                        </div>
                                        <div
                                            class="col-lg-5 col-xs-12 noSidePadding grey3 txt-highlight">
                                            <p id="box_req_depo">1</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7 col-xs-12 noSidePadding grey2">
                                            <p class="_label level-desc-label progress-label" i18n>
                                                Akumulasi Turnover yang Diperlukan</p>
                                        </div>
                                        <div
                                            class="col-lg-5 col-xs-12 noSidePadding grey3 txt-highlight">
                                            <p id="box_req_bet">0</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 ">
                                    <img src="https://files.sitestatic.net/assets/imgs/medal_Regular.png?v=0.1"
                                        class="img-fluid center-block" id="medal_img">
                                    <div class="level-id" id="box_level_id">2</div>
                                </div>
                                <div class="col-xs-12 validity grey2">
                                    Jika dalam <span id="box_validity">2 Tahun</span> tidak melakukan
                                    transaksi deposit / Permainan, maka level akan diturunkan secara
                                    otomatis </div>
                            </div>
                        </div>
                    </div>
                    <div class="row black-bg-box">
                        <div class="row">
                            <!-- <div class="col-xs-3 "> <p class="_label" i18n>Nama pengguna :</p> </div> -->
                            <div class="col-xs-12 ">
                                <p class="gold-title"><span id="exclusive_text">Reguler</span>
                                    Eksklusif</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-xs-6">
                                <p><img src="https://files.sitestatic.net/assets/imgs/rebate_rate.png"
                                        class="img-fluid center-block"></p>
                                <p class="txt-center">Tingkat rebate yang lebih tinggi</p>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <p><img src="https://files.sitestatic.net/assets/imgs/gold_level.png"
                                        class="img-fluid center-block"></p>
                                <p class="txt-center">Buka <span id="unlock_text">Reguler</span>
                                    tingkat Promosi/Bonus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var level_settings = [{
                        "levelid": 2,
                        "level_name": "Regular",
                        "deposit": "1",
                        "real_bet": "0",
                        "validity": "4",
                        "validity_desc": "24"
                    }, {
                        "levelid": 3,
                        "level_name": "Silver",
                        "deposit": "50,000,000",
                        "real_bet": "250,000,000",
                        "validity": "5",
                        "validity_desc": "1"
                    }, {
                        "levelid": 4,
                        "level_name": "Gold",
                        "deposit": "150,000,000",
                        "real_bet": "500,000,000",
                        "validity": "5",
                        "validity_desc": "1"
                    }, {
                        "levelid": 5,
                        "level_name": "Platinum",
                        "deposit": "250,000,000",
                        "real_bet": "1,000,000,000",
                        "validity": "5",
                        "validity_desc": "1"
                    }];

                    function chg_level(level_id, current_level_name) {
                        if (typeof level_settings[level_id] !== "undefined") {

                            $("#box_level_id").text(level_settings[level_id]['levelid']);
                            $("#box_level_name").text(level_settings[level_id]['level_name'] + ' member level');
                            $("#box_req_depo").text(level_settings[level_id]['deposit']);
                            $("#box_req_bet").text(level_settings[level_id]['real_bet']);
                            $("#box_validity").text(level_settings[level_id]['validity_desc']);
                            $("#exclusive_text").text(level_settings[level_id]['level_name']);
                            $("#unlock_text").text(level_settings[level_id]['level_name']);
                            $("#medal_img").attr("src", "https://files.sitestatic.net/assets/imgs/medal_" + level_settings[level_id][
                                'level_name'
                            ] + ".png?v=0.1");


                            $("#box_level_name").removeClass().addClass(level_settings[level_id]['level_name'] + " level-title");
                        }
                    }
                </script>
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