@if ($type == 2)

    <div class="history-table" *ngIf="history">
        <div class="row total-data text-center">

            <div class="col-xs-4 noSidePadding " *ngIf="totalCredit||totalCredit==0">
                <div>
                    <div class="">Total Credit</div>
                    <div>IDR{{ number_format($totalCredit, 2) }}</div>
                </div>
            </div>
            <div class="col-xs-4 noSidePadding " *ngIf="totalDebit||totalDebit==0">
                <div>
                    <div class="">Total Debit</div>
                    <div> IDR{{ number_format($totalDebit, 2) }} </div>
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
            @foreach ($transactions as $transaction)
                <div class="row no-gutters h-result" (click) ="openHistoryDetailsInModal($event,item);"
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

    <script>
        $(document).ready(function() {
            convertToLocalDate();
            $('.st_search').keyup(function() {
                var txt = $(this).val().toLowerCase();
                $('.h-result').each(function() {
                    if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }

                });
            });

        });
    </script>
@else
    <div>Tiada pernyataan bulan ini</div>




    <script>
        $(document).ready(function() {



            $('#totalTO_ST').text('IDR0.00');
            if (0 < 0) {

                $('#totalTO_ST').addClass('debit-amt');
            }
            $('#totalOut_ST').text('IDR0.00');
            if (0 < 0) {

                $('#totalOut_ST').addClass('debit-amt');
            }
            $('#totalWL_ST').text('IDR0.00');
            if (0 < 0) {

                $('#totalWL_ST').addClass('debit-amt');
            }

            $('.st_search').keyup(function() {
                var txt = $(this).val().toLowerCase();
                $('.h-result').each(function() {
                    if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }

                });
            });

        });
    </script>
@endif
