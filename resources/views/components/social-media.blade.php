<div class="col-md-6 col-lg-4 col-xs-12 gradient-border mobile-border">
    <h4 class="title">KONTAK LAYANAN PELANGGAN</h4>
    <section class="carousel-fixed-height">
        @php
            $cacheKey = 'social_media_links';
            $socialMedia = Cache::remember($cacheKey, 604800, function () {
                return App\Models\SocialMedia::whereNotNull('link')
                    ->whereNotNull('description')
                    ->select('id', 'title', 'link', 'icon', 'description')
                    ->get();
            });
        @endphp

        <div id="pagination-contacts" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($socialMedia->chunk(3) as $socialMediaChunk)
                    <li data-target="#pagination-contacts" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}" style="margin-right:5px"></li>
                @endforeach
            </ol>
            <div class="carousel-inner member-service" role="listbox">
                @foreach ($socialMedia->chunk(3) as $socialMediaChunks)
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        @foreach ($socialMediaChunks as $socialMediaItem)
                            <div class="content-item"><a class="d-block clearfix  mb-3"
                                    href="{{ $socialMediaItem->link }}" target="_blank">
                                    <div class="row no-gutters text-center text-lg-left">
                                        <div class="col-xs-12 col-lg-3 ">
                                            <i class="{{ $socialMediaItem->icon }}"></i>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 mobile-text">
                                            <div class="mb-0 font-weight-bold">{{ $socialMediaItem->title }}</div>
                                            <div>{{ $socialMediaItem->description }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
