<x-mobile.app>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <div class="container ref_downline">
        <h2 class="title">Referral Downline</h2>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.sitestatic.net/assets/daterangepicker/daterangepicker.css" />
        <form id="searchhistory" class="needs-validation searchhistory ref_downline_srch">
            @csrf
            <div class="box-wrapper plr-15">

                <div class="row d-flex align-items-center">
                    <div class="col-md-3 col-xs-4 ">
                        <div class="">
                            Tanggal </div>
                    </div>
                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                        <input type="text" class="form-control datepicker m-15" name="daterange" />
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-3 col-xs-4  "></div>
                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                        <button type="submit" class="btn btn-primary m-15">Cari Pesan Disini</button>
                    </div>
                </div>
            </div>

        </form>


        <div class="mt-2" id="historySearchResult">
            <div class='table table-responsive'>
                <table class="table table-bordered">
                    @if (Auth::user()->userReferrals()->exists())
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
                            @foreach ($userReferrals as $referral)
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
        </div>
    </div>
    @slot('js')
        <script type="text/javascript" src="https://cdn.sitestatic.net/assets/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.sitestatic.net/assets/daterangepicker/daterangepicker.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <script src="https://cdn.sitestatic.net/assets/jquery-validation/jquery.validate.min.js"></script>
        <script src="https://cdn.sitestatic.net/assets/jquery-validation/additional-methods.min.js"></script>
        <script>
            $(document).ready(function() {

                var start = moment().subtract(0, 'days'),
                    end = moment(),
                    last2 = moment().subtract(2, 'days'),
                    last3 = moment().subtract(3, 'days');

                // $('input[name="daterange"]').daterangepicker({

                // });

                $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                });

                function cb(start, end) {
                    $('.datepicker').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
                }

                $('.datepicker').on('click', function(e) {
                    e.preventDefault();
                    $(this).attr("autocomplete", "off");
                });

                $('.datepicker').daterangepicker({
                    locale: {
                        format: 'YYYY-MM-DD',
                        cancelLabel: 'Clear'
                    },
                    startDate: start,
                    endDate: end,
                    ranges: {
                        "Hari ini": [moment(), moment()],
                        "Kemarin": [moment().subtract(1, 'days').subtract(12, 'hours'), moment().subtract(1,
                            'days').subtract(12, 'hours')],
                        "7 Hari Terakhir": [moment().subtract(6, 'days').subtract(12, 'hours'), moment()
                            .subtract(12, 'hours')
                        ],
                        "30 hari terakhir": [moment().subtract(29, 'days').subtract(12, 'hours'), moment()
                            .subtract(12, 'hours')
                        ],
                        "Bulan ini": [moment().startOf('month'), moment().endOf('month').subtract(12, 'hours')],
                        "Bulan lalu": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month').subtract(12, 'hours')]
                    }
                }, cb);
                cb(start, end);

                $("#searchhistory").validate({
                    rules: {

                        daterange: {
                            required: true,

                        }
                    },
                    // Specify validation error messages
                    messages: {


                        daterange: {
                            required: " tidak boleh kosong",
                        },
                    },
                    errorElement: "em",
                    errorPlacement: function(error, element) {
                        // Add the `help-block` class to the error element
                        error.addClass("help-block mlr-15");

                        // Add `has-feedback` class to the parent div.form-group
                        // in order to add icons to inputs
                        //element.parents(".col-sm-6").addClass("has-feedback");
                        element.addClass("has-feedback");
                        if (element.prop("type") === "checkbox") {
                            error.insertAfter(element.parent("label"));
                        } else {
                            error.insertAfter(element);
                        }

                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if (!element.next("i")[0]) {
                            $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                                .insertAfter(element);
                        }
                    },
                    success: function(label, element) {
                        // Add the span element, if doesn't exists, and apply the icon classes to it.

                        if (!$(element).next("i")[0]) {
                            $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                                .insertAfter($(element));
                        }
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass("has-error").removeClass("has-success");
                        $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).addClass("has-success").removeClass("has-error");
                        $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                    },
                    submitHandler: function(form) {
                        $('#historySearchResult').html('');
                        $('button[type=submit]').prop('disabled', true);
                        $.post('{{ url('getReferalDownline') }}', $('#searchhistory').serialize(),
                            function(data) {
                                $('button[type=submit]').prop('disabled', false);
                                $('button[type=submit]').removeClass("disabled");

                                $('#historySearchResult').html(data);

                            });
                    }
                });
            });
        </script>
    @endslot
</x-mobile.app>
