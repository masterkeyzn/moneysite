<div class="col-xs-6 hot-games-wrapper ">
    <h5> <span class="wrapper-title" i18n>GAME TERPOPULAR</span> <i class="i-hot icon-fire"></i>
    </h5>
    <div>
        <div class="wrapper hot-games">
            <div class="img-container games-leave-active games-leave-to run">
                @foreach ($config_firebase['hot-games'] as $hotGamesItem)
                    <a href="{{ url($hotGamesItem['href']) }}" class="game-box">
                        <div class="game-item">
                            <div class="hot-game-tag"> </div>
                            <img class="" alt="{{ $hotGamesItem['game-item']['img']['alt'] }}"
                                src ="{{ $hotGamesItem['game-item']['img']['src'] }}" style="max-width:83px;" />

                            <div class=" game-title">
                                <div>
                                    <div class="text-overflow-line-clamp" style="font-weight:800;">
                                        {{ $hotGamesItem['game-item']['game-title']['title'] }}
                                    </div>
                                    <div class="fs-sm">
                                        {{ $hotGamesItem['game-item']['game-title']['provider'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
