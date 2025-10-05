<x-desktop.app>
    <style>
        .rtp-label {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            background-color: #000000cc;
            padding: 0 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .game-box:hover .rtp-label {
            background-color: #ffffffcc;
            color: #000;
        }

        .rtp-bar {
            background-color: #fff;
            border-radius: 2.5px;
        }

        .rtp-bar>div {
            height: 5px;
            border-radius: 2.5px;
        }

        .rtp-button {
            background-color: #000;
            border: none;
            border-radius: 4px;
            width: 100%;
            position: relative;
            top: -100%;
            transition: top 0.3s ease-in-out;
        }

        .game-box:hover .rtp-button {
            top: 55%;
        }

        .pola-title {
            border-radius: 5px 5px 0 0;
            padding: 10px 0;
        }

        .pola-desc>dd,
        .pola-table {
            font-weight: 700;
        }
    </style>
    <div class="content my01">
        @if ($data['category'] !== 'e-games')
            <div class="container pt-2">
                <div class="scroll-wrapper row games-slider-menu">
                    <div class="slider" style="overflow:hidden;">
                        <div class="left"><button class="prev-btn btn" id="left-button"><i
                                    class="icon-keyboard_arrow_left"></i></button></div>

                        <div class="row no-gutters text-center slider-content">
                            @foreach ($config_firebase['provider-nav'][$data['category']] as $provider)
                                <div class="col">
                                    <a class="btn-box {{ request()->is($data['category'] . '/' . $provider['provider_code']) ? 'active' : '' }}"
                                        href="{{ url($data['category'] . '/' . $provider['provider_code']) }}">
                                        <img alt="" src="{{ $provider['img']['src'] }}"
                                            data-src="{{ $provider['img']['data-src'] }}" *ngIf="showEle" height="70"
                                            width="100" />
                                        <div class="text-center fs-md game-title"> {{ $provider['title'] }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="right"><button class="next-btn btn" id="right-button"><i
                                    class="icon-keyboard_arrow_right"></i></button></div>
                    </div>
                </div>

            </div>
        @endif
        <div class="container @if ($data['category'] === 'e-games') pt-4 games-category @else sub-games @endif">
            <div class="">
                @if ($data['category'] !== 'e-games')
                    <div class="g_category-nav fixed nav nav-pills nav-fill clearfix">
                        <div class="nav-item search_filter">
                            <span class="srch_icon"><i class="icon-magnifier"></i></span>
                            <input type="text" matInput placeholder="Cari Pesan Disini" [(ngModel)]="filterInput"
                                maxlength="255" class="search" (change)="search($event)" i18n-placeholder="@Search">
                            <button matSuffix class="btn srch_button" (click)="clearSearch($event)"><i
                                    class="icon-x-square"></i></button>
                        </div>

                        <div class="nav-item" data-filter="ALL">
                            <a class="navlink" href="javascript:void(0);">
                                SEMUA </a>
                        </div>
                        <div class="nav-item" data-filter="TOP">
                            <a class="navlink" href="javascript:void(0);">
                                TOP </a>
                        </div>

                        <div class="nav-item" data-filter="NEW">
                            <a class="navlink" href="javascript:void(0);">
                                BARU </a>
                        </div>
                    </div>
                    <br />
                @endif

                <div class="flex-row flex-wrap games pragmatic-play pp_slots">
                    <input type="hidden" id="hiddenGameID-001" value="{{ $data['provider-code'] }}">
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

                        @if (Request::is('e-games/*'))
                            <div class="col-xs-12 col-sm-4 col-lg-2 box gamecategory-singleitem">
                                <div @guest
class="login-alert" @endguest>
                                    <div class="g-card">
                                        <div class="card-img" *ngif="showEle" _games_category>
                                            <div class="g-overlay"></div>

                                            <img src="{{ $game['data-src'] ?? '' }}"
                                                alt="{{ $game['data-title'] ?? '' }}">

                                            <div class="btn-wrapper" _games_category="" style="top: 52%;">
                                                @auth
                                                    <button class="btn btn-hvrplay clearfix" fdprocessedid="k3wkr"
                                                        onclick="launchSubGame(event, '{{ url('subGameLaunch') }}?IsDemo=0&amp;gameID={{ $data['provider-code'] ?? null }}&amp;GameCode={{ $game['game-code'] }}&amp;SubCode=', 'pp_slots' , 0 )"
                                                        i18n="@PlayNow">
                                                        MAIN SEKARANG
                                                    </button>
                                                @else
                                                    <button class="btn btn-hvrplay clearfix" fdprocessedid="k3wkr">
                                                        <div class="inner">
                                                            <div class="p1">MAIN SEKARANG</div>
                                                            <div class="p2"><i class="icon-play-solid "></i>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    @else
        <div class="game-box text-center" data-jpid="" data-title="{{ $game['data-title'] }}"
            data-filter="{{ $game['data-filter'] }}">
            <div class="image">
                <img src="" data-src="{{ $game['data-src'] }}" class="unveiled lazy" *ngIf="showEle">
            </div>

            <div class="game-title">{{ $game['data-title'] }}</div>

            <div class="amount_box" style="display:none;"></div>

            <div class="game-overlay game-has-try">
                <button class="btn game_button_play"
                    onclick="launchSubGame(event, '{{ url('subGameLaunch') }}?IsDemo=0&amp;gameID={{ $data['provider-code'] ?? null }}&amp;GameCode={{ $game['game-code'] }}&amp;SubCode=', 'pp_slots' , 0 )"
                    i18n="@PlayNow">
                    MAIN SEKARANG
                </button>
            </div>

            {{-- RTP Label --}}
            <div class="rtp-label">
                <div>RTP</div>
                <div>{{ $rtp }}%</div>
            </div>

            <div>
                <div class="rtp-bar">
                    <div style="background-color: {{ $color }}; width: {{ $rtp }}%;">
                        &nbsp;</div>
                </div>
            </div>
        </div>
        @endif
        @endforeach



        </div>



        </div>

        </div>



        <script>
            function launchSubGame(e, url, gameid, isDemo) {
                var curr = "IDR";
                var noAuth4DemoGameCodes = ['pegasus_slot'];
                var gameID = $('#hiddenGameID-001').val();
                if ((!window.isAuth && !isDemo) || (!window.isAuth && noAuth4DemoGameCodes.includes(gameID))) {
                    alertLogin(e);
                    return;
                }
                if (gameID == "pp_fishing" && isDemo == 1) {
                    url = 'http://fishingdemo.com';
                } else {
                    url += '&currency=' + curr;
                }

                popitup(url, gameid);

            }
        </script>

        </div>
        <script>
            var joinedJpIds = "";
            var gameCode = "{{ $data['provider-code'] }}";
            $(document).ready(function() {

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

                function filterGameBoxes(self) {

                    $('.g_category-nav .nav-item').removeClass('active');
                    $(self).addClass('active');
                    var filterType = $(self).data('filter');

                    $('.sub-games .game-box').hide();

                    if (filterType != 'ALL' && filterType != 'NEW' && filterType != 'TOP' && filterType !=
                        'Buy Bonus Feature' && filterType != 'BUYBONUS') {
                        $('.g_category-nav .nav-item[_MORE] .navlink').text(filterType);
                    } else {
                        $('.g_category-nav .nav-item[_MORE] .navlink').text(window.transMsgs.more);
                    }

                    $('.sub-games .game-box').filter(function() {
                        return $(this).data("filter").indexOf(filterType) >= 0;
                    }).show();

                }


                //Default to Top Games :
                if (gameCode === 'pgsoft_slot') {
                    filterGameBoxes($('.g_category-nav .nav-item[data-filter=TOP]')[0]);
                } else {
                    filterGameBoxes($('.g_category-nav .nav-item[data-filter=ALL]')[0]);
                }
                var hotGame = document.location.href.split('hot=')[1];

                if (hotGame) {
                    hotGame = hotGame.replace(/\-/g, ' ');
                    var exp = new RegExp(hotGame.toLowerCase());
                    $('.game-box').each(function() {
                        var isMatch = exp.test(((typeof $(this).data('title') == 'string') ? $(this).data(
                            'title').toLowerCase() : $(this).data('title')));
                        $(this).toggle(isMatch);
                    });
                }

                //Add filter btn event listen
                $('.g_category-nav .nav-item[data-filter]').click(function() {

                    filterGameBoxes(this);
                })

                $('.g_category-nav .nav-item[_MORE]').click(function() {
                    $('.g_category-nav[_MORE]').toggleClass('hide');
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
                                // console.log(data);
                                for (let i = 0; i < data.length; i++) {
                                    var jp = data[i];
                                    if (jp.jackpotId && jp.pools) {
                                        var pool = jp.pools;
                                        for (var key in pool) {
                                            if (pool.hasOwnProperty(key)) {
                                                var amt = pool[key].amount;

                                                if (amt > 0) {

                                                    amt = amt.toString()
                                                    $('[data-jpid="' + jp.jackpotId + '"]').find('.amount_box')
                                                        .text(window.currencyCode + ' ' + window.formatNumber(amt))
                                                        .show();


                                                    $('[data-jpid="' + jp.jackpotId + '"]').find('.amount_box')
                                                        .each(function() {
                                                            $(this).prop('Counter', 0).animate({
                                                                Counter: amt
                                                            }, {
                                                                duration: 5000,
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
                    }
                }
            });
        </script>
        </div>
    </x-desktop.app>
