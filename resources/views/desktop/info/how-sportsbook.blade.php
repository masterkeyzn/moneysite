<x-desktop.app>
    <div class="content my01">

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
                            <a href="{{ url('info/faq-general') }}" class="">

                                <div> <i class="icon-help-circle"></i></div>

                                <div>FAQ</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/how-sportsbook') }}" class="active">
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
                <nav class="navbar navbar-expand-lg navbar-light navbar-default ">
                    <!--<span class="menu-select" id="menu-select">General</span>-->
                    <div class="navbar-header d-lg-none clearfix">
                        <button class="navbar-toggler" id="navbar-toggler--info" type="button"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="icon-bars navbar-toggler-icon"></i>
                        </button>
                        <div class="menu-select d-lg-none" id="menu-select--info"></div>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" data-pg="sportsbook"
                                    href="{{ url('info/how-sportsbook') }}"
                                    (click)="strSelectedMenu='sportsbook';">Sportsbook and Live Betting <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-pg="live_casino"
                                    href="{{ url('info/how-live_casino') }}"
                                    (click)="strSelectedMenu='live_casino';">Live Casino</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-pg="slots"
                                    href="{{ url('info/how-slots') }}"
                                    (click)="strSelectedMenu='slots';">Slots</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" data-pg="poker"
                                    href="{{ url('info/how-poker') }}"
                                    (click)="strSelectedMenu='poker';">Poker</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="border-box">
                    <h5 style="font-size: 1.09375rem;">Cara Bermain Sportbook dan Live Betting</h5>
                    <p>Berikut merupakan pengenalan menu-menu dari halaman Sports dengan contoh jenis permainan Soccer.
                        Silahkan perhatikan gambar di bawah ini.</p>
                    <div><img src="https://files.sitestatic.net/images/Tutorial/Poker/howplay_sports.jpg"
                            class="img-responsive" alt="how to play Sportsbook" /></div>
                    <br />
                    <div>
                        <div class="fs-lg t">Keterangan</div>
                        <ul id="term-list">
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Jenis Game (Menu Olahraga)</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">
                                                Anda bisa memilih berbagai jenis permainan olahraga yang Anda inginkan
                                                seperti Permainan Angka, Olahraga Virtual, Bola Basket, dan masih banyak
                                                lagi. Sesuai gambar 1, ada pilihan <i>Early, Today, dan Live.</i>
                                            </p>
                                        </li>
                                        <li>
                                            <p align="justify">Early artinya pertandingan akan segera berlangsung
                                                entah itu besok atau lusa.</p>
                                        </li>
                                        <li>
                                            <p align="justify">Hari ini berarti pertandingan yang akan berlangsung
                                                hari ini.</p>
                                        </li>
                                        <li>
                                            <p align="justify">Live artinya pertandingan yang sedang berlangsung pada
                                                saat itu.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Waktu</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">Ini menunjukkan kapan pertandingan itu berlangsung</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Peristiwa</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">Acara menunjukkan tajuk pertandingan. Pada gambar di
                                                atas terlihat pertandingan di China Football Super League.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Tim yang bersaing</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">Ini menunjukkan pertandingan antara Guizhou Renhe
                                                melawan Giangzhou R&F. Kemudian pertandingan antara Shanghai SIPG (warna
                                                merah) melawan Tianjin Teda (warna biru).</p>
                                        </li>
                                        <li>
                                            <p align="justify">Tim merah berarti tim yang memberikan voor kepada
                                                lawannya.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Taruhan & Jenis Pasar</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">
                                                Ini menunjukkan beberapa jenis taruhan yang bisa Anda mainkan. Pada
                                                gambar di atas Anda dapat melihat jenis taruhan yang dapat Anda pilih
                                                seperti FT. HDP, FT. O / U, FT. 1X2, 1H. HDP, 1H O / U, 1H. 1X2. Setiap
                                                jenis Taruhan juga memiliki pasar dan nilai Peluang yang berbeda,
                                                tergantung pada jenis taruhan yang Anda pilih. Ada nilai Peluang yang
                                                berwarna merah dan biru. Peluangnya merah dan minus dikenai pajak. Cara
                                                bermain di berbagai jenis taruhan akan dijelaskan lebih lanjut. </p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <div class="title"><b>Cara Memasang Taruhan pada Produk Olahraga</b></div>
                            <p align="justify">Untuk cara memasang taruhan pada produk Sports sangatlah mudah. Anda
                                hanya perlu mengklik Odds yang Anda inginkan.</p>
                        </ul>
                        <div class="fs-md">Contoh:</div>
                        <p>
                            Di sini kita akan memasang taruhan tipe FT. HDP dalam pertandingan Guizhou Renhe melawan
                            Guangzhou dengan pasar voor (Handicap) 0 dengan memilih kemenangan untuk Guizhou Renhe. Jadi
                            yang kita lakukan adalah klik Odds -1.26 (merah) oleh Guizhou Renhe dengan handicap 0.
                            Kemudian di sebelah kiri akan muncul kotak taruhan untuk memasukan nilai nominal taruhan
                            yang ingin kita pasang, kemudian klik Proses Taruhan. <br />
                            <br />
                            Jika Anda ingin memasang taruhan jenis lain, Anda dapat mengikuti langkah-langkah yang sama
                            seperti yang telah dijelaskan sebelumnya.'
                        </p>
                    </div>

                </div>
            </div>
        </div>



        <script>
            $(function() {
                var pg = "sportsbook";
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