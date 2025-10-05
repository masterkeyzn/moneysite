<div class="container promo-view">
    <div class="promo-list ml-lg-5 mr-lg-5">
        <style>
            ::-webkit-scrollbar {
                width: 6px;
                height: 6px;
            }

            ::-webkit-scrollbar-track {
                background: #e5e5e5;
            }

            ::-webkit-scrollbar-thumb {
                background: #7e7e7e;
                border-radius: 5px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            .time-remaining-wraper {
                padding: 0;
            }

            .mobile .promotion-modal .panel-body {
                background: transparent !important;
            }
        </style>
        <div class="promotion-page">
            <div class="g_category-nav fixed nav nav-pills nav-fill clearfix"
                style="display: flex; justify-content: center;">
                <div class="nav-item" data-filter="ALL">
                    <a class="navlink" href="javascript:void(0);">SEMUA </a>
                </div>
                <div class="nav-item" data-filter="Special">
                    <a class="navlink" href="javascript:void(0);">Khusus </a>
                </div>
                <div class="nav-item" data-filter="Sports">
                    <a class="navlink" href="javascript:void(0);">sports </a>
                </div>
                <div class="nav-item" data-filter="Slot">
                    <a class="navlink" href="javascript:void(0);">slots </a>
                </div>
                <div class="nav-item" data-filter="Casino">
                    <a class="navlink" href="javascript:void(0);">casino </a>
                </div>
                <div class="nav-item" data-filter="Others">
                    <a class="navlink" href="javascript:void(0);">others </a>
                </div>
            </div>
            <div class="promotion-group" id="promotion-group">
                @php
                    $promotions = App\Models\Promotions::select(
                        'id',
                        'title',
                        'cdnImages',
                        'category',
                        'endDate',
                        'description',
                    )->get();
                @endphp
                @foreach ($promotions as $promotion)
                    <div class="promotion-single" data-filter="{{ $promotion->category }}">
                        <div class="row d-flex">
                            <div class="col-md-4 col-sm-4 col-xs-12 ">
                                <img src="{{ $promotion->cdnImages }}" class="img-fluid " />
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title">
                                        <div>{{ $promotion->title }} </div>
                                    </h3>
                                    <div class="m-t-10">
                                        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty"
                                            data-target="#promo-modal-{{ $promotion->id }}">Rincian</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
                                    <div class="time-remaining">
                                        <i class="icon-clock"></i>
                                        &nbsp;Waktu yang tersisa
                                    </div>
                                    <div class="time-remaining-value">
                                        <h4>
                                            <span>
                                                @if (!empty($promotion->endDate))
                                                    {{ format_duration($promotion->endDate) }}
                                                @else
                                                    Tanpa Batas Waktu
                                                @endif
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nifty-modal slide-in-bottom modal-lg promotion-modal"
                        id="promo-modal-{{ $promotion->id }}">
                        <div class="md-content">
                            <div class='md-head'>
                                <div class="md-close">X</div>
                            </div>
                            <div class="promotionmodal_content">
                                <div class="md-body">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
                                            <img src="{{ $promotion->cdnImages }}" class="img-fluid " />
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h3 class="title m-t-10">
                                                <div>{{ $promotion->title }} </div>
                                            </h3>
                                            <div class="time-remaining">
                                                <i class="icon-clock"></i>
                                                &nbsp;Waktu yang tersisa
                                            </div>
                                            <div class="time-remaining-value">
                                                <h4>
                                                    <span>
                                                        @if (!empty($promotion->endDate))
                                                            {{ format_duration($promotion->endDate) }}
                                                        @else
                                                            Tanpa Batas Waktu
                                                        @endif
                                                    </span>
                                                </h4>
                                            </div>
                                            <div class="m-t-10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-10 break">
                                        {!! $promotion->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-overlay"></div>
                @endforeach

                <!--END Language Option Modal -->
            </div>
        </div>
        <script>
            $(document).ready(function() {
                function filterGameBoxes(self) {
                    $('.g_category-nav .nav-item').removeClass('active');
                    $(self).addClass('active');
                    var filterType = $(self).data('filter');
                    $('.promotion-page .promotion-single').hide();
                    $('.promotion-page .promotion-single').filter(function() {
                        return $(this).data("filter").indexOf(filterType) >= 0;
                    }).show();
                }
                filterGameBoxes($('.g_category-nav .nav-item[data-filter=ALL]')[0]);
                $('.g_category-nav .nav-item[data-filter]').click(function() {
                    filterGameBoxes(this);
                });
            });
        </script>
    </div>
</div>
