<x-desktop.app>
    <div class="content my01">

        <script>
            setTimeout(function() {
                document.getElementById("Acollapse1").setAttribute("aria-expanded", true);
            }, 3000);
        </script>
        <div class="container-wrapper info ">
            <div class="container container-box info-view">
                <div class="info-nav nav-icon">
                    <div class="row no-gutters flex-div">
                        <div>
                            <a href="{{ url('info/terms-terms_conditions') }}" class="">
                                <div>
                                    <i class="icon-clipboard"></i>
                                </div>
                                <div>TERMS & CONDITIONS </div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/faq-general') }}" class="active">

                                <div> <i class="icon-help-circle"></i></div>

                                <div>FAQ</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/how-sportsbook') }}" class="">
                                <div><i class="icon-list-numbered"></i> </div>
                                <div>HOW TO PLAY </div>
                            </a>
                        </div>

                        <div>
                            <a href="{{ url('info/referral') }}" class="">
                                <div><i class="icon-clipboard1"></i></div>

                                <div>REFERRAL</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/responsiblegaming') }}" class="">
                                <div><i class="icon-clipboard1"></i></div>

                                <div>Responsible Gaming</div>
                            </a>
                        </div>

                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light navbar-default  ">
                    <!--<span class="menu-select" id="menu-select">General</span>-->
                    <div class="navbar-header d-lg-none clearfix">
                        <button class="navbar-toggler" id="navbar-toggler--info" type="button"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="icon-bars navbar-toggler-icon"></i>
                        </button>
                        <div class="menu-select d-lg-none" id="menu-select--info"></div>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-general') }}"
                                    data-pg="general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-deposit') }}"
                                    data-pg="deposit">Deposits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-faq_withdrawal') }}"
                                    data-pg="faq_withdrawal">Withdrawal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-games') }}"
                                    data-pg="games">Gaming</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-technical') }}"
                                    data-pg="technical">Technical</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-banking') }}"
                                    data-pg="banking">Banking</a>
                            </li>
                        </ul>
                    </div>
                </nav>


                <div class="panel-group" id="info_accordion">
                    <!-- First Panel -->
                    <!-- '1. Tentang :webTitle'=> <br>'1. Tentang :webTitle',<br>'2. Kenapa :webTitle?'=> <br>'2. Kenapa :webTitle?',<br>'3. Afiliasi?'=> <br>'3. Afiliasi?',<br>'4. Cara Bergabung?'=> <br>'4. Cara Bergabung?',<br>'5. Mata uang apa yang digunakan di :webTitle?'=> <br>'5. Mata uang apa yang digunakan di :webTitle?',<br>'6. Persyaratan usia ?'=> <br>'6. Persyaratan usia ?',<br>'7. Bagaimana cara melakukan deposit di akun :webTitle ?'=> <br>'7. Bagaimana cara melakukan deposit di akun :webTitle ?',<br>'8. Bagaimana saya bisa yakin bahwa permainan itu adil ?'=> <br>'8. Bagaimana saya bisa yakin bahwa permainan itu adil ?',<br>'9. Apakah informasi pribadi saya aman ?'=> <br>'9. Apakah informasi pribadi saya aman ?',<br> -->

                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse1" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse1">
                            <h5 class="panel-title info">
                                1. Tentang {{ $siteConfig->site_name}} </h5>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="info panel-body">
                                <p>
                                    {{ $siteConfig->site_name}} adalah merek hiburan online yang melayani pasar Asia Pasifik, terutama
                                    Indonesia, Malaysia dan Cina. Produk yang ditawarkan terutama pada berbagai
                                    permainan online seperti taruhan sepakbola online, kasino online, slot, keno dan
                                    lotere, biner, poker, dan permainan lainnya.
                                    <br />
                                    <br />
                                    {{ $siteConfig->site_name}} salah satu kasino terkemuka di Asia.
                                    <br />
                                    <br />
                                    Visi {{ $siteConfig->site_name}} adalah untuk menyediakan hiburan berkualitas tinggi dan game bernilai
                                    tinggi bagi para pelanggannya. {{ $siteConfig->site_name}} berkomitmen untuk menyediakan produk-produk
                                    permainan yang memimpin industri yang selalu didukung oleh promosi apa pun. Kelompok
                                    staf profesional disediakan untuk memastikan bahwa dengan bermain di {{ $siteConfig->site_name}}, Anda
                                    akan selalu mendapatkan pengalaman terbaik di sini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse2" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse2">
                            <h5 class="panel-title info">
                                2. Kenapa {{ $siteConfig->site_name}}? </h5>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Seiring dengan promosi yang terus-menerus {{ $siteConfig->site_name}} menawarkan peluang terbaik dalam
                                    setidaknya 1.000 jenis game sportsbook online terkemuka di pasar seperti liga sepak
                                    bola mulai dari Inggris, Spanyol, Eropa, Jerman serta olahraga lain seperti NBA,
                                    NFL, NCAA, Tenis, F1, dan taruhan olahraga lainnya. Selain taruhan olahraga, {{ $siteConfig->site_name}}
                                    juga menyediakan berbagai permainan langsung, didukung oleh dealer online kasino,
                                    melalui Lobi Live Kasino, Anda akan dibawa ke Live Baccarat, Live Sic Bo, Live
                                    Dragon Tiger, Live Roulette, Live Kasino, Slot dan game menarik lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse3" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse3">
                            <h5 class="panel-title info">
                                3. Afiliasi? </h5>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>
                                    Jadilah mitra kami dan dapatkan komisi menarik bernilai tinggi setiap bulan dengan
                                    mengundang teman-teman Anda untuk bermain di {{ $siteConfig->site_name}}. Click <a
                                        href='#'>here</a> tentang cara menjadi afiliasi kami</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse4" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse4">
                            <h5 class="panel-title info">
                                4. Cara Bergabung? </h5>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Bergabunglah sebagai ANGGOTA atau AGEN</p>
                                <ol type='a'>
                                    <li>
                                        <strong>MEMBER :</strong><br>
                                        <ol>
                                            <li>Login ke situs web {{ $siteConfig->site_name}}, pilih menu "GABUNG"</li>
                                            <li>Isi formulir pendaftaran yang disediakan. Semua informasi dibutuhkan
                                                oleh data yang valid / benar, lalu pilih "SUBMIT"</li>
                                            <li>Email konfirmasi akan dikirim ke email yang terdaftar dan dimaksudkan
                                                untuk mengkonfirmasi nama pengguna dan kata sandi yang terdaftar.</li>
                                            <li>Kembali ke situs {{ $siteConfig->site_name}}, pilih "LOGIN"</li>
                                            <li>Anda dapat melanjutkan ke langkah selanjutnya yang akan dimulai dari
                                                Deposit.</li>
                                        </ol>
                                    </li>
                                    <br>
                                    <br>
                                    <li>
                                        <strong>AGEN :</strong><br>
                                        <ol>
                                            <li>Masuk ke situs web {{ $siteConfig->site_name}}, pilih menu "AFILIASI"</li>
                                            <li>Isi formulir pendaftaran yang disediakan. Semua informasi yang
                                                dibutuhkan oleh data yang benar / benar, kemudian pilih "KIRIM"</li>
                                            <li>Email konfirmasi akan dikirim ke email terdaftar dan dimaksudkan untuk
                                                mengkonfirmasi dan mengaktifkan nama pengguna dan kata sandi yang
                                                terdaftar.</li>
                                            <li>Formulir yang dikirimkan akan melalui proses seleksi oleh {{ $siteConfig->site_name}}.</li>
                                            <li>Pemohon yang berhasil akan dihubungi oleh {{ $siteConfig->site_name}} melalui email, terkait
                                                dengan yang telah ditentukan sebelumnya syarat dan ketentuan Afiliasi
                                                {{ $siteConfig->site_name}}.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse5" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse5">
                            <h5 class="panel-title info">
                                5. Mata uang apa yang digunakan di {{ $siteConfig->site_name}}? </h5>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>{{ $siteConfig->site_name}} untuk saat ini hanya menerima mata uang Rupiah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse6" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse6">
                            <h5 class="panel-title info">
                                6. Persyaratan usia ? </h5>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Untuk bergabung, Anda harus menyetujui Persyaratan & Ketentuan dan berusia minimal 18
                                    tahun atau lebih. Sebagian besar negara memiliki aturannya sendiri tentang permainan
                                    online dan karenanya Anda harus memastikan bahwa Anda mengetahui adanya peraturan
                                    dan mematuhi aturan mereka. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse7" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse7">
                            <h5 class="panel-title info">
                                7. Bagaimana cara melakukan deposit di akun {{ $siteConfig->site_name}} ? </h5>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Dana dapat disetorkan ke Akun {{ $siteConfig->site_name}} Anda melalui sejumlah metode. Lebih detailnya
                                    bisa dilihat dari INFO <a
                                        href='{{ url('info/faq-banking') }}'>here</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse8" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse8">
                            <h5 class="panel-title info">
                                8. Bagaimana saya bisa yakin bahwa permainan itu adil ? </h5>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Kami memiliki profesional untuk menghitung persentase pembayaran untuk semua game
                                    kami, memastikan bahwa Anda dapat yakin bahwa game kami memenuhi peraturan keadilan
                                    standar industri.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse9" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse9">
                            <h5 class="panel-title info">
                                9. Apakah informasi pribadi saya aman ? </h5>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse ">
                            <div class="info panel-body">
                                <p>Kami akan memastikan bahwa detail Anda aman setiap saat. Kami menggunakan
                                    langkah-langkah keamanan kualitas terbaik Secure Socket (enkripsi 128 128 enkripsi
                                    Standar) (Standar enkripsi 128 128 SSL) dan disimpan di lingkungan operasi yang aman
                                    yang memungkinkan pelanggan melakukan pembayaran online tidak pernah lebih aman.
                                    {{ $siteConfig->site_name}} tidak akan mengungkapkan informasi pribadi Anda kepada pihak ketiga mana pun.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script>
            $(function() {
                var pg = "general";
                var selectedMenu = $('.navbar-nav .nav-link').filter(function() {
                    return $(this).data("pg").toLowerCase() == pg.toLowerCase();
                }).text();
                $('#menu-select--info').text(selectedMenu);


                $('#navbar-toggler--info').click(function() {
                    $('.info .navbar-collapse').toggleClass('show in');

                })
            });
        </script>



    </div>
</x-desktop.app>