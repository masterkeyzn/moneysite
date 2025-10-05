@if (!empty($transactions))
    <div class="table-responsive pb-3  scroller ">
        <table class="table table-bordered table-hover toggle-circle dataTable no-footer table-striped" role="grid"
            aria-describedby="historyDataTable_info" id="transaction-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal Transaksi</th>
                    <th>Trx ID</th>
                    <th>Jenis Transaksi</th>
                    <th>Bank</th>
                    <th>Status</th>
                    <th>Alasannya</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalDebit = 0;
                    $totalKredit = 0;
                @endphp
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><span>{{ \Carbon\Carbon::parse($transaction->created_at)->format('Y-m-d | H:i:s') }}</span>
                        </td>
                        <td>{{ $transaction->transaction_id }}</td>
                        <td>{{ $transaction->type }}</td>
                        <td>{{ $transaction->recipient_bank_name }}</td>
                        <td>
                            <span
                                class="label label-{{ $transaction->status == 'Approved' ? 'success' : ($transaction->status == 'Pending' ? 'warning' : 'danger') }}">
                                {{ $transaction->status }}
                            </span>
                        </td>
                        <td>{{ $transaction->note }}</td>
                        <td>
                            @if ($transaction->type == 'Withdrawal')
                                @if ($transaction->status == 'Rejected')
                                    <strike>IDR {{ number_format($transaction->amount, 2) }}</strike>
                                @else
                                    IDR {{ number_format($transaction->amount, 2) }}
                                    @php $totalDebit += $transaction->amount; @endphp
                                @endif
                            @endif
                        </td>
                        <td>
                            @if ($transaction->type == 'Deposit')
                                @if ($transaction->status == 'Rejected')
                                    <strike>IDR {{ number_format($transaction->amount, 2) }}</strike>
                                @else
                                    IDR {{ number_format($transaction->amount, 2) }}
                                    @php $totalKredit += $transaction->amount; @endphp
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="6"></th>
                    <th>Total</th>
                    <td>IDR {{ number_format($totalDebit, 2) }}</td>
                    <td>IDR {{ number_format($totalKredit, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script>
        $(function() {
            convertToLocalDate();
            $('#transaction-table').DataTable({
                responsive: true,
                language: {
                    search: "",
                    "lengthMenu": "Menampilkan _MENU_ entri",
                    "sSearch": "Cari Pesan Disini",
                    "sEmptyTable": "No records available",
                    "sInfoEmpty": "Tampilkan 0 hingga 0 dari 0 entri",
                    "sInfo": "Menampilkan _START_ hingga _END_ dari _TOTAL_ item",
                    "sInfoFiltered": "(disaring dari _MAX_ total entri)",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sLast": "Terakhir",
                        "sNext": "Lanjut",
                        "sPrevious": "Sebelumnya"
                    },
                }
            });
        });

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
    </script>
@else
    <div class="table-responsive">
        <table class="dt table table-bordered text-center medium">
            <thead>
                <tr>
                    <th> Tidak ada catatan. </th>
                </tr>
            </thead>
        </table>
    </div>
    <script>
        $(function() {
            $('table.dt').DataTable({
                language: {
                    search: "",
                    "lengthMenu": "Menampilkan _MENU_ entri",
                    "sSearch": "Cari Pesan Disini",
                    "sEmptyTable": "No records available",
                    "sInfoEmpty": "Tampilkan 0 hingga 0 dari 0 entri",
                    "sInfo": "Menampilkan _START_ hingga _END_ dari _TOTAL_ item",
                    "sInfoFiltered": "(disaring dari _MAX_ total entri)",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sLast": "Terakhir",
                        "sNext": "Lanjut",
                        "sPrevious": "Sebelumnya"
                    },
                }
            })
        });
    </script>
@endif
