<div class="box-title">
    <i class="icon-invoice i-invoice"></i>
    Rincian Deposit Akun
    <div class="pull-right acc_status">STATUS : <span class="text-success">ONLINE</span>
    </div>
    <input type="hidden" id="depo_acc_status" value="ONLINE">
</div>
<table class="table table-borderless   text-right info-box--001">
    @if ($bankdeposit->show_form == 'showQris')
        <tr class="text-left first">
            <td class="col-xs-12 col-md-6 text-center h4 " colspan="2">
                <b>{{ $bankdeposit->account_name }}</b>
            </td>
        </tr>
        <tr class=" ">
            <td class="col-xs-12 col-md-6" colspan="2" style="padding-bottom: 10px; text-align: center">
                <img src="{{ $bankdeposit->qris_img }}" alt="QRIS" width="200" height="200" />
            </td>
        </tr>
    @else
        <tr class="text-left first">
            <td class="col-xs-12 col-md-6 " colspan="2">
                <small>
                    Nama Akun bank </small>
            </td>
        </tr>
        <tr class="">
            <td class="col-xs-12 col-md-6 " colspan="2">
                <input id="BHkle5J1" value="{{ $bankdeposit->account_name }}" class="copy-input" />


                <a href="javascript:void(0);" data-sel="BHkle5J1" class="btn btn-link lbl btn-copy">
                    <span class=" ">
                        {{ $bankdeposit->account_name }}
                    </span>
                    <i class="icon-copy"></i>
                </a>
                <div class="btn btn-link btn-copy lbl" style="display: none;"></div>
                <div class="btn btn-link btn-copy lbl" style="display: none;"></div>
            </td>
        </tr>
        <tr class="text-left first">
            <td class="col-xs-12 col-md-6 " colspan="2">
                <small>
                    Rekening Bank No </small>
            </td>
        </tr>
        <tr>
            <td class="col-xs-12 col-md-6" colspan="2" style="padding-bottom: 10px;">
                <input id="hHiF549N1h" value="{{ $bankdeposit->account_number }}" class="copy-input" />
                <a href="javascript:void(0);" data-sel="hHiF549N1h" class="btn btn-link btn-copy lbl">
                    <span class=" " style="white-space: normal; word-break: break-word;">
                        {{ $bankdeposit->account_number }}
                    </span>
                    <i class="icon-copy"></i>
                </a>
                <div class="btn btn-link btn-copy lbl" style="display: none;"></div>
                <div class="btn btn-link btn-copy lbl" style="display: none;"></div>
            </td>
        </tr>
    @endif
    <tr class="text-left tr_type2  ">
        <td class="col-xs-6 col-md-6"> <small>Min Deposit</small> </td>
        <td class="col-xs-6 col-md-6 text-right">


            <span class="lbl">
                IDR{{ number_format($bankdeposit->min_deposit ?? $siteConfig->min_deposit, 2) }}
            </span>
            <input type="hidden" id="bank_min_deposit" class="min_deposit"
                value="{{ $bankdeposit->min_deposit ?? $siteConfig->min_deposit }}">
        </td>
    </tr>

    <tr class="text-left tr_type2">
        <td class="col-xs-6 col-md-6 "> <small i18n>Max Deposit</small></td>
        <td class="col-xs-6 col-md-6 text-right ">
            <span class="lbl">
                IDR{{ number_format($bankdeposit->max_deposit ?? $siteConfig->max_deposit, 2) }}
            </span>
            <input type="hidden" id="bank_max_deposit" class="max_deposit"
                value="{{ $bankdeposit->max_deposit ?? $siteConfig->max_deposit }}">
        </td>
    </tr>

    <tr class="text-left tr_type2  ">
        <td class="col-xs-6  col-md-6 "> <small i18n>Komisi Bank / Transaksi</small></td>
        <td class="col-xs-6 col-md-6 text-right">

            <span class="lbl">
                {{ $bankdeposit->unique_code ?? $siteConfig->unique_code }}
            </span>
        </td>
    </tr>

    <tr class="text-left tr_type2  ">
        <td class="col-xs-6  col-md-6 "> <small i18n>Subsidi Bank / Transaksi</small></td>
        <td class="col-xs-6 col-md-6 text-right">

            <span class="lbl">
                None

            </span>
        </td>
    </tr>

</table>

<script>
    $(document).ready(function() {

        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
