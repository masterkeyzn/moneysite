<x-desktop.app>
    <div class="container contact-us">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="mt-4">Hubungi kami</h1>
                <p class="fs-lg">Spesialis Dukungan Pelanggan tersedia setiap hari selama 24 jam.</p>
            </div>
        </div>
        @php
            $cacheKey = 'social_media_links';
            $socialMedias = Cache::remember($cacheKey, 604800, function () {
                return App\Models\SocialMedia::whereNotNull('link')
                    ->whereNotNull('description')
                    ->select('id', 'title', 'link', 'icon', 'description')
                    ->get();
            });
        @endphp
        <div class="row">
            <div class="col-xs-12">
                <div class="bg-1 fs-lg">
                    @foreach ($socialMedias as $socialMedia)
                        <a class="btn dis_flex"
                            href="{{ $socialMedia->link == null ? 'javascript:void(0)' : $socialMedia->link }}">
                            <span class="icon-txt fs-xxl">
                                <i class="{{ $socialMedia->icon }}"></i>
                            </span>
                            <span>{{ $socialMedia->title }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-desktop.app>
