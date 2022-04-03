@extends('journal.layout')

@section('content')
    <!-- news-original -->
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids w3_agile_news_market_grids">
                <div class="row agile_ipo_left">
                    <div class="col-md-3 agile_ipo_left1">
                        <ul class="nav nav-tabs tabs-left" style="margin-bottom: 80px">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>
                    <div class="col-md-9 agile_ipo_left2" style="margin-bottom: 50px">
                        <h3>{{$content->page_title}}</h3>
                        <p>
                            {!! $content->page_description !!}
                        </p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //news-original -->
    </div>
@stop