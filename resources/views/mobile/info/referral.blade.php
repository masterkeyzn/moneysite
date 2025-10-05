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
                        <a href="{{ url('info/how-sportsbook') }}" class="">
                            <div><i class="icon-list-numbered"></i> </div>
                            <div>HOW TO PLAY </div>
                        </a>
                    </div>

                    <div>
                        <a href="{{ url('info/referral') }}" class="active">
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
            <div class="border-box">
                <div class="fs-lg title">
                    {{ $siteConfig->site_name}} Referral </div>
                <p>
                    Referral {{ $siteConfig->site_name}} adalah bisnis online yang memanfaatkan perkembangan pesat pemasaran
                    online saat ini. Kami bukan yang pertama di bisnis Referral, namun kami satu-satunya
                    yang menawarkan kemudahan proses kerjasama Referral ini. </p>
                <div class="fs-md title">Mengapa memilih bisnis Referral {{ $siteConfig->site_name}}?</div>
                <p>
                    Referral {{ $siteConfig->site_name}} menawarkan bisnis yang andal dengan prospek meningkat setiap hari,
                    fleksibilitas dan kepercayaan adalah moto kami dalam membangun kerja sama yang erat.
                    Bagi kami keberhasilan {{ $siteConfig->site_name}} adalah kesuksesan kami bersama. Dan oleh karena itu
                    kami memastikan Anda tidak salah memilih kami sebagai mitra bisnis dengan prospek
                    online yang tepercaya dan jelas di masa mendatang. </p>
                <div class="fs-md title">Kami janjikan</div>
                <p>
                    {{ $siteConfig->site_name}} akan selalu berusaha menghadirkan layanan yang cepat dan andal serta
                    permainan berkualitas produk yang aman dan nyaman untuk dimainkan oleh anggota di
                    seluruh dunia tidak hanya di Indonesia. Dan optimalkan layanan kami yang sangat baik
                    dengan layanan pelanggan 24 jam online. </p>
                <div class="fs-md title">Stabilitas dan keamanan</div>
                <p>Kami memastikan keamanan data Anda dengan tingkat keamanan tinggi yang didukung oleh
                    teknologi terbaru. Tingkat stabilitas tinggi perusahaan adalah salah satu proses
                    penjaminan transaksi Anda berjalan dengan lancar dan aman.</p>
                <p>&nbsp;</p>
            </div>

        </div>
    </div>



    <script>
        $(function() {
            var pg = "";
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
