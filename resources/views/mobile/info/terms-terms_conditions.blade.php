<x-mobile.app>
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
                        <a href="{{ url('info/terms-terms_conditions') }}" class="active">
                            <div>
                                <i class="icon-clipboard"></i>
                            </div>
                            <div>TERMS & CONDITIONS </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{ url('info/faq-general') }}" class="">

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
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icon-bars navbar-toggler-icon"></i>
                    </button>
                    <div class="menu-select d-lg-none" id="menu-select--info">Terms & Conditions</div>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                        <li class="nav-item">
                            <a class="nav-link" data-pg="terms_conditions"
                                href="{{ url('info/terms-terms_conditions') }}"
                                routerLink="{{ url('info/terms-terms_conditions') }}"
                                (click)="strSelectedMenu='Terms & Conditions';">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="panel-group" id="info_accordion">
                <!-- First Panel -->
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse1">
                        <h5 class="panel-title info">
                            1. Syarat & Ketentuan Umum </h5>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <br>
                            <p>
                                Selain dari Syarat & Ketentuan Perjanjian ini, silakan tinjau Kebijakan
                                Privasi kami dan aturan lainnya, kebijakan dan syarat dan ketentuan yang
                                berkaitan dengan permainan dan promosi yang tersedia di Situs
                                sebagaimana diposting di Situs dari waktu ke waktu, yang dimasukkan di
                                sini dengan referensi, bersama-sama dengan kebijakan lain yang dapat
                                Anda beri tahu dari kami dari waktu ke waktu.
                                <br /><br>
                                Dengan mengklik tombol "Kirim saat pendaftaran akun" di bawah dan
                                menggunakan Perangkat Lunak (sebagaimana didefinisikan di bawah) Anda
                                menyetujui syarat dan ketentuan yang ditetapkan dalam Perjanjian ini
                                bersama dengan Kebijakan Privasi dan aturan lain yang berkaitan dengan
                                permainan dan promosi yang tersedia sebagai masing-masing dapat
                                diperbarui atau diubah dari waktu ke waktu sesuai dengan ketentuan di
                                bawah ini. Anda lebih lanjut mengakui bahwa kegagalan Anda untuk
                                mematuhi perjanjian ini dapat mengakibatkan diskualifikasi, penutupan
                                akun, penyitaan dana Anda yang dianggap tepat dan lebih khusus
                                dijelaskan di bawah ini.
                                <br /><br>
                            </p>
                            <ul>
                                <li>Setiap Orang/Individu hanya di benarkan mendaftar dan memiliki 1
                                    akun Pada situs kami.</li>
                                <br />
                                <li>Kami hanya menerima pendaftaran secara perorangan / pribadi dan
                                    tidak di benarkan menggunakan Nama perusahaan/ Badan Hukum untuk di
                                    daftkarkan ke situs kami.</li>
                                <br />
                                <li>Member/Player Wajib mematuhi Syarat & Ketentuan Serta Peraturan dan
                                    Tata Cara permainan dari Penyedia Games, apabila Member/player
                                    terindikasi melakukan kecurangan untuk mendapatkan keuntungan yang
                                    tidak sah dengan memanfaatkan kelemahan system seperti Taruhan Dua
                                    sisi Secara masif baik didalam website kami sendiri maupun dengan
                                    antara Situs website Perusahaan lain , maka kami berhak menutup akun
                                    tsb / membatalkan Taruhan Secara keseluruhan serta Bonus yang sudah
                                    di dapatkan.</li>
                                <br />
                                <li>Situs Kami hanya menerima Deposit via transfer bank, Setoran tunai,
                                    Setoran Via ATM, E-walet dan Pulsa, Setoran menggunakan Mesin EDC
                                    Bank atau Cek dan Giro Tidak di benarkan.</li>
                                <br />
                                <li>Penarikan Uang Deposit hanya di benarkan apabila member sudah
                                    melakukan Minimal Taruhan 1 x Turn Over dari jumlah uang yang di
                                    depositkan.</li>
                                <br />
                                <li>Member bebas melalukan penarikan uang selama 24 jam dan pengiriman
                                    penarikan uang hanya akan di kirim ke Rekening/ akun bank member
                                    yang sudah terdaftar.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse2">
                        <h5 class="panel-title info">
                            2. Definisi </h5>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                "Game" berarti sistem permainan internet yang dapat diakses dan / atau
                                ditawarkan di Situs.
                                <br /><br>

                                "Perangkat" berarti perangkat akses aplikasi apa pun, termasuk tetapi
                                tidak terbatas pada komputer pribadi, laptop, telepon seluler, asisten
                                digital pribadi, telepon PDA yang digunakan untuk penggunaan dan akses
                                ke Situs dan partisipasi dalam Layanan.
                                <br /><br>
                                "Informasi" berarti informasi yang disediakan di Situs termasuk tetapi
                                tidak terbatas pada hasil, statistik, data olahraga, peluang dan data
                                taruhan.
                                <br /><br>
                                "Perangkat Lunak" berarti setiap program komputer, file data, atau
                                konten lain apa pun yang diperlukan untuk diinstal pada Perangkat Anda
                                agar Anda dapat menggunakan, mengakses, dan berpartisipasi dalam Layanan
                                untuk tujuan menggunakan, mengakses, dan berpartisipasi dalam hal
                                tersebut di atas. di Situs web melalui Perangkat Anda.
                                <br /><br>
                                "Layanan" berarti Perangkat Lunak dan Permainan bersama-sama.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse3">
                        <h5 class="panel-title info">
                            3. Pemberian Lisensi / Kekayaan Intelektual </h5>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                {{ $siteConfig->site_name}} dilisensikan dan karenanya diatur untuk mengoperasikan sportsbook
                                dan kasino online melalui media elektronik berdasarkan global di bawah
                                izin dari Isle of Man dan Kahnawake, Kanada. Sementara itu dimaksudkan
                                bahwa sportsbook dan kasino online akan beroperasi di bawah (lisensi
                                {{ $siteConfig->site_name}}`s), {{ $siteConfig->site_name}} berhak untuk mengalihkan operasi bisnis apa pun ke
                                yurisdiksi lain kapan saja.
                                <br /><br>
                                Tunduk pada syarat & ketentuan yang terkandung di sini {{ $siteConfig->site_name}} memberi
                                Anda hak pribadi, tidak dapat dipindahtangankan, dan tidak eksklusif
                                untuk menggunakan Perangkat lunak {{ $siteConfig->site_name}}, untuk mengakses informasi di
                                situs web {{ $siteConfig->site_name}} melalui Perangkat dan memainkan Game tersedia.
                                <br /><br>
                                Anda mengakui dan menyetujui bahwa Perangkat Lunak yang dapat diakses
                                oleh Anda adalah bagian dari Layanan dan merupakan milik dari {{ $siteConfig->site_name}} dan
                                / atau pemberi lisensi kami, dan bahwa Anda tidak mendapatkan hak apa
                                pun atas Perangkat Lunak tersebut. Perangkat Lunak ini dilisensikan
                                kepada Anda oleh {{ $siteConfig->site_name}} untuk penggunaan pribadi Anda. Harap dicatat
                                bahwa Perangkat Lunak ini tidak untuk digunakan oleh (i) individu di
                                bawah 18 tahun, (ii) individu di bawah usia legal mayoritas di
                                yurisdiksi mereka, dan (iii) individu yang terhubung ke Situs dari
                                yurisdiksi di mana itu ilegal untuk melakukannya. {{ $siteConfig->site_name}} tidak dapat
                                memverifikasi legalitas Layanan di setiap yurisdiksi dan merupakan
                                tanggung jawab Anda untuk memverifikasi hal-hal tersebut.
                                <br /><br>
                                {{ $siteConfig->site_name}} tidak bertanggung jawab atas kebenaran, kelengkapan atau mutakhir
                                dari Layanan yang diberikan, misalnya hasil yang disediakan di Situs.
                                {{ $siteConfig->site_name}} juga tidak bertanggung jawab atas keakuratan skor langsung,
                                statistik, dan hasil antara dalam taruhan yang sedang berjalan.
                                <br /><br>
                                {{ $siteConfig->site_name}} berhak kapan saja untuk meminta bukti usia Anda untuk memastikan
                                bahwa anak di bawah umur tidak menggunakan Layanan. Kami selanjutnya
                                berhak untuk menangguhkan atau membatalkan akun Anda dan mengecualikan
                                Anda, untuk sementara atau selamanya, dari menggunakan Layanan jika
                                bukti usia yang memuaskan tidak diberikan atau jika kami curiga Anda
                                masih di bawah umur.
                                <br /><br>
                                Kode, struktur, dan organisasi Perangkat Lunak dilindungi oleh hak
                                cipta, rahasia dagang, kekayaan intelektual, dan hak-hak lainnya.
                                <br><br>
                                Kamu mungkin tidak:
                            </p>
                            <ul>
                                <li>menyalin, mendistribusikan, menerbitkan, merekayasa balik,
                                    mendekompilasi, membongkar, memodifikasi, atau menerjemahkan
                                    Perangkat Lunak atau melakukan segala upaya untuk mengakses kode
                                    sumber untuk membuat karya turunan dari kode sumber Perangkat Lunak,
                                    atau sebaliknya;</li>
                                <br />
                                <li>menjual, menetapkan, mensublisensikan, mentransfer, mendistribusikan
                                    atau menyewakan Perangkat Lunak;</li>
                                <br />
                                <li>membuat Perangkat Lunak tersedia untuk pihak ketiga melalui jaringan
                                    komputer atau sebaliknya;</li>
                                <br />
                                <li>ekspor Perangkat Lunak ke negara mana pun (baik secara fisik atau
                                    elektronik) tanpa persetujuan tertulis sebelumnya dari {{ $siteConfig->site_name}}; atau
                                </li>
                                <br />
                                <li>menggunakan Perangkat Lunak dengan cara yang dilarang oleh hukum
                                    atau peraturan yang berlaku,</li>
                                <br />
                            </ul>
                            <p>
                                masing-masing di atas adalah "Penggunaan Tidak Sah"
                                <br /><br>
                                Anda hanya akan bertanggung jawab atas segala kerusakan, biaya atau
                                pengeluaran yang timbul dari atau sehubungan dengan komisi oleh Anda
                                atas Penggunaan Tidak Sah. Anda harus memberi tahu {{ $siteConfig->site_name}} segera setelah
                                mengetahui adanya komisi oleh siapa pun tentang Penggunaan yang Tidak
                                Sah dan harus menyediakan {{ $siteConfig->site_name}} dengan bantuan yang wajar dengan
                                penyelidikan apa pun yang dilakukannya sehubungan dengan informasi yang
                                diberikan oleh Anda dalam hal ini.
                                <br /><br>
                                Persyaratan "{{ $siteConfig->site_name}}", dan merek dagang, merek layanan, dan / atau nama
                                dagang lainnya yang digunakan oleh {{ $siteConfig->site_name}} di Situs dari waktu ke waktu
                                ("Merek Dagang"), adalah merek dagang, merek layanan, dan / atau nama
                                dagang dari {{ $siteConfig->site_name}} atau salah satu perusahaan grup dan / atau pemberi
                                lisensinya, dan entitas ini memiliki semua hak atas Merek Dagang
                                tersebut. Selain itu, konten lain di Situs, termasuk, tetapi tidak
                                terbatas pada, Perangkat Lunak, gambar, gambar, grafik, foto, animasi,
                                video, musik, audio dan teks ("Konten Situs") milik {{ $siteConfig->site_name}} atau salah
                                satu di antaranya perusahaan grup dan / atau pemberi lisensinya dan
                                dilindungi oleh hak cipta dan / atau kekayaan intelektual lainnya atau
                                hak-hak lain.
                                <br /><br>
                                Anda dengan ini mengakui bahwa dengan menggunakan Layanan dan Situs Anda
                                tidak memperoleh hak dalam Konten Situs, atau bagian apa pun dari sana.
                                Dalam keadaan apa pun Anda tidak boleh menggunakan Konten Situs tanpa
                                persetujuan tertulis sebelumnya dari {{ $siteConfig->site_name}} atau sesuai dengan
                                undang-undang yang berlaku dari waktu ke waktu untuk perlindungan
                                Kekayaan Intelektual dari {{ $siteConfig->site_name}}.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse4">
                        <h5 class="panel-title info">
                            4. Modifikasi dan Amandemen </h5>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Anda sepenuhnya memahami dan setuju untuk terikat oleh Perjanjian ini
                                sebagaimana diubah dan / atau diubah oleh {{ $siteConfig->site_name}} dari waktu ke waktu.
                                {{ $siteConfig->site_name}} berhak untuk mengubah Perjanjian ini atau bagiannya kapan saja.
                                Jika kami melakukan modifikasi dan / atau amandemen tersebut, kami akan
                                memberikan pemberitahuan tentang perubahan tersebut di Situs. Adalah
                                tanggung jawab Anda untuk memeriksa Syarat & Ketentuan ini dan Kebijakan
                                Privasi dari waktu ke waktu untuk memastikan bahwa Anda setuju dengan
                                mereka dan Anda terus menggunakan Situs akan dianggap sebagai penerimaan
                                Anda atas setiap perubahan dan / atau modifikasi Perjanjian.
                                <br /><br>
                                Setiap taruhan yang ditempatkan sebelum waktu amandemen dan / atau
                                modifikasi akan tunduk pada Syarat & Ketentuan yang sudah ada
                                sebelumnya. Setiap taruhan yang ditempatkan setelah waktu amandemen dan
                                / atau modifikasi akan tunduk pada Syarat & Ketentuan yang diubah. Jika
                                modifikasi apa pun tidak dapat Anda terima, satu-satunya jalan Anda
                                adalah mengakhiri Perjanjian ini.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse5">
                        <h5 class="panel-title info">
                            5. Ketentuan Penggunaan Umum - Representasi dan Jaminan Anda </h5>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Sebagai syarat penggunaan Layanan, Anda menjamin dan berjanji bahwa Anda
                                tidak akan menggunakan atau mengakses Situs, Layanan, Perangkat Lunak,
                                dan Informasi untuk tujuan yang melanggar hukum berdasarkan hukum apa
                                pun yang berlaku untuk Anda atau yang dilarang oleh atau melanggar.
                                Perjanjian. Khususnya (dan selain semua representasi dan jaminan lain
                                yang ditetapkan dalam Perjanjian), Anda menjamin dan melakukan sebagai
                                syarat penggunaan Layanan yang:
                            </p>
                            <ul>
                                <li>Anda tidak dibatasi oleh kapasitas hukum yang terbatas;</li>
                                <br />
                                <li>Anda bertindak dalam kapasitas hukum Anda sendiri dan bukan atas
                                    nama orang atau perusahaan lain;</li>
                                <br />
                                <li>Anda setuju bahwa penggunaan Anda atas Layanan adalah atas kebijakan
                                    dan risiko Anda sendiri;</li>
                                <br />
                                <li>Anda tidak didiagnosis atau diklasifikasikan sebagai penjudi
                                    kompulsif;</li>
                                <br />
                                <li>Anda berusia di atas 18 tahun atau di atas usia mayoritas di
                                    yurisdiksi Anda, mana yang lebih besar;</li>
                                <br />
                                <li>Anda setuju bahwa Anda diharuskan untuk memberikan kepada kami
                                    rincian pribadi tertentu tentang diri Anda (termasuk perincian
                                    mengenai metode pembayaran Anda) untuk tujuan menggunakan Layanan.
                                    Kontrol kami atas informasi yang Anda berikan akan tunduk pada
                                    Kebijakan Privasi kami; </li>
                                <br />
                                <li>Anda sepenuhnya bertanggung jawab atas segala pajak yang berlaku
                                    yang dapat dibayarkan atas kemenangan yang dibayarkan kepada Anda;
                                </li>
                                <br />
                                <li>Anda menggunakan Situs semata-mata untuk penggunaan pribadi Anda.
                                    Anda hanya diperbolehkan bertaruh untuk hiburan pribadi Anda; </li>
                                <br />
                                <li>Anda bukan penduduk Hong Kong, Belanda, Filipina, Singapura, Swiss,
                                    Taiwan, Turki, atau Amerika Serikat;</li>
                                <br />
                                <li>Anda mengakui kemungkinan risiko kehilangan uang yang timbul dari
                                    penggunaan Layanan dan Situs dan bahwa {{ $siteConfig->site_name}} tidak bertanggung
                                    jawab kepada Anda atas kerugian tersebut;</li>
                                <br />
                                <li>Deposit Anda tidak berasal dari kegiatan ilegal atau kriminal;</li>
                                <br />
                                <li>Anda tidak akan melakukan kegiatan kriminal atau melanggar hukum
                                    lainnya melalui akun apa pun yang dibuka bersama kami dan Anda tidak
                                    akan mengizinkan orang lain untuk menggunakan akun taruhan Anda dan
                                    Layanan untuk kegiatan ilegal di bawah hukum apa pun yang berlaku
                                    untuk Anda atau kami;</li>
                                <br />
                                <li>Anda setuju untuk menjaga kerahasiaan nama dan kata sandi akun Anda
                                    dan tidak mengizinkan orang lain menggunakannya. Jika Anda salah
                                    tempat, lupa, atau kehilangan nama akun atau kata sandi Anda, Anda
                                    harus segera memberi tahu departemen layanan pelanggan kami. Rincian
                                    keamanan baru akan dialokasikan untuk Anda; </li>
                                <br />
                                <li>Anda akan memastikan kerahasiaan akun Anda dan detail masuk. Taruhan
                                    apa pun yang dibuat di {{ $siteConfig->site_name}} tempat nama pengguna dan kata sandi
                                    telah digunakan akan dianggap sah; </li>
                                <br />
                                <li>Anda tidak akan menggunakan Layanan, Situs, Perangkat Lunak, atau
                                    Informasi dengan cara apa pun yang dapat mengganggu ketersediaannya
                                    bagi pengguna lain;</li>
                                <br />
                                <li>Anda tidak akan meminta atau dengan cara apa pun mencari informasi
                                    apa pun yang berkaitan dengan pengguna lain;</li>
                                <br />
                                <li>Anda tidak akan mengunggah atau mendistribusikan program, file, atau
                                    data apa pun yang mengandung virus, rusak atau dapat memengaruhi
                                    kinerja operasional Perangkat, Perangkat Lunak, Layanan, dan / atau
                                    Situs;</li>
                                <br />
                                <li>Anda tidak boleh mencoba memodifikasi, mendekompilasi, merekayasa
                                    balik atau membongkar Perangkat Lunak dengan cara apa pun;</li>
                                <br />
                                <li>Anda tidak akan menggunakan perangkat, robot, laba-laba, perangkat
                                    lunak, rutin, atau metode lain apa pun (atau apa pun yang sifatnya
                                    di atas) untuk mengganggu atau berupaya mengganggu fungsi normal
                                    Layanan, Perangkat, Perangkat Lunak, Situs, Informasi atau transaksi
                                    apa pun yang ditawarkan di Situs dan / atau melalui Perangkat; </li>
                                <br />
                                <li>Anda tidak akan memposting atau mentransmisikan ke Situs dan / atau
                                    ke Perangkat (atau) ke pengguna lain, yang melanggar hukum,
                                    melecehkan, kasar, mengancam, memfitnah, memfitnah, cabul, tidak
                                    senonoh, menghasut, menghasut, rasial, tidak menyenangkan secara
                                    etnis, pornografi atau materi yang tidak senonoh, atau materi apa
                                    pun yang dapat membentuk atau mendorong perilaku yang akan dianggap
                                    sebagai tindak pidana, menimbulkan tanggung jawab perdata, atau
                                    melanggar hukum apa pun; </li>
                                <br />
                                <li>Anda tidak akan memulai dan / atau terlibat dalam survei, kontes,
                                    surat berantai, atau mengirim / mengirim "junk mail", "spam" atau
                                    penyebaran massal email yang tidak diminta ke {{ $siteConfig->site_name}};</li>
                                <br />
                                <li>Anda tidak akan memiliki lebih dari satu akun. Jika lebih dari satu
                                    akun diidentifikasi sebagai milik atau berkaitan dengan Anda, {{ $siteConfig->site_name}}
                                    berhak untuk memperlakukan akun semacam itu sebagai satu akun
                                    bersama atau untuk menutup akun tersebut dan mengakhiri Perjanjian
                                    ini. </li>
                                <br />
                            </ul>
                            <p>
                                Dengan menyetujui Ketentuan Penggunaan Umum di atas, jika aktivitas Anda
                                terkait dengan tindakan kriminal atau mencurigakan, {{ $siteConfig->site_name}} berhak
                                melaporkan Anda ke otoritas federal atau lokal tanpa pemberitahuan atau
                                penjelasan sebelumnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse6">
                        <h5 class="panel-title info">
                            6. Registrasi Akun </h5>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Anda diharuskan melengkapi aplikasi untuk pembukaan akun dan keanggotaan
                                sebagaimana diatur di Situs.
                                <br><br>
                                Anda setuju bahwa Anda diharuskan untuk memberikan kepada kami rincian
                                pribadi tertentu tentang diri Anda (termasuk perincian mengenai metode
                                pembayaran Anda) untuk tujuan menggunakan Layanan. Kontrol kami atas
                                informasi yang Anda berikan akan tunduk pada Kebijakan Privasi kami.
                                <br><br>
                                Anda berjanji bahwa Anda akan memberikan informasi yang lengkap dan
                                benar sehubungan dengan semua perincian dan informasi yang Anda berikan
                                kepada {{ $siteConfig->site_name}}. Anda berkewajiban memperbarui rincian tersebut jika
                                terjadi perubahan padanya. Untuk mengonfirmasi nama dan alamat Anda
                                {{ $siteConfig->site_name}} berhak untuk mengkonfirmasi data tersebut melalui pos dan untuk
                                berkorespondensi melalui pos.
                                <br><br>
                                Akun Anda harus cocok dengan nama dan identitas Anda yang asli dan sah
                                dan nama pada pendaftaran akun Anda harus cocok dengan nama pada kartu
                                kredit atau akun pembayaran lain yang digunakan untuk menyetor atau
                                menerima uang di akun Anda.
                                <br><br>
                                Kami berhak menolak pendaftaran Anda tanpa referensi kepada Anda atau
                                tanpa memberikan alasan apa pun dan tanpa kewajiban kepada Anda. Jika
                                rincian registrasi akun ditemukan tidak akurat, menyesatkan, atau tidak
                                lengkap, {{ $siteConfig->site_name}} berhak untuk menutup akun, mengembalikan uang yang
                                disetorkan ke akun pendanaan yang sama tetapi membatalkan semua taruhan
                                yang ditempatkan.
                                <br><br>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse7">
                        <h5 class="panel-title info">
                            7. Ketentuan Di Mana Taruhan Diterima </h5>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <ul>
                                <li>Semua taruhan dilakukan pada situs web {{ $siteConfig->site_name}} tunduk pada aturan
                                    Game yang relevan yang berlaku untuk setiap acara atau game, dan
                                    Perjanjian ini.</li>
                                <br />
                                <li>{{ $siteConfig->site_name}} tidak dapat bertanggung jawab atas kesalahan pengetikan atau
                                    kesalahan manusia dalam memposting peluang selain dari yang
                                    dimaksudkan. Jika hal ini terjadi, {{ $siteConfig->site_name}} berhak untuk membatalkan
                                    taruhan yang bertaruh. </li>
                                <br />
                                <li>Meskipun ada ketentuan lain dalam Perjanjian ini, {{ $siteConfig->site_name}} berhak
                                    untuk menolak taruhan apa pun tanpa penjelasan.</li>
                                <br />
                                <li>Hanya taruhan yang dilakukan melalui internet dan / atau Perangkat
                                    yang sesuai dengan Syarat & Ketentuan ini yang akan diterima. Segala
                                    bentuk taruhan lainnya (baik melalui pos, email, faks, atau lainnya)
                                    tidak akan diterima dan di mana diterima akan batal terlepas dari
                                    hasilnya. Taruhan hanya valid jika nama pengguna dan kata sandi
                                    telah dimasukkan dengan benar dengan dana yang cukup tersedia di
                                    akun Anda dan Anda telah menerima konfirmasi dari kami bahwa taruhan
                                    telah diterima. Taruhan akan dianggap divalidasi ketika pesan
                                    konfirmasi muncul di layar. </li>
                                <br />
                                <li>Semua taruhan akan dianggap ditempatkan secara sah jika nama
                                    pengguna dan kata sandi Anda telah dimasukkan dengan benar,
                                    tergantung ketersediaan dana di akun Anda.</li>
                                <br />
                                <li>Anda bertanggung jawab dan berkewajiban atas semua aktivitas dan
                                    transaksi yang terjadi melalui penggunaan nama, nomor akun, nama
                                    pengguna, kata sandi (atau kombinasi daripadanya) terlepas dari
                                    apakah transaksi tersebut diotorisasi oleh Anda.</li>
                                <br />
                                <li>Anda sepenuhnya bertanggung jawab untuk memastikan bahwa rincian
                                    taruhan Anda benar. Setelah taruhan Anda ditempatkan dan
                                    penerimaannya dikonfirmasi oleh kami, mereka tidak dapat dibatalkan,
                                    dicabut, atau diubah dan akan dianggap sebagai bukti konklusif dari
                                    taruhan yang telah Anda tempatkan. </li>
                                <br />
                                <li>Semua taruhan dicatat dan dicatat dalam basis data log transaksi
                                    {{ $siteConfig->site_name}} dan merupakan bukti konklusif dari semua transaksi dan waktu
                                    di mana transaksi dilakukan.</li>
                                <br />
                                <li>Semua taruhan akan dianggap sah dan diterima oleh www.{{ $siteConfig->site_name}}.com
                                    ketika konfirmasi ditampilkan dalam pernyataan riwayat transaksi
                                    Anda.</li>
                                <br />
                                <li>Kecuali untuk jenis taruhan "dalam permainan", semua taruhan yang
                                    ditempatkan setelah dimulainya suatu acara akan dianggap tidak
                                    valid. {{ $siteConfig->site_name}} berhak untuk membatalkan taruhan yang ditempatkan.
                                </li>
                                <br />
                                <li>Semua taruhan akan dianggap tidak sah jika hasil dari suatu
                                    pertandingan diketahui pada saat penempatan taruhan Anda. {{ $siteConfig->site_name}}
                                    berhak untuk membatalkan taruhan yang ditempatkan. </li>
                                <br />
                                <li>Waktu mulai yang diiklankan, kartu merah, skor, dan atau informasi
                                    apa pun yang ditampilkan di Situs hanya untuk tujuan informasi.</li>
                                <br />
                                <li>Hasil pertandingan atau acara akan ditentukan pada hari kesimpulan
                                    untuk tujuan taruhan kecuali dinyatakan lain dalam aturan untuk
                                    setiap olahraga atau acara. Setiap penyelidikan selanjutnya yang
                                    dapat mengakibatkan keputusan terbalik tidak akan dikenali oleh
                                    {{ $siteConfig->site_name}} setelah 72 jam dari pemrosesan hasil. Dalam 72 jam setelah
                                    hasil diproses, {{ $siteConfig->site_name}} hanya akan mereset / mengoreksi hasil karena
                                    kesalahan manusia atau kesalahan pada situs web yang merujuk. </li>
                                <br />
                                <li>Jika tempat untuk acara olahraga diubah, semua taruhan yang
                                    ditempatkan berdasarkan tempat asli akan batal dan tidak berlaku,
                                    kecuali untuk permainan yang dimainkan di tanah netral.</li>
                                <br />
                                <li>Pemenang acara atau pertandingan akan ditentukan pada tanggal
                                    kesimpulan acara sesuai dengan aturan Pertandingan.</li>
                                <br />
                                <li>{{ $siteConfig->site_name}} tidak mengakui permainan yang ditangguhkan, protes atau
                                    keputusan yang dibatalkan untuk tujuan taruhan.</li>
                                <br />
                                <li>Jika Anda memasukkan pilihan non-runner atau void dalam taruhan
                                    berganda, potensi pembayaran akan disesuaikan sesuai dengan sisa
                                    pilihan yang valid.</li>
                                <br />
                                <li>Anda mengakui dan menerima bahwa semua harga dan peluang tunduk pada
                                    variasi dan hanya menjadi tetap pada saat taruhan ditempatkan.</li>
                                <br />
                                <li>Di mana kesalahan nyata, kesalahan atau kegagalan sistem
                                    menghasilkan ganjil, garis, atau handicap yang salah dalam taruhan,
                                    taruhan, atau bagian taruhan itu jika taruhan berganda / parlay akan
                                    batal dan tidak berlaku.</li>
                                <br />
                                <li>Taruhan yang ditempatkan secara bersamaan pada satu acara tidak akan
                                    diterima.</li>
                                <br />
                                <li>Keputusan {{ $siteConfig->site_name}} bersifat final sehubungan dengan taruhan apa pun
                                    dan transaksi yang terkait dengannya.</li>
                                <br />
                                <li>Anda sepenuhnya menerima dan menyetujui bahwa perangkat lunak
                                    penghasil angka acak ("RNG") akan menentukan pengocokan dan
                                    pembagian kartu dan acara yang dibuat secara acak lainnya yang
                                    diperlukan dalam Pertandingan.</li>
                                <br />
                                <li>Anda sepenuhnya menerima dan menyetujui bahwa koneksi internet WAP
                                    tidak sepenuhnya stabil. Perusahaan tidak bertanggung jawab atas
                                    taruhan yang salah tempat. Semua taruhan yang ditempatkan akan
                                    didasarkan pada catatan taruhan di sistem kami. Jika Anda tidak
                                    yakin tentang salah satu taruhan yang telah Anda tempatkan, silakan
                                    hubungi tim layanan pelanggan kami atau periksa catatan taruhan Anda
                                    dalam pernyataan akun Anda. </li>
                                <br />
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse8">
                        <h5 class="panel-title info">
                            8. Penyelesaian Transaksi </h5>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Untuk menggunakan kartu kredit atau debit, nama pemegang kartu harus
                                sama dengan nama yang diberikan dalam proses pendaftaran. {{ $siteConfig->site_name}} berhak
                                untuk menahan penyelesaian transaksi apa pun jika ada perbedaan antara
                                nama pemegang kartu dan nama yang diberikan dalam proses pendaftaran.
                                <br /><br>
                                Anda bertanggung jawab untuk membayar semua uang kepada {{ $siteConfig->site_name}} dan /
                                atau anggota lain. Sehubungan dengan pembayaran yang dilakukan oleh
                                Anda, jika kami menduga bahwa Anda telah terlibat atau berusaha untuk
                                terlibat dalam kegiatan yang curang, melanggar hukum, tidak jujur atau
                                tidak pantas saat menggunakan Situs, termasuk tanpa batasan, terlibat
                                dalam manipulasi permainan menggunakan kartu kredit curian, atau lainnya
                                aktivitas penipuan (termasuk tolak bayar, pembalikan lain dari
                                pembayaran, atau pencucian uang) {{ $siteConfig->site_name}} berhak untuk mengambil tindakan
                                yang dianggap sesuai, termasuk segera memblokir akses ke Situs,
                                menangguhkan dan / atau menutup akun Anda, menyita semua uang diadakan
                                di akun {{ $siteConfig->site_name}} Anda dan berbagi informasi ini (bersama dengan identitas
                                Anda) dengan situs game online lainnya, lembaga keuangan, otoritas
                                terkait dan / atau setiap orang atau entitas yang memiliki hak hukum
                                untuk informasi tersebut. {{ $siteConfig->site_name}} juga dapat mengambil tindakan hukum
                                terhadap Anda. Segala biaya yang dikeluarkan oleh {{ $siteConfig->site_name}} akan diklaim
                                dari Anda.
                                <br /><br>
                                Sesuai dengan hukum Isle of Man, semua hutang judi online dapat
                                ditegakkan oleh hukum.
                                <br><br>
                                Jumlah maksimum yang dapat dimenangkan oleh satu pelanggan dalam satu
                                hari taruhan, terlepas dari taruhan, adalah USD $ 500.000 atau setara
                                dalam mata uang yang diterima.
                                <br><br>
                                Kemenangan tidak termasuk jumlah taruhan. Jika pilihan yang diambil dari
                                berbagai kategori digabungkan dalam beberapa taruhan atau akumulatif,
                                batas kemenangan maksimum terendah akan berlaku.
                                <br><br>
                                Jika dana dikreditkan ke akun Anda karena kesalahan, Anda bertanggung
                                jawab untuk memberi tahu {{ $siteConfig->site_name}} tentang kesalahan tanpa penundaan.
                                Setiap kemenangan setelah kesalahan dan sebelum pemberitahuan dari
                                {{ $siteConfig->site_name}}, apakah terkait dengan kesalahan atau tidak, akan dianggap tidak
                                valid dan harus dikembalikan ke {{ $siteConfig->site_name}}.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse9">
                        <h5 class="panel-title info">
                            9. Penarikan Dana Dari Akun Anda </h5>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Kemenangan Anda akan dikreditkan ke akun Anda dan hanya dapat ditarik
                                sesuai dengan Syarat & Ketentuan kami dan dengan memberikan salinan
                                identifikasi foto yang valid dan / atau kartu kredit / debit untuk
                                kepuasan kami.<br><br>
                                Kami tidak akan melepaskan dana Anda dalam keadaan apa pun jika nilai
                                penuh dari setoran Anda tidak dimainkan secara penuh.
                                <br>

                                <br>
                                Penarikan uang dari akun Anda hanya dapat dilakukan dalam mata uang yang
                                sama dengan setoran dilakukan.
                                <br><br>
                                Semua biaya bank yang {{ $siteConfig->site_name}} timbul sehubungan dengan salah satu
                                transaksi taruhan Anda akan diganti oleh Anda. {{ $siteConfig->site_name}} berhak untuk
                                memotong dan mengimbangi hal-hal yang disebutkan sebelumnya dari
                                kemenangan yang dibayarkan kepada Anda atau dari akun Anda sebagaimana
                                adanya
                                <br><br>
                                Setiap deposit membutuhkan setidaknya 1(satu) kali putaran
                                turnover/rollover dari nilai deposit sebelum penarikan dapat dilakukan.
                                Contoh deposit = IDR 100rb, maka ketentuan turnover/rollover = IDR 100rb
                                x 1 = IDR 100rb<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse10">
                        <h5 class="panel-title info">
                            10. Bonuses </h5>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Bonus hanya dapat digunakan di Game seperti yang ditentukan saat Bonus
                                ditawarkan kepada Anda. Penerimaan Bonus apa pun harus sesuai dengan
                                Perjanjian ini.
                                <br /><br>
                                Anda tidak berhak untuk menarik jumlah Bonus apa pun dan Anda tidak
                                boleh mengambil uang tunai untuk mendanai akun Anda tanpa terlebih
                                dahulu mematuhi persyaratan yang berlaku termasuk, tanpa batasan,
                                sehubungan dengan kualifikasi atau batasan apa pun.
                                <br />

                                <br />
                                {{ $siteConfig->site_name}} berhak, tanpa kewajiban apa pun kepada Anda atau pihak lain,
                                untuk menarik atau memodifikasi bonus atau promosi tersebut dan / atau
                                syarat dan ketentuan khusus yang mengatur hal yang sama setiap saat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse11">
                        <h5 class="panel-title info">
                            11. Penafian dan Batasan Tanggung Jawab </h5>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>

                                Setiap partisipasi dalam Pertandingan adalah atas pilihan,
                                kebijaksanaan, dan risiko Anda sendiri. Dengan memainkan Game, Anda
                                mengakui bahwa Anda tidak menemukan Game atau Layanan itu menyinggung,
                                tidak menyenangkan, tidak adil, atau tidak senonoh dengan cara apa pun.
                                <br><br>
                                Beberapa yurisdiksi hukum belum membahas legalitas perjudian daring
                                online dan lepas pantai sementara yang lain secara khusus menjadikan
                                perjudian daring dan / atau lepas pantai ilegal. Kami tidak bermaksud
                                bahwa siapa pun harus menggunakan Situs dan / atau Layanan di mana
                                penggunaan tersebut ilegal. Ketersediaan Layanan dan Situs tidak boleh
                                ditafsirkan sebagai tawaran, permintaan atau undangan oleh kami untuk
                                menggunakan Situs di negara mana pun di mana penggunaan tersebut ilegal.
                                Merupakan tanggung jawab Anda sepenuhnya untuk memastikan bahwa setiap
                                saat Anda mematuhi hukum yang mengatur Anda dan bahwa Anda memiliki hak
                                hukum yang lengkap untuk menggunakan Situs dan Layanan.
                                <br><br>
                                Dalam situasi apa pun, termasuk kelalaian, akan {{ $siteConfig->site_name}} bertanggung jawab
                                atas segala kerusakan atau kerugian, tanpa batasan, yang dianggap atau
                                diduga disebabkan oleh atau disebabkan oleh Situs atau kontennya,
                                termasuk tanpa batasan keterlambatan atau gangguan dalam operasi atau
                                transmisi. , komunikasi, kegagalan saluran, siapa pun yang menggunakan
                                atau menyalahgunakan situs atau kontennya, atau kesalahan atau kelalaian
                                dalam konten.
                                <br><br>
                                {{ $siteConfig->site_name}} menyangkal semua dan semua jaminan, pernyataan dan tanggung jawab
                                sehubungan dengan aspek apa pun dari Layanan, Situs dan Informasi, yang
                                dapat diberikan oleh pihak ketiga, termasuk tetapi tidak terbatas pada
                                informasi dan penyedia telekomunikasi, dan tidak boleh pada apa pun akun
                                bertanggung jawab atas default, pelanggaran atau tidak bertindak dari
                                mitra pihak ketiga tersebut.
                                <br><br>
                                Dalam situasi apa pun, termasuk kelalaian, akan {{ $siteConfig->site_name}}, perusahaan
                                terkait, afiliasi, mitra, pejabat, karyawan, dan agen kami bertanggung
                                jawab atau berkewajiban atas segala kerusakan, kehilangan, atau
                                pengeluaran, termasuk tanpa batasan kerusakan langsung, tidak langsung,
                                konsekuensial, atau kerusakan khusus atau ekonomi kerugian yang timbul
                                dari atau sehubungan dengan akses Anda atau penggunaan Layanan, Situs,
                                Perangkat Lunak dan Informasi, atau pemuatan Anda, instalasi atau
                                penggunaan Perangkat Lunak terlepas dari apakah {{ $siteConfig->site_name}} telah diberitahu
                                tentang kemungkinan seperti itu atau tidak.
                                <br><br>
                                Anda mengakui bahwa sebagian atau seluruh Informasi dapat bersifat
                                sementara dan dapat direvisi, diubah, atau dimodifikasi, sebagaimana
                                diatur dalam Syarat & Ketentuan ini. Oleh karena itu Anda mengakui bahwa
                                Informasi ini disediakan semata-mata untuk referensi dan bukan merupakan
                                saran atau ajakan, dan bukan merupakan subjek dari, dan tidak akan
                                menjadi dasar dari representasi yang mengikat, garansi, kewajiban
                                kontrak, atau mengandalkan bagian Anda dalam bentuk apa pun. .
                                <br><br>
                                Anda dengan ini mengakui dan menyetujui bahwa semua penafian dan
                                pengecualian tanggung jawab yang terkandung dalam Perjanjian ini
                                mewakili alokasi risiko dan manfaat Perjanjian yang adil dan masuk akal,
                                dengan mempertimbangkan semua faktor yang relevan, termasuk tanpa
                                batasan nilai pertimbangan yang diberikan oleh Anda ke {{ $siteConfig->site_name}}. Anda
                                selanjutnya setuju bahwa penafian dan batasan ini akan dapat ditegakkan
                                sejauh diizinkan oleh hukum yang berlaku.
                                <br><br>
                                Jika ada perbedaan antara hasil yang ditampilkan di Perangkat Anda dan
                                server kami, hasil yang ditampilkan di server kami akan mengatur hasil
                                Game. Selain itu, Anda memahami dan menyetujui bahwa (tanpa mengurangi
                                hak dan pemulihan Anda yang lain) Catatan {{ $siteConfig->site_name}} akan menjadi otoritas
                                terakhir dalam menentukan ketentuan partisipasi Anda dalam Pertandingan,
                                aktivitas yang dihasilkan dari sana dan keadaan di mana mereka terjadi.
                                <br><br>
                                {{ $siteConfig->site_name}} menyangkal semua dan semua jaminan, tersurat maupun tersirat,
                                sehubungan dengan Layanan yang diberikan kepada Anda "sebagaimana
                                adanya" dan kami tidak memberikan jaminan atau representasi apa pun
                                mengenai kualitas, kesesuaian untuk tujuan, kelengkapan atau
                                keakuratannya.
                                <br><br>
                                Terlepas dari upaya kami untuk memberi Anda layanan dengan kualitas,
                                keselamatan, dan keamanan tertinggi, kami tidak membuat jaminan bahwa
                                Layanan tidak akan terganggu, tepat waktu atau bebas dari kesalahan,
                                bahwa cacat akan diperbaiki atau bahwa Layanan yang ditemukan di
                                dalamnya akan bebas dari virus atau bug.
                                <br><br>
                                {{ $siteConfig->site_name}} berhak untuk menangguhkan, menghentikan, memodifikasi, menghapus
                                atau menambah Layanan, sementara atau secara permanen, dengan
                                kebijaksanaan mutlak dengan efek langsung dan tanpa kewajiban untuk
                                memberi Anda pemberitahuan dan kami tidak akan bertanggung jawab dengan
                                cara apa pun. untuk setiap kerugian yang diderita sebagai akibat atau
                                keputusan yang dibuat oleh {{ $siteConfig->site_name}} dalam hal ini. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse12">
                        <h5 class="panel-title info">
                            12. Termination, Account Closure or Forfeiture </h5>
                    </div>
                    <div id="collapse12" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                {{ $siteConfig->site_name}} berhak, atas kebijakannya sendiri, untuk membatalkan kemenangan
                                dan kehilangan saldo dalam akun taruhan Anda, untuk mengakhiri
                                Perjanjian dan / atau untuk menangguhkan penyediaan Layanan /
                                menonaktifkan akun Anda jika:
                            </p>
                            <ul>
                                <li>kami mengidentifikasi bahwa Anda memiliki lebih dari satu akun di
                                    kami;</li>
                                <br />
                                <li>Anda melanggar Perjanjian ini, ketentuan Layanan apa pun dari
                                    Perjanjian ini;</li>
                                <br />
                                <li>kami menyadari bahwa Anda telah bermain di situs game atau layanan
                                    daring apa pun dan diduga melakukan penipuan, kolusi (termasuk dalam
                                    kaitannya dengan pengembalian biaya) atau aktivitas yang melanggar
                                    hukum atau tidak patut;</li>
                                <br />
                                <li>informasi pendaftaran Anda salah atau menyesatkan;</li>
                                <br />
                                <li>Anda gagal memberikan informasi identifikasi yang diminta;</li>
                                <br />
                                <li>Anda belum cukup umur;</li>
                                <br />
                                <li>Anda telah "menagih kembali" atau menyebabkan "penagihan kembali"
                                    terhadap kami atau menolak pembelian atau setoran apa pun yang Anda
                                    lakukan ke akun Anda;</li>
                                <br />
                                <li>Anda telah mengizinkan (sengaja atau tidak sengaja) orang lain untuk
                                    menggunakan akun Anda;</li>
                                <br />
                                <li>Anda menyetor uang yang berasal dari penjahat atau kegiatan ilegal
                                    atau tidak sah lainnya,</li>
                                <br />
                                <li>Anda gagal mengungkapkan bahwa Anda berlokasi di Hong Kong, Belanda,
                                    Filipina, Singapura, Swiss, Taiwan, Turki, dan Amerika Serikat;</li>
                                <br />
                            </ul>
                            <p>
                                Jika ketentuan Layanan ditangguhkan dan / atau akun Anda dinonaktifkan
                                sesuai dengan persyaratan di sini, ketentuan Layanan hanya akan
                                dipulihkan dan / atau akun Anda diaktifkan kembali setelah tindakan
                                perbaikan yang diperlukan (jika dapat diperbaiki) telah diambil oleh
                                Anda dan perbaikan tersebut telah diverifikasi untuk kepuasan penuh
                                kami.
                                <br /><br />
                                {{ $siteConfig->site_name}} memegang otoritas atas penerbitan, pemeliharaan, dan penutupan
                                akun pengguna. Keputusan manajemen {{ $siteConfig->site_name}} sehubungan dengan segala aspek
                                akun Anda, penggunaan Layanan atau Situs, adalah final dan tidak akan
                                terbuka untuk ditinjau atau diajukan banding. Karena itu, kami berhak
                                untuk menutup akun Anda kapan saja dengan alasan apa pun. Kami akan
                                memberi Anda pemberitahuan yang masuk akal sebelum melakukannya, kecuali
                                keadaan menentukan bahwa kami secara hukum atau praktis tidak dapat
                                melakukannya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse13">
                        <h5 class="panel-title info">
                            13. Pelanggaran Perjanjian dan Ganti Rugi </h5>
                    </div>
                    <div id="collapse13" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Tanpa mengurangi hak lain, jika Anda melanggar seluruh atau sebagian
                                ketentuan yang terkandung di sini, {{ $siteConfig->site_name}} berhak untuk mengambil
                                tindakan yang dianggap perlu, termasuk mengakhiri Perjanjian ini, segera
                                memblokir akses Anda ke Layanan dan Situs , mengakhiri akun Anda dengan
                                {{ $siteConfig->site_name}}, menyita semua uang yang ada di yang relevan akun {{ $siteConfig->site_name}} dan /
                                atau mengambil tindakan hukum terhadap Anda.
                                <br /><br>
                                Anda setuju untuk mengganti rugi sepenuhnya, membela, dan tidak
                                membahayakan {{ $siteConfig->site_name}} dan direktur pemegang saham, karyawan, pejabat,
                                pemegang lisensi, pemberi lisensi, afiliasi dan anak perusahaannya dari
                                dan terhadap semua klaim, tuntutan, kewajiban, kerusakan, kerugian,
                                biaya dan pengeluaran, termasuk biaya hukum dan biaya lain apa pun,
                                bagaimanapun disebabkan, yang mungkin timbul sebagai akibat dari:
                            </p>
                            <ul>
                                <li>Pelanggaran Anda terhadap Perjanjian, secara keseluruhan atau
                                    sebagian;</li>
                                <br />
                                <li>Pelanggaran oleh Anda atas hukum apa pun atau hak pihak ketiga apa
                                    pun;</li>
                                <br />
                                <li>Digunakan oleh Anda oleh Layanan dan / atau Situs atau digunakan
                                    oleh orang lain yang mengakses Layanan dan / atau Situs menggunakan
                                    detail login Anda, baik dengan otorisasi Anda atau tidak.</li>
                                <br />
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse14">
                        <h5 class="panel-title info">
                            14. Hak lebih tinggi </h5>
                    </div>
                    <div id="collapse14" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>Aturan permainan dan syarat dan ketentuan lainnya yang mengatur
                                penggunaan dan akses ke Layanan dan Situs akan menjadi bagian integral
                                dari Perjanjian.
                                <br /><br />
                                Jika ada pertentangan antara ketentuan peraturan Game, syarat dan
                                ketentuan lainnya yang mengatur penggunaan dan akses ke Layanan dan
                                Situs dan Perjanjian, kecuali jika secara tegas dinyatakan sebaliknya,
                                aturan Game akan berlaku.<br />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel info panel-default">
                    <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                        data-target="#collapse15">
                        <h5 class="panel-title info">
                            15. Peraturan pemerintah </h5>
                    </div>
                    <div id="collapse15" class="panel-collapse collapse">
                        <div class="info panel-body">
                            <p>
                                Perjanjian dan segala hal yang berkaitan dengannya akan diatur oleh, dan
                                ditafsirkan sesuai dengan, hukum Isle of Man. Masing-masing pihak secara
                                irrevocably setuju bahwa pengadilan yang relevan di Isle of Man akan
                                memiliki yurisdiksi eksklusif dalam kaitannya dengan klaim,
                                perselisihan, atau perbedaan apa pun mengenai Perjanjian dan masalah apa
                                pun yang timbul darinya dan tanpa dapat ditarik kembali melepaskan hak
                                apa pun yang mungkin harus ditolak oleh suatu tindakan. dibawa ke
                                pengadilan tersebut, atau untuk mengklaim bahwa tindakan tersebut telah
                                dibawa dalam forum yang tidak nyaman, atau bahwa pengadilan tersebut
                                tidak memiliki yurisdiksi.
                            </p>
                            <h3>Lain-lain</h3>
                            <p>
                                Versi bahasa Inggris dari Perjanjian ini akan menjadi versi yang berlaku
                                dalam hal terjadi perbedaan antara versi terjemahan Perjanjian ini.
                                <br /><br />
                                Jika suatu ketentuan dalam Perjanjian ini adalah atau menjadi ilegal,
                                tidak sah atau tidak dapat diberlakukan di yurisdiksi mana pun, yang
                                tidak akan mempengaruhi keabsahan atau keberlakuan dalam yurisdiksi dari
                                ketentuan lain apa pun dalam Perjanjian ini atau validitas atau
                                keberlakuan dalam yurisdiksi lain dari itu atau ketentuan lain dari
                                Perjanjian ini .
                                <br /><br />
                                Judul dalam Perjanjian ini hanya untuk kenyamanan referensi dan tidak
                                memengaruhi konstruksi atau interpretasi ketentuan apa pun.
                                <br /><br />
                                Jika {{ $siteConfig->site_name}} gagal atau menunda kinerja kewajiban apa pun berdasarkan
                                Perjanjian karena alasan terjadinya peristiwa yang berada di luar
                                kontrol {{ $siteConfig->site_name}}, termasuk, tetapi tidak terbatas pada Kisah Para Dewa,
                                pembatasan pemerintah, perang, pemberontakan, kegagalan transmisi atau
                                sistem, kegagalan atau gangguan dalam penyediaan layanan telekomunikasi
                                atau broadband dan kegagalan atau kekurangan pasokan atau peralatan
                                listrik, kegagalan atau keterlambatan tersebut bukan merupakan
                                pelanggaran Perjanjian.
                                <br /><br />
                                Tidak ada kegagalan atau keterlambatan pada bagian dari {{ $siteConfig->site_name}} untuk
                                menggunakan hak, ganti rugi, kekuasaan atau hak istimewa di bawah ini
                                akan beroperasi sebagai pengabaiannya, atau pelaksanaan hak, pemulihan,
                                kekuasaan atau hak istimewa lainnya.
                                <br /><br />
                                {{ $siteConfig->site_name}} berhak untuk menetapkan perjanjian ini, secara keseluruhan atau
                                sebagian, kapan saja tanpa pemberitahuan. Anda tidak boleh mengalihkan
                                hak atau kewajiban Anda berdasarkan Perjanjian ini.
                                <br /><br />
                                Tidak ada sesuatu pun dalam Perjanjian ini yang dapat menciptakan atau
                                memberikan hak atau keuntungan lain yang menguntungkan pihak ketiga mana
                                pun yang tidak menjadi pihak dalam Perjanjian ini.
                                <br /><br />
                                Tidak ada sesuatu pun dalam Perjanjian ini yang dapat membuat atau
                                dianggap menciptakan kemitraan, agensi, pengaturan kepercayaan, hubungan
                                fidusia atau usaha patungan antara {{ $siteConfig->site_name}} dan Anda.
                                <br /><br />
                                Perjanjian ini merupakan keseluruhan pengertian dan perjanjian antara
                                {{ $siteConfig->site_name}} dan Anda mengenai Layanan dan Situs dan menggantikan perjanjian,
                                pengertian, atau pengaturan sebelumnya antara {{ $siteConfig->site_name}} dan Anda.
                                <br /><br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(function() {
            var pg = "terms_conditions";
            var selectedMenu = $('.navbar-nav .nav-link').filter(function() {
                return $(this).data("pg").toLowerCase() == pg.toLowerCase();
            }).text();
            $('#menu-select--info').text(selectedMenu);


            $('#navbar-toggler--info').click(function() {
                $('.info .navbar-collapse').toggleClass('show in');

            })
        });
    </script>
</x-mobile.app>
