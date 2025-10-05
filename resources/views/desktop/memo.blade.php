<x-desktop.app>
    <div class="content my01">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <div class="container-wrapper profile-head memo">
            <div class="container container-box noSidePadding">
                <div class="title fs-lg clearfix">
                    <span>MEMO</span>
                </div>
                <div class="head-content">
                    <div class="memo_page">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 memo_tab">
                                    <button type="button" class="btn btn-secondary btn_top_memo"
                                        style="display: none;">Tulis Memo</button>

                                    <div class="mdc-tab-bar" role="tablist">
                                        <div class="mdc-tab-scroller">
                                            <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll mdc-tab-scroller__scroll-x"
                                                style="margin-bottom: 0px;">
                                                <div class="mdc-tab-scroller__scroll-content nav nav-tabs">
                                                    <!---->
                                                    <a role="tab" mode='1' data-toggle="tab"
                                                        href="#kotak" class="mdc-tab mdc-tab--active"
                                                        aria-selected="false">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label"><!---->KOTAK
                                                                MASUK<!----> (<span class="hot">0</span>)</span>


                                                        </span>

                                                        <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                                            <span
                                                                class="mdc-tab-indicator__content  mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                                    </a>
                                                    <!---->
                                                    <a mode='2' role="tab" data-toggle="tab"
                                                        href="#terkirim" class="mdc-tab" style="display:none;"
                                                        aria-selected="false">
                                                        <span class="mdc-tab__content">

                                                            <span
                                                                class="mdc-tab__text-label"><!---->KIRIM<!----></span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                                    </a>
                                                    <!---->
                                                    <a mode='0' role="tab" data-toggle="tab"
                                                        href="#memo" class="mdc-tab" aria-selected="false">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label"><!---->PENGUMUMAN<!---->
                                                                (<span class="announce_msg_count hot">0</span>)</span>


                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div id="kotak" class="tab-pane fade in active">

                                            <table id="kotak_table" class="display dataTable" cellspacing="0"
                                                width="100%">
                                                <col width='3%'>
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <label class="check_container con_chckbox">
                                                                    <input type="checkbox">
                                                                    <span class="checkmark checkmarking"></span>
                                                                </label>
                                                            </div>
                                                            <!-- <input type="checkbox"> -->
                                                        </th>
                                                        <th><span class="memo_select"> Pilih Semua </span>
                                                            <button type="button" style="margin-left:8px;"
                                                                class="btn btn-primary btn_memo"
                                                                onclick="check_status('delete')"><i
                                                                    class="icon-bin"></i>HAPUS</button>
                                                            <button type="button"
                                                                class="btn btn-secondary btn_memo"
                                                                onclick="check_status('read')"><i
                                                                    class="icon-checkmark"></i>TANDA BACA</button>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="terkirim" class="tab-pane fade">
                                            <div class="button_table">
                                                <button type="button" class="btn btn-primary btn_memo"
                                                    onclick="check_status('delete')"><i
                                                        class="icon-bin"></i>HAPUS</button>
                                                <button type="button" class="btn btn-secondary btn_memo"
                                                    onclick="check_status('read')"><i
                                                        class="icon-checkmark"></i>TANDA BACA</button>
                                            </div>
                                            <table id="terkirim_table" class="display dataTable" cellspacing="0"
                                                width="100%">
                                                <col width='3%'>
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <label class="check_container con_chckbox">
                                                                    <input type="checkbox">
                                                                    <span class="checkmark checkmarking"></span>
                                                                </label>
                                                            </div>
                                                            <!-- <input type="checkbox"> -->
                                                        </th>
                                                        <th>
                                                            <h5 class="memo_select"> Pilih Semua </h5>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="memo" class="tab-pane fade">

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="accordion">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TULIS MEMO BARU  on click to show -->
                                <div class="col-sm-12 tulis_memo">
                                    <div class="tulis_memo_bg">
                                        <h3 class="memo_content_title">TULIS MEMO BARU</h3>
                                        <form method="post" id='new_memo' enctype="multipart/form-data"
                                            action="{{ url('add-memo') }}">
                                            <input type="hidden" name="_token"
                                                value="XF5UKwiNGm7LPAtSicJREuHbpvIQKZwBbN2ZHEOp">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>KIRIM KE ADMIN</label>
                                                            <select class="form-control" name='topic'>
                                                                <option value="" selected>Pilih Topik</option>
                                                                <option value="general problem">Masalah Umum</option>
                                                                <option value="general problem">Masalah Umum</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                            <label>JUDUL</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="JUDUL" autofocus name="subject" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="wrapper">
                                                            <label>PESAN</label>
                                                            <div class="options">
                                                                <input class="editor_font" type="number"
                                                                    onChange="return transform('fontSize', this.value)"
                                                                    value="3" max="7"
                                                                    min="1"></input>
                                                                <button onClick="return transform('bold', null)">
                                                                    <i class="fas fa-bold"></i>
                                                                </button>
                                                                <button onClick="return transform('italic', null)">
                                                                    <i class="fas fa-italic"></i>
                                                                </button>
                                                                <button onClick="return transform('underline', null)">
                                                                    <i class="fas fa-underline"></i>
                                                                </button>
                                                                <button
                                                                    onClick="return transform('justifyLeft', null)">
                                                                    <i class="fas fa-align-left"></i>
                                                                </button>
                                                                <button
                                                                    onClick="return transform('justifyCenter', null)">
                                                                    <i class="fas fa-align-center"></i>
                                                                </button>
                                                                <button
                                                                    onClick="return transform('justifyRight', null)">
                                                                    <i class="fas fa-align-right"></i>
                                                                </button>
                                                                <button
                                                                    onClick="return transform('insertOrderedList', null)">
                                                                    <i class="fas fa-list-ol"></i>
                                                                </button>
                                                                <button
                                                                    onClick="return transform('insertUnorderedList', null)">
                                                                    <i class="fas fa-list-ul"></i>
                                                                </button>
                                                            </div>
                                                            <iframe name="editor" id="editor"></iframe>

                                                            <input type="hidden" id="content_body"
                                                                name="content[body]">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label for="myfile">LAMPIRKAN FILE</label>
                                                        <div class="fileUpload">
                                                            <label for="file-upload">PILIH FILE<input type="file"
                                                                    multiple id="file-upload"
                                                                    name='attachments[]'></label>
                                                            <span id="filename">TIDAK ADA FILE TERPILIH</span>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 form_button">
                                                        <button type="button"
                                                            class="btn btn-primary">BATAL</button>
                                                        <button type="submit"
                                                            class="btn btn-secondary">KIRIM</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name='mode' id='mode' value="1">
                </div>
            </div>
        </div>
    </div>
    @slot('js')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
    <script>
        editor.document.designMode = "On";
        document.getElementById("editor").contentDocument.body.style.fontFamily = 'sans-serif';
        document.getElementById("editor").contentDocument.body.style.color = '#fff';

        function transform(option, argument) {
            editor.document.execCommand(option, false, argument);
            return false;
        }

        $(document).ready(function() {

            $('.mdc-tab').click(function() {
                $('.mdc-tab').removeClass('mdc-tab--active');
                $('.mdc-tab-indicator').removeClass('mdc-tab-indicator--active');
                $(this).addClass('mdc-tab--active');
                $(this).find('.mdc-tab-indicator').addClass('mdc-tab-indicator--active');
            });

            //file upload
            $('#file-upload').change(function() {
                var filepath = this.value;
                var m = filepath.match(/([^\/\\]+)$/);
                var filename = m[1];
                $('#filename').text(filename);
            });

            //onclick table show more content
            $("#kotak_table .box,#terkirim_table .box").on('click', function() {
                $("#kotak_table .box,#terkirim_table .box").find('.memo_top_paragraph').addClass(
                'add_hide');
                $("#kotak_table .box,#terkirim_table .box").find('.memo_top_paragraph').removeClass(
                    'rm_hide');
                $("#kotak_table .box,#terkirim_table .box").find('.memo_attachments, .button_table_inner')
                    .hide();
                $("#kotak_table .box,#terkirim_table .box").find('.overlay').addClass('hidden');
                $(this).find('.overlay').toggleClass('hidden');

                $(this).find('.memo_top_paragraph').toggleClass('add_hide');
                $(this).find('.memo_top_paragraph').toggleClass('rm_hide');
                $(this).find('.memo_attachments, .button_table_inner').toggle();

            });

            //onclick to tulis memo button show / hide tabs
            $(".btn_top_memo ,  #reply_mail_btn").click(function() {
                $(".memo_tab li,.tab-pane").removeClass("active");
                $(".tulis_memo").addClass("active");
            });

            $(".memo_tab li").click(function() {
                $(".tulis_memo").removeClass("active");
            });
            $('.btn_action_get_auto').click(function() {
                $(this).prop('disabled', true);
                var self = this;
                var data = {
                    id: $(this).data('id')
                }
                json_post("{{ url('ajaxgetsysmemo') }}", data).done(function(d) {
                    $(self).prop('disabled', false);
                    Swal.fire("Warning", d.m, "success").then(function() {
                        location.reload();
                    });
                }).fail(function() {
                    $(self).prop('disabled', false);
                    return false;
                });
            });

            var table = $('#kotak_table,#terkirim_table').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: -1,
                    }
                },
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: true,
                    className: 'control',
                }, {
                    targets: 0,
                    orderable: false,
                    searchable: false,
                    className: 'selectall-checkbox',
                }],
                // select: {
                //     style: 'multi',
                //     selector: 'td:first-child',
                // },
                order: [1, 'asc'],

                language: {
                    search: "",
                    searchPlaceholder: "Cari Pesan Disini",
                    "lengthMenu": "Menampilkan _MENU_ entri",
                    //  "sSearch" : "Cari Pesan Disini",
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

                "ordering": false,
                "info": false,
                "bLengthChange": false,
                "pagingType": "full_numbers",
                'fnDrawCallback': function(oSettings) {
                    $('.dataTables_filter').append('<i class="icon icon-search"></i>');
                }
            });


            // On DataTables select / deselect event check / uncheck all checkboxes. And deal with the checkbox
            // in the thead (check or uncheck).
            table.on('select.dt deselect.dt', function(e, dt, type, indexes) {
                var countSelectedRows = table.rows({
                    selected: true
                }).count();
                var countItems = table.rows().count();

                if (countItems > 0) {
                    if (countSelectedRows == countItems) {
                        $('thead .selectall-checkbox input[type="checkbox"]', this).prop('checked', true);
                    } else {
                        $('thead .selectall-checkbox input[type="checkbox"]', this).prop('checked', false);
                    }
                }

                if (e.type === 'select') {
                    $('.selectall-checkbox input[type="checkbox"]', table.rows({
                        selected: true
                    }).nodes()).prop('checked', true);
                } else {
                    $('.selectall-checkbox input[type="checkbox"]', table.rows({
                        selected: false
                    }).nodes()).prop('checked', false);
                }
            });



            // When clicking on the checkbox in "thead .selectall-checkbox", define the actions.
            table.on('click', 'thead .selectall-checkbox input[type="checkbox"]', function(e) {
                if (this.checked) {
                    table.rows().select();
                } else {
                    table.rows().deselect();
                }

                e.stopPropagation();
            });
        });

        function check_status(type, id) {
            var mode = $("#mode").val();
            var selectedMsg = new Array();
            if (!id) {

                $("input[name='message_id[]']:checked").each(function() {
                    selectedMsg.push($(this).val());
                    $(this).parent().closest('tr').addClass("blurrey");
                });

            } else {
                selectedMsg.push(id);
                $(this).parent().closest('tr').addClass("blurrey");
            }
            if (selectedMsg.length === 0) {
                Swal.fire("Please Select any one message");
                return false;
            } else {
                if (type == 'delete') {
                    delete_msg(type, selectedMsg, "")
                } else {


                    update_memo_status(type, selectedMsg, mode); //function writen in common js ajax-calls.js

                }
            }
        }
        $(function() {
            $(".update_sys_status").click(function() {
                var msg_id = $(this).data("msg_id");

                var data = {
                    'msg_id': msg_id,
                };

                json_post("{{ url('update-sys-memo-status') }}", data).done(function(d) {

                    $(".announce_msg_count").html(d.count);


                }).fail(function() {

                    return false;
                });

            })
        });

        function single_msg_status(type, msg_id) {
            if (type == 'delete') {
                selectedMsg = [];
                delete_msg(type, selectedMsg, msg_id)
            } else {
                //for reply button
            }
        }

        function delete_msg(type, selectedMsg, msg_id) {
            var mode = $("#mode").val();
            if (msg_id != "") {
                selectedMsg = [];
                selectedMsg['0'] = msg_id;
            }
            Swal.fire({
                    title: "Are you sure?",
                    text: "You want to remove!",
                    icon: "warning",
                    buttons: ["Cancel", "Ok"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        update_memo_status(type, selectedMsg, mode); //function writen in common js ajax-calls.js

                    } else {
                        return false;
                    }
                });
        }

        function remove_checked() {
            var elements = document.getElementsByTagName("INPUT");
            for (var inp of elements) {
                if (inp.type === "checkbox")
                    inp.checked = false;
            }
        }
        $(function() {
            $(document).on('click', '.mo', function() {

                //change the stage like inbox or send item if mode ==1 for inbox and 2 for send item
                var mode = $(this).attr("mode");
                $("#mode").val(mode);
                remove_checked();

            });
        });


        $(document).ready(function() {
            remove_checked();
            $("#new_memo").validate({
                // Specify validation rules
                rules: {
                    topic: {
                        required: true
                    },
                    subject: {
                        required: true
                    },
                    content: {
                        required: true
                    },
                    attachment: {
                        extension: 'jpeg|jpg|png',
                    },

                },
                // Specify validation error messages
                messages: {

                    topic: {
                        required: "This field cant be empty",
                    },
                    subject: {
                        required: "This field cant be empty",
                    },
                    content: {
                        required: "This field cant be empty",
                    },
                    receipt: {
                        extension: "The selected file is not valid",
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
                    $('button[type=submit]').prop('disabled', true);
                    var content = $('#editor').contents().find('body').html();
                    if (!content || (content && content.length < 20)) {
                        alert('Silakan masukkan konten memo lebih dari 20 karakter!');
                        $('button[type=submit]').prop('disabled', false);
                        return false;
                    }
                    $('#content_body').val(content);
                    form.submit();
                }
            });
            if ($(".memo_tab table tbody tr td").hasClass('dataTables_empty')) {
                $(".dataTables_empty").attr('colspan', '2')
            }
        });
        var memoCustomContents = document.querySelectorAll('.memo_table_para');
        memoCustomContents.forEach(function(item) {
            var elmntWithStyle = item.querySelectorAll('[style]');

            elmntWithStyle.forEach(function(elm) {
                elm.style.removeProperty('width');
            });
        })
    </script>
    @endslot
</x-desktop.app>