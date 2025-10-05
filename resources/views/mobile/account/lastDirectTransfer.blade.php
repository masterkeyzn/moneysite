<x-mobile.app>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <style>

    </style>
    <div class="container-wrapper acc">
        <div class="container container-box noSidePadding">
            <div class="head-content">
                <div class="row no-gutters">
                    <div class="col-12">
                        <ng-content select="app-game-bals"></ng-content>
                    </div>
                    <div class="col-12 account_menu">

                        <div class="mdc-tab-bar" role="tablist">
                            <div class="mdc-tab-scroller">
                                <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll mdc-tab-scroller__scroll-x"
                                    style="margin-bottom: 0px;">
                                    <div class="mdc-tab-scroller__scroll-content" style="justify-content:center">
                                        <ul class="list-inline" style="margin-bottom: 0">
                                            <li> <!---->
                                                <div class="deposit-notice-menu">
                                                    <a role="tab" href="{{ url('account/deposit') }}"
                                                        data-active='accountdeposit' class="mdc-tab"
                                                        aria-selected="false" tabindex="-1"
                                                        id="goog_2098347606-FIXED-0">
                                                        <span class="mdc-tab__content">

                                                            <span
                                                                class="mdc-tab__text-label"><!---->Deposit<!----></span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                                        &nbsp;

                                                    </a>

                                                </div>

                                                <!---->
                                            </li>
                                            <li> <a role="tab" href="{{ url('account/withdrawal') }}"
                                                    data-active='accountwithdrawal' class="mdc-tab"
                                                    aria-selected="false" tabindex="0" id="goog_2098347606-FIXED-1">
                                                    <span class="mdc-tab__content">

                                                        <span class="mdc-tab__text-label"><!---->Withdraw<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                                </a><!----></li>
                                            <li><a role="tab" href="{{ url('account/lastDirectTransfer') }}"
                                                    data-active='accountlastdirecttransfer'
                                                    class="mdc-tab mdc-tab--active" aria-selected="false" tabindex="-1"
                                                    id="goog_2098347606-FIXED-3">
                                                    <span class="mdc-tab__content">

                                                        <span class="mdc-tab__text-label"><!---->5
                                                            Transaksi Terakhir<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                </a><!----></li>
                                            <li>
                                                <!----><a role="tab" href="{{ url('account/history') }}"
                                                    data-active='accounthistory' class="mdc-tab" aria-selected="false"
                                                    tabindex="-1" id="goog_2098347606-FIXED-2">
                                                    <span class="mdc-tab__content">

                                                        <span
                                                            class="mdc-tab__text-label"><!---->Pernyataan<!----></span>

                                                    </span>

                                                    <span class="mdc-tab-indicator">
                                                        <span
                                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                            style=""></span>
                                                    </span>

                                                    <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                        style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                </a><!---->
                                            </li>
                                        </ul>




                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row history">
                    <div class="pb-4 pb-md-0 col-md-8">
                        <link rel="stylesheet" type="text/css"
                            href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
                        <div class="history-table">
                            @php
                                $user = Auth::user();

                                $transactions = $user->transactions()->latest()->take(5)->get();

                                $totalDeposit = $transactions
                                    ->where('type', 'Deposit')
                                    ->where('status', 'Approved')
                                    ->sum('amount');

                                $totalWithdrawal = $transactions
                                    ->where('type', 'Withdrawal')
                                    ->where('status', 'Approved')
                                    ->sum('amount');
                            @endphp
                            <div class="row total-data text-center">

                                <div class="col-xs-4 noSidePadding ">
                                    <div>
                                        <div class="">Total Credit</div>
                                        <div>IDR{{ number_format($totalDeposit, 2) }}</div>
                                    </div>
                                </div>
                                <div class="col-xs-4 noSidePadding ">
                                    <div>
                                        <div class="">Total Debit</div>
                                        <div> IDR{{ number_format($totalWithdrawal, 2) }} </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class=" mat-group">
                                        <input type="text" class="mat-control st_search" required="required" />
                                        <label>Saring</label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                @foreach (Auth::user()->transactions()->latest()->take(5)->get() as $transaction)
                                    <div class="row no-gutters h-result"
                                        (click)="openHistoryDetailsInModal($event,item);"
                                        *ngFor="let item of depositHistory">

                                        <div class="col-xs-6 row-head"><span
                                                class="js-date">{{ \Carbon\Carbon::parse($transaction->created_at)->format('Y-m-d | H:i:s') }}
                                            </span></div>
                                        <div class="col-xs-6  text-right">
                                            <span
                                                class="label label-{{ $transaction->status == 'Approved' ? 'success' : ($transaction->status == 'Pending' ? 'warning' : 'danger') }}">
                                                {{ $transaction->status }}
                                            </span>
                                        </div>
                                        <div class="col-xs-6  ">{{ $transaction->type }}</div>
                                        <div class="col-xs-6 text-right">


                                            @if ($transaction->status == 'Rejected')
                                                <strike>IDR {{ number_format($transaction->amount, 2) }}</strike>
                                            @else
                                                IDR {{ number_format($transaction->amount, 2) }}
                                            @endif
                                        </div>
                                        <div class="col-xs-4 row-footer"><small>TransID:
                                                {{ $transaction->transaction_id }}</small>
                                        </div>
                                        <div class="col-xs-8 row-footer text-right"><small>Bank :
                                                {{ $transaction->recipient_bank_name }}</small></div>
                                        <div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-mobile.app>
