<style>
    .slider-size {
        max-height: 500px;
        min-height: 130px;
    }
</style>

<section class="carousel-fixed-height">
    <div id="carousel-fixed-height" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($carousels as $carousel)
                <li data-target="#carousel-fixed-height" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($carousels as $carousel)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img class="slider-size" src="{{ $carousel->image }}" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;">
                </div>
            @endforeach
        </div>

        <a class="left carousel-control" href="#carousel-fixed-height" role="button" data-slide="prev">
            <i class="icon-chevron-left icon-prev"></i>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#carousel-fixed-height" role="button" data-slide="next">
            <i class="icon-arrow_forward_ios icon-next"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>
