<x-desktop.account-app>
    @slot('js')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    @endslot
    <div style="padding-right: 15px;  padding-left: 15px;">
        <div class="row history">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
            <div class="row d-flex flex-column align-items-center">

                <div class="col-md-12 d-flex flex-wrap">
                    <div class="font-weight-bold m-15">
                        <input type="hidden" value="production">
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-wrap table-responsive">
                    @if (!empty(Auth::user()->transactions))
                        <table class="table table-bordered table-hover table-striped table-responsive"
                            id="transaction-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Detail</th>
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
                                @foreach (Auth::user()->transactions()->latest()->take(5)->get() as $transaction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Carbon\Carbon::parse($transaction->created_at)->format('Y-m-d | H:i:s') }}
                                        </td>
                                        <td>
                                            <div>Trx ID: {{ $transaction->transaction_id }}</div>
                                            <div>Jenis Transaksi: {{ $transaction->type }}</div>
                                            <div>Bank: {{ $transaction->recipient_bank_name }}</div>
                                        </td>
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
                                                    @if ($transaction->status == 'Approved')
                                                        @php $totalDebit += $transaction->amount; @endphp
                                                    @endif
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if ($transaction->type == 'Deposit')
                                                @if ($transaction->status == 'Rejected')
                                                    <strike>IDR {{ number_format($transaction->amount, 2) }}</strike>
                                                @else
                                                    IDR {{ number_format($transaction->amount, 2) }}
                                                    @if ($transaction->status == 'Approved')
                                                        @php $totalKredit += $transaction->amount; @endphp
                                                    @endif
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4"></th>
                                    <th>Jumlah</th>
                                    <td>
                                        IDR {{ number_format($totalDebit, 2) }}
                                    </td>
                                    <td>
                                        IDR {{ number_format($totalKredit, 2) }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    @else
                        <table
                            class="table table-bordered table-hover toggle-circle dataTable no-footer table-striped table-responsive"
                            role="grid" aria-describedby="historyDataTable_info" id="transaction-table">
                            <thead>
                                <tr>
                                    <th> Tidak ada catatan. </th>
                                </tr>
                            </thead>

                        </table>
                    @endif
                </div>
            </div>

            <script>
                $(function() {
                    $('#transaction-table').DataTable({
                        responsive: true,
                        paging: false,
                        language: {
                            search: "",
                            "lengthMenu": "Menampilkan _MENU_ entri",
                            "sSearch": "Cari Pesan Disini",
                            "sEmptyTable": "No records available",
                            "sInfoEmpty": "Tampilkan 0 hingga 0 dari 0 entri",
                            "sInfo": "Menampilkan _START_ hingga _END_ dari _TOTAL_ item",
                            "sInfoFiltered": "(disaring dari _MAX_ total entri)",
                            //   "oPaginate": {
                            //       "sFirst":     "Pertama",
                            //       "sLast":      "Terakhir",
                            //       "sNext":     "Lanjut",
                            //       "sPrevious":  "Sebelumnya"
                            //   },
                        }
                    })
                });
            </script>


        </div>
    </div>
    @slot('js2')
        <script type="text/javascript" src="https://cdn.sitestatic.net/assets/daterangepicker/moment.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
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
    @endslot
</x-desktop.account-app>
