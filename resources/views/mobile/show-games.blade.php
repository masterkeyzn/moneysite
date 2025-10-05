<x-mobile.app>
    <style>
        .rtp-label {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: white;
            margin: 0 5px;
        }

        .rtp-bar {
            background-color: #fff;
            border-radius: 2.5px;
            margin: 0 5px 10px;
        }

        .rtp-bar>div {
            height: 5px;
            border-radius: 2.5px;
        }

        .game-box>h5 {
            margin-bottom: 5px !important;
            padding: 0 5px;
        }
    </style>
    <div class="container @if ($data['category'] === 'e-games') pt-1 games-category @else sub-games @endif">
        <div>
            <h3 class="title" i18n>{{ $data['category'] }} PROVIDERS</h3>
            <div class="row">
            </div>
            @if ($data['category'] !== 'e-games')
                <div class="scroll-wrapper row" style="height:72px;">

                    <div class="left"><button class="prev-btn btn" id="left-button"><i
                                class="icon-keyboard_arrow_left"></i></button></div>

                    <div style="overflow:hidden;width:100%;" class="scroller">
                        <div class="row no-gutters text-center slider-content">
                            @foreach ($config_firebase['provider-nav'][$data['category']] as $provider)
                                <div class="col" style="height:72px;">
                                    <a class="btn-box {{ request()->is($data['category'] . '/' . $provider['provider_code']) ? 'active' : '' }}"
                                        href="{{ url($data['category'] . '/' . $provider['provider_code']) }}"
                                        style="position:relative;overflow: hidden;">
                                        <img alt="" src="{{ $provider['img']['src'] }}"
                                            data-src="{{ $provider['img']['data-src'] }}" *ngIf="showEle"
                                            style="max-width: 70px; height: 50px;" />
                                        <h5 class="text-center game-title">{{ $provider['title'] }}</h5>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="right"><button class="next-btn btn" id="right-button"><i
                                class="icon-keyboard_arrow_right"></i></button></div>


                </div>
            @endif
        </div>
        @if ($data['category'] !== 'e-games')
            <div class="row no-gutters filter">
                <div class="col-xs-10 text-center">
                    <div class="row">
                        <div class="col-xs-3">
                            <button class="btn btn-clear f" data-filter="NEW">BARU</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-clear f" data-filter="TOP">TOP</button>
                        </div>

                        <div class="col-xs-3">
                            <button class="btn btn-clear f" data-filter="ALL">SEMUA </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 text-right">
                    <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger='nifty'
                        data-target='#searchModal'><i class="icon-magnifier"></i></button>
                </div>
                <div class="col-xs-1 text-right">
                    <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger='nifty'
                        data-target='#filterModal-2'><i class="icon-equalizer2"></i></button>
                </div>
            </div>
        @endif
        <br />
        <input type="hidden" value="{{ $data['provider-code'] }}" name="hiddenGameID-001" id="hiddenGameID-001">
        <div class="row games no-gutters pp_slots">
            @foreach ($data['provider'] as $game)
                @php
                    $rtp = rand(4500, 10000) / 100;

                    if ($rtp < 60) {
                        $color = 'red';
                    } elseif ($rtp < 75) {
                        $color = 'goldenrod';
                    } else {
                        $color = 'mediumseagreen';
                    }
                @endphp
                <a class="col-xs-4 col-md-3 game-box text-center" data-title="{{ $game['data-title'] }}"
                    data-filter="{{ $game['data-filter'] }}"
                    onclick="showGameLinks(event,    '{{ $game['data-title'] }}', '{{ $game['data-src'] }}' , '{{ $game['game-code'] }}', '' )">
                    <div class="content-wrapper">
                        <img class="img-fluid ls-is-cached lazyloaded" data-src="{{ $game['data-src'] }}"
                            src ="{{ $game['data-src'] }}">
                    </div>
                    <h5 data-title="{{ $game['data-title'] }}">{{ $game['data-title'] }} </h5>
                    @if ($data['category'] !== 'e-games')
                        <div class="rtp-label">
                            <div>RTP</div>
                            <div>{{ $rtp }}%</div>
                        </div>
                        <div>
                            <div class="rtp-bar">
                                <div style="background-color: {{ $color }}; width: {{ $rtp }}%;">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    @endif
                </a>
            @endforeach

        </div>

    </div>

    <div class="nifty-modal slide-in-bottom " id="gamelinksModal-1">
        <div class="md-content">
            <div class="md-body">
                <div class="row mb-4 no-gutters">
                    <div class="col-xs-5">
                        <img class="img-fluid">
                    </div>
                    <div class="col-xs-7">
                        <div class="g-title"></div>
                    </div>
                    <input type="hidden" value="" name="hiddenGameCode001" id="hiddenGameCode001">
                    <input type="hidden" value="" name="hiddenSubGameCode001" id="hiddenSubGameCode001">

                </div>

                <div class="row  pt-2">
                    <div class="col-xs-5">
                    </div>
                    <div class="col-xs-7 ">
                        <button class="btn  btn-block btn-primary" onclick="subGameLaunch(event,0)" i18n="@PlayNow">
                            MAIN SEKARANG </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
    <script>
        function subGameLaunch(e, isDemo) {
            var noAuth4DemoGameCodes = ['pegasus_slot'];

            var curr = "IDR";
            var gameID = $('#hiddenGameID-001').val();
            var gameCode = $('#hiddenGameCode001').val();
            var subGameCode = $('#hiddenSubGameCode001').val();
            if ((!window.isAuth && !isDemo) || (!window.isAuth && noAuth4DemoGameCodes.includes(gameID))) {
                alertLogin(e);
                return;
            }
            if (gameID == "pp_fishing" && isDemo == 1) {
                var link = 'http://fishingdemo.com';
            } else {
                var link = '{{ url('subGameLaunch') }}?IsDemo=' + isDemo + '&gameID=' + gameID + '&GameCode=' +
                    gameCode + '&SubCode=' + subGameCode + '&currency=' + curr;
            }

            window.popitup(link);
        }
    </script>

    <div class="nifty-modal slide-in-bottom " id="filterModal-2">
        <div class="md-content">
            <div class="md-body">
                <div>
                    <p id="" i18n>Select a filter : </label>
                    <p>
                        <label class="radio">
                            <input class="with-gap" name="rdFilterSubGames" type="radio" value="Classic">
                            <span class="filter-title">
                                Classic
                            </span>
                        </label>
                    </p>
                    <p>
                        <label class="radio">
                            <input class="with-gap" name="rdFilterSubGames" type="radio" value="Buy Bonus">
                            <span class="filter-title">
                                Buy Bonus
                            </span>
                        </label>
                    </p>
                    <p>
                        <label class="radio">
                            <input class="with-gap" name="rdFilterSubGames" type="radio" value="Reel Kingdom">
                            <span class="filter-title">
                                Reel Kingdom
                            </span>
                        </label>
                    </p>
                </div>
                <div>
                    <button class="btn btn-primary" id="btnApplyFilter_01">APPLY</button>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>

    <div class="nifty-modal slide-in-bottom " id="searchModal">
        <div class="md-content">
            <div class="md-body">
                <div>
                    <div class="search_filter">
                        <span class="srch_icon md-close"><i class="icon-keyboard_arrow_left"></i></span>
                        <input type="text" matInput placeholder="Search" [(ngModel)]="filterInput"
                            maxlength="255" class="search" (change)="search($event)" i18n-placeholder="@Search">
                        <button matSuffix class="btn srch_button" (click)="clearSearch($event)"><i
                                class="icon-x-square"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
    <script>
        var joinedJpIds = "";
        var gameCode = "pp_slots";

        function showGameLinks(e, name, imgSrc, gameCode, subCode) {

            $('#gamelinksModal-1 .g-title').text(name);
            $('#gamelinksModal-1 img').attr('src', imgSrc);
            $('#hiddenGameCode001').val(gameCode);
            $('#hiddenSubGameCode001').val(subCode);
            $('#gamelinksModal-1').nifty("show");
        }
        $(document).ready(function() {
            var hotGame = document.location.href.split('hot=')[1];

            if (hotGame) {
                hotGame = hotGame.replace(/\-/g, ' ');
                var exp = new RegExp(hotGame.toLowerCase());
                $('.game-box').each(function() {
                    var isMatch = exp.test(((typeof $(this).data('title') == 'string') ? $(this).data(
                        'title').toLowerCase() : $(this).data('title')));

                    if (isMatch) {
                        $(this).trigger('click');
                        return false;
                    }
                });
            }

            /*search*/
            $('.search').keyup(function() {
                var value = $(this).val().toLowerCase();
                var exp = new RegExp(value);
                $('.game-box').each(function() {
                    var isMatch = exp.test(((typeof $(this).data('title') == 'string') ? $(this)
                        .data('title').toLowerCase() : $(this).data('title')));
                    $(this).toggle(isMatch);
                });
            });
            $('.srch_button').click(function() {
                $('.search').val("");
                $('.search').trigger("keyup");
            });
            /*search end*/


            $('.sub-games .filter .top').addClass('active');

            function filterGameBoxes(self) {

                $('.sub-games .filter .btn').removeClass('active');
                $(self).addClass('active');
                var filterType = $(self).data('filter');

                $('.sub-games .game-box').hide();
                $('.sub-games .game-box').filter(function() {
                    return $(this).data("filter").indexOf(filterType) >= 0;
                }).show();

            }


            //Default to Top Games :
            if (gameCode === 'pgsoft_slot') {
                filterGameBoxes($('.sub-games .filter .btn[data-filter=TOP]')[0]);
            } else {
                filterGameBoxes($('.sub-games .filter .btn[data-filter=ALL]')[0]);
            }

            //Add filter btn event listen
            $('.sub-games .filter .btn.f').click(function() {

                filterGameBoxes(this);
            })

            $('#btnApplyFilter_01').click(function() {

                var selFilter = $('input[name="rdFilterSubGames"]:checked').val();
                var e = $('#btnFilters_003')[0];
                $(e).data('filter', selFilter);
                filterGameBoxes(e);
                $('#filterModal-2').nifty('hide');


            })


            if (joinedJpIds) {
                var url = "https://jpn-ticker-gcp-str.hep200512.com/v1/ticker?currency=" + window.currencyCode +
                    "&jackpotIds=" + joinedJpIds;


                if ($.ajaxSettings && $.ajaxSettings.headers) {
                    delete $.ajaxSettings.headers["X-CSRF-TOKEN"];
                    // console.log("remove X-CSRF-TOKEN header");
                    // alert("remove X-CSRF-TOKEN header");
                }
                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        headers: {

                        },
                        beforeSend: function(jqXHR, settings) {

                        }
                    })
                    .done(function(data) {
                        if (data && data.length > 0) {
                            //console.log(data);
                            for (let i = 0; i < data.length; i++) {
                                var jp = data[i];
                                if (jp.jackpotId && jp.pools) {
                                    var pool = jp.pools;
                                    for (var key in pool) {
                                        if (pool.hasOwnProperty(key)) {
                                            var amt = pool[key].amount;

                                            if (amt > 0) {
                                                // console.log(amt);

                                                amt = amt.toString()
                                                $('[data-jpid="' + jp.jackpotId + '"]').find('.amount_box')
                                                    .text(window.currencyCode + ' ' + window.formatNumber(amt))
                                                    .show();

                                                $('[data-jpid="' + jp.jackpotId + '"]').find('.amount_box')
                                                    .each(function() {
                                                        $(this).prop('Counter', 0).animate({
                                                            Counter: amt
                                                        }, {
                                                            duration: 7000,
                                                            step: function(func) {
                                                                $(this).text(window
                                                                    .currencyCode + ' ' +
                                                                    window.formatNumber(func
                                                                        .toString()));
                                                            }
                                                        });
                                                    });
                                            }
                                        }
                                        break;
                                    }
                                }

                            }


                        }



                    });
                if ($.ajaxSettings && $.ajaxSettings.headers) {

                    $.ajaxSettings.headers["X-CSRF-TOKEN"] = $('meta[name="csrf-token"]').attr('content');
                    // console.log("add back X-CSRF-TOKEN  header");
                    // alert("add back X-CSRF-TOKEN header");
                }
            }

        });
    </script>
</x-mobile.app>
