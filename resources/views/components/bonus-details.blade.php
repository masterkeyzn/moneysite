<div class="box-title">
    <i class="icon-invoice i-invoice"></i>
    Rincian Promosi

    <button class="btn btn-click pull-right" id="btn-clear-all-promo">CLEAR PROMO</button>
</div>
<table class="table table-borderless    text-right info-box--001">
    <tr class="text-left tr_type2">

        <td class="text-center" colspan="2">
            <span class="" style="font-weight: 700;  text-decoration:underline;"> {{ $bonus->name }} </span>
        </td>
    </tr>
    <tr class="text-left first">
        <td class="col-xs-12 col-md-6 " colspan="2">


            <small i18n>Jenis Bonus </small>
        </td>

    </tr>
    <tr class=" ">

        <td class="col-xs-12 col-md-6 " colspan="2">

            <span class="lbl" style="display:inline-block">

                {{ $bonus->description }} </span>
        </td>

    </tr>
    <tr class="text-left tr_type2">
        <td class="col-xs-6 col-md-6"> <small i18n>Min Deposit </small></td>
        <td class="col-xs-6 col-md-6 text-right ">
            <span class="lbl"> IDR{{ number_format($bonus->min_deposit, 2) }} </span>
            <input type="hidden" class="promo" id="promo_min_amount" name="promo_min_amount" value="{{ $bonus->min_deposit }}">

        </td>
    </tr>
    <tr class=" ">

    </tr>


    <tr class=" ">


    </tr>
</table>
