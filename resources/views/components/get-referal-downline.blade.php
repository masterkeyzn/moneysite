<div class='table table-responsive'>
    <table class="table table-bordered">
        @if ($referralDownline)
            <thead>
                <tr>
                    <th> No.</th>
                    <th> Nama pengguna</th>
                    <th> Tanggal Bergabung </th>
                    <th> Tanggal Terakhir Login </th>
                    <th> Tanggal Setoran Pertama </th>
                    <th> Tanggal Terakhir Deposit </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($referralDownline as $referral)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $referral->user->username }}</td>
                        <td>{{ $referral->created_at }}</td>
                        <td>{{ $referral->updated_at }}</td>
                        <td>
                            {{ $referral->user->transactions()->where('type', 'Deposit')->where('status', 'Approved')->min('created_at') ?? '' }}
                        </td>
                        <td>
                            {{ $referral->user->transactions()->where('type', 'Deposit')->where('status', 'Approved')->max('created_at') ?? '' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <thead>
                <tr>
                    <th> Tidak punya Referral bulan ini. </th>
                </tr>
            </thead>
        @endif
    </table>
</div>
<script>
    $(function() {
        $('#referral-table').DataTable({
            scrollX: true,
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
            },
            'fnDrawCallback': function(oSettings) {
                $('.dataTables_filter').append('<i class="icon-search search_icon"></i>');
            },
            responsive: true,
        });
    });
</script>
