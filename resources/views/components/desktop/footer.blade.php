<div class="site-footer">
    <div class="container">
        <div class="footer-content clearfix">
            <br />
            <div>

                <div class="pull-right footerlink">
                    <ul class="clearfix">
                        <li>
                            <div class="copyright">
                                ©2024 {{ $siteConfig->site_name }} . Seluruh hak cipta | 18+ | v1.60
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="footerlink">
                    <ul class="clearfix">
                        <li><a href="{{ url('info/faq-general') }}">Tentang kami</a></li>
                        <li>|</li>
                        <li><a href="{{ url('info/faq-banking') }}">Info Perbankan</a></li>
                        <li>|</li>
                        <li><a href="{{ url('info/faq-general') }}">Pusat Info</a></li>
                        <li>|</li>
                        <li><a href="{{ url('contact-us') }}">Hubungi kami</a></li>
                        <li>|</li>
                        <li><a href="{{ url('info/terms-terms_conditions') }}">Terms and Conditions</a></li>
                        <li>|</li>
                        <li><a href="{{ url('info/responsiblegaming') }}">Responsible Gaming</a></li>



                    </ul>
                </div>
                <div class="security_info">
                </div>
                <amp-state id="footerVisible">
                    <script type="application/json"> false </script>
                </amp-state>

                <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>
                <br />
                <div class="footer-desc">
                </div>
                <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>
                <br>
                <div class="footer-misc">
                    <div class="row equal"
                        style="justify-content:space-between; overflow-wrap: break-word; word-wrap: break-word;">
                        @foreach ($config_firebase['info-footer'] as $infoFooter)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="title">{{ $infoFooter['section'] }}</div>
                                <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>
                                @foreach ($infoFooter['columns'] as $columns)
                                    <div class="box-wrapper mt-4">
                                        <div class="subtitle">{{ $columns['subtitle'] }}</div>
                                        <div class="box-content mt-2"
                                            style="overflow-wrap: break-word; word-wrap: break-word;">
                                            {{ $columns['content'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>

            <div class="clearfix mt-3">
                <div class="col-lg-5 pull-left text-left footerlink" style="padding: 0px;">

                    <div class="small">
                        Platform Penyedia Layanan </div>
                    <div class="mt-2 footer_btm_logo_img provider_img">
                        <img class="footer_logimg" alt="{{ $siteConfig->site_name }}"
                            src="{{ $siteConfig->site_logo }}" />
                    </div>


                </div>
                <div class="col-lg-4 pull-right text-right social-icons" style="padding: 0px;">
                    <a href="/" target="_blank" data-toggle="tooltip" data-placement="top"
                        title="Ikuti di Facebook" class="button icon circle is-outline facebook"><i
                            class="icon-facebook"></i></a>
                    <a href="https://www.twitter.com/" target="_blank" data-toggle="tooltip" data-placement="top"
                        title="Tweet kami!" class="button icon circle is-outline twitter"><i
                            class="icon-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" data-toggle="tooltip" data-placement="top"
                        title="Instagram kami!" class="button icon circle is-outline instagram"><i
                            class="icon-instagram"></i></a>
                    <a href="https://" target="_blank" data-toggle="tooltip" data-placement="top"
                        title="Lihat video youtube kami untuk mengetahui lebih lanjut!"
                        class="button icon circle is-outline youtube"><i class="icon-youtube-play"></i></a>
                </div>
            </div>
            <!-- IF NOT , show payment method row-->
            <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>
            <div class="clearfix mt-3">
                <div class="row">
                    <div class="col-md-10 col-sm-8">
                        <div class="pull-left footerlink">
                            <div class="small">
                                Cara Pembayaran </div>


                            <div class="payment_imgs mt-2">

                                <img class="img-fluid" style="width: 150px; border-radius:10px" alt="banks"
                                    src="https://files.sitestatic.net/sprites/bank_logos/bank_col.jpg?v=3">

                                <!--removed ewallet details for ugglobal jira req - FRONT-3852 -->
                                <img class="img-fluid" style="width: 150px; border-radius:10px" alt="e-wallet"
                                    src="https://files.sitestatic.net/sprites/bank_logos/ewallet_col.jpg?v=3">

                                <img class="img-fluid" style="width: 150px; border-radius:10px" alt="pulsa"
                                    src="https://files.sitestatic.net/sprites/bank_logos/pulsa_col.jpg?v=3">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="pull-right text-right footerlink">
                            <div class="small">
                                Browser yang Disarankan </div>
                            <ul class="text-t600 mt-2">
                                <li>
                                    <h2><i class="icon-chrome"></i></h2>
                                </li>
                                <li>
                                    <h2><i class="icon-firefox"></i></h2>
                                </li>
                                <li class="pr-0">
                                    <h2><i class="icon-safari"></i></h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div style="height: 5px; margin-top: 15px;" class="dotted_line"></div>
            <div class="clearfix mt-3">
                <div class="pull-left footerlink">
                    <div class="small">
                        Game Provider </div>

                    <div class="footer_pwrd_by_logo">
                        <img src="https://files.sitestatic.net/images/footer_provider_col.png?v=0.5">
                    </div>

                </div>
            </div>
            <br />
            <br />
        </div>
    </div>
</div>
</div>
