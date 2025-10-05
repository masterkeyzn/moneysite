<div class="row my-promo">
    <div class="col-lg-12 col-xs-12">
        <div class="row">
            <div class="col-md-4 noSidePadding">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-warning check_bonus_history_btn" data-toggle="modal" data-target="#BonusHistoryModalCenter" data-backdrop="false">
                    Catatan Bonus                </button>

                <!-- Modal -->
                <div class="modal" id="BonusHistoryModalCenter" tabindex="-1" role="dialog" aria-labelledby="BonusHistoryModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Riwayat Bonus (10 catatan terakhir)</h5>
                                
                            </div>
                            <div class="modal-body">
                                <span class="bonus_history_table"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Menutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Modal -->
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="col-lg-4 col-xs-12">
        <div class="row">
            <div class="col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Bonus saya:</p>
            </div>
            <div class="col-md-8 noSidePadding">
                <p>-</p>
            </div>
        </div>
        <div class="row">
            <div class=" col-xs-6 col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Jenis Bonus:</p>
            </div>
            <div class="col-xs-6 col-md-8 noSidePadding">
                <p>-</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Jumlah Bonus:</p>
            </div>
            <div class="col-xs-6 col-md-8 noSidePadding">
                <p>IDR
                    -</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Target Turnover:</p>
            </div>
            <div class="col-xs-6 col-md-8 noSidePadding">
                <p>
                     - 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Turnover saat ini:</p>
            </div>
            <div class="col-xs-6 col-md-8 noSidePadding">
                <p>
                    IDR
                    -</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 noSidePadding">
                <p class="lbl" i18n="i18n">Bonus Turnover Perputaran:</p>
            </div>
            <div class="col-md-7 noSidePadding">
                 -             </div>

        </div>
    </div>
    <div class="col-lg-4 col-xs-12 ">
        
    </div>

        <div class="col-lg-4 col-xs-12">
        <div class="row">
            <div class="col-xs-2 col-md-2">
                <p class="lbl" i18n="i18n">Terapkan Bonus</p>
            </div>
            <div class="col-xs-6 col-md-6">
                <input type="text" class="form-control input_text" name="bonus_code" id="bonus_code" placeholder="Masukkan Kode Bonus" required="required">
            </div>

            <div class="col-xs-4 col-md-4">
                <button type="button" class="btn btn-sm btn-success check_bonus_btn">Memeriksa</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="p-5">
                <span class="bonus_event_display"></span>
            </div>
        </div>
    </div>
    </div>

<script type="text/javascript">
$(function(){
    $('.check_bonus_btn').click(function () {
        var bonus_code = $('#bonus_code').val();
        var player_id = 2907583;
        $('.bonus_event_display').html("")
        let data = {
            _token: $("meta[name =csrf-token]").attr("content"),
            bonus_code: bonus_code,
            player_id: player_id
        };

        $.post('/checkBonusEvent', data, function (d) {
            switch (d.status) {
                case 1:
                    $('.bonus_event_display').html(d)
                    break;

                case 0:
                    $('.bonus_event_display').html("")
                    alert(d.message)
                    break;
                default:
                    $('.bonus_event_display').html(d)
                    break;
            }
        });

    })

    // check bonus history
    $('.check_bonus_history_btn').click(function(){
      $('.bonus_history_table').html('');
      $.post('/checkBonusHistory', function (d) {
        $('.bonus_history_table').html(d);
      });

    })
});
</script>
