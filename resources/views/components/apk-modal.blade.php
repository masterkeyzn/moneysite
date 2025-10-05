<!-- APK download ||Transfer Wallet  modal start-->
<div class="nifty-modal slide-in-bottom downloadapk-modal" id="apk-modal">
    <div class="md-content">
        <div class="modal-header">
            <button class="pull-right md-close"><i class="icon-x fs-lg"></i></button>
            <h3 id="downloadgame-title"></h3>
        </div>
        <div class="md-body">
            <!--region Transfer Wallet Menu -->
            <div class="row no-gutters" id="trans_to_game_menu__game-modal">
                <form action="" method="post" id="tw_transfer_form" class="tw_transfer_form">
                    <input type="hidden" name="_token" value="BiWdtVTlw5CCUcjba5HQTEFCTAlNSqCgzcsaBSEb">
                    <div class="form-group">
                        <label for="mainwallet_amount">From Main Wallet</label>
                        <input type="text" class="form-control" readonly name="mainwallet_amount"
                            id="mainwallet_amount" value="" />

                    </div>
                    <div class="text-center">
                        <span class="vertical"><i class="icon-arrow-long-right"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="mainwallet_amount">Transfer to <span id="gamename"></span>
                                Wallet</label>
                            <div class="form-group">

                                <div class="customrange-slider">
                                    <div id="slider" overflow-scroll="false"
                                        class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                            style="width: 0%;"></div>
                                    </div>
                                    <div class="decrease-btn cusbtn">
                                        <div id="tw_decrease_btn"> <span class="minus-icon custom-icon">-</span>
                                        </div>

                                        <div class="minmax-label">Min</div>
                                        <div class="minmax-value">
                                            5
                                        </div>
                                    </div>
                                    <div class="increase-btn cusbtn">
                                        <div id="tw_increase_btn">
                                            <span class="plus-icon custom-icon">+</span>
                                        </div>

                                        <div class="minmax-label">Max</div>
                                        <div class="minmax-value" id="maxSliderApk"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                <div class="form-group">
                                    <input type="text" readonly class="form-control" name="transfer_amount"
                                        id="transfer_amount"  value="00.00" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="SUBMIT" />
                    </div>
                </form>
            </div>

            <div class="row no-gutters">
                <div class="col-xs-12 text-center">
                    <a href="#" id="launchurl" class="url-link" target="_blank">
                        <img class="img-fluid lazy" src =""
                            data-src="{{ asset('assets/images/log_html5.png') }}" alt="play-in-browser">
                        <div class="download-caption text-center">
                            Play now in your browser
                        </div>
                        <div class="download-linkbtn text-center">
                            <img class="img-fluid lazy" src =""
                                data-src="{{ asset('assets/images/btn_playnow.png') }}"
                                alt="play-now-in-browser">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="md-overlay"></div>
<!-- APK download modal end-->