<x-desktop.app>
    <div class="content my01">

        <x-carousels :carousels="$carousels" />

        <div class="ann-wrapper">
            <div class="container">
                <div class="clearfix pt-2">
                    <div class="pull-left pointer">
                        <div>
                            <i class="icon-megaphone"></i>
                        </div>
                    </div>
                    <div class="ann-content">
                        <marquee scrollamount="5">{{ $siteConfig->marquee }}</marquee>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-wrapper container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-xs-6">
                    <div class="jackpot" name="jackpot_click" onclick="dataLayer.push({'event': 'jackpot_click'});">
                        <img class="img-fluid"
                            src="{{ $siteConfig->proggressive_img }}"
                            alt="{{ $siteConfig->site_name}}" width="540" height="118" />

                        <div class="txt-overlay">
                            <div class="text-content">
                                <span id="jackpot_amount">...Loading</span>
                            </div>
                        </div>
                    </div>
                </div>
                <x-desktop.hot-games />
            </div>
            <x-last-transaction />
            <x-home-info />
        </div>

        <script>
            $(document).ready(function() {
                ajax_jackpot();

                setInterval(function() {
                    if (window.currencyCode == 'THB') {
                        prize += 10;
                    } else {
                        prize += getRandomIntInclusive(2451, 3470);
                    }
                    prize = parseFloat(prize);
                    prize = prize;
                    $('#jackpot_amount').html(window.currencyCode + ' ' + commaSeparateNumber(prize, true));
                }, 751);

            });
        </script>
    </div>


    <x-desktop.footer />
</x-desktop.app>
