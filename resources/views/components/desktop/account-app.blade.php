<x-desktop.app>
    <div class="content my01">
        @isset($js)
            {{ $js }}
        @endisset
        <style>

        </style>
        <div class="container-wrapper acc">

            <div class="container container-box">
                <div class="row">
                    <div class="col-md-8">
                        <div class="box-wrapper">
                            <div class="title" style="padding: 5px 0">
                                <div class="d-inline-block" style="padding-left:15px" i18n>Keamanan Akun: Normal
                                </div>
                                <div class="d-inline-block text-right" style="float:right;padding-right:15px">Anda
                                    memiliki <span class="txt_mail_cnt">0</span> pesan baru yang belum dibaca dari
                                    kami.</div>
                            </div>

                            <div class="mdc-wrapper">
                                <a href="{{ url('account/deposit') }}" class="mdc-items {{ request()->is('account/deposit') ? 'active' : '' }}">Deposit</a>
                                <a href="{{ url('account/withdrawal') }}" class="mdc-items {{ request()->is('account/withdrawal') ? 'active' : '' }}">Withdraw</a>
                                <a href="{{ url('account/lastDirectTransfer') }}" class="mdc-items {{ request()->is('account/lastDirectTransfer') ? 'active' : '' }}">5
                                    Transaksi Terakhir </a>
                                <a href="{{ url('account/history') }}" class="mdc-items {{ request()->is('account/history') ? 'active' : '' }}">Pernyataan</a>

                            </div>
                        </div>

                        {{ $slot }}

                        <div class="modal-wrapper nifty-modal slide-in-bottom add_bank_modal" id="regbank_popup__depo">
                        </div>

                        <div class='md-overlay'></div>
                    </div>
                    <div class="col-md-4">
                        <div class="acc_safety_info box-wrapper">
                            <div class="info-2">
                                <i class="icon-shield"></i>
                                <a routerLink="{{ url('profile/edit') }}"><i class="icon-user1"></i></a>
                                <a href="#"><i class="icon-credit-card-alt"></i></a>
                                <a href="#"><i class="icon-mobile1"></i></a>
                                <a href="{{ url('memo') }}" class="mail_link">
                                    <i class="icon-envelope"></i>
                                    <div class="mail_icon" style="display:none;">
                                        0
                                    </div>
                                </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                window.getAllGameBal();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($js2)
        @slot('js')
            {{ $js2 }}
        @endslot
    @endisset
</x-desktop.app>
