@extends('journal.layout')

@section('content')
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids w3_agile_news_market_grids">
                <div class="row agile_ipo_left">
                    <div class="col-md-3 agile_ipo_left1">

                        <div class="clearfix"></div>
                        <ul class="nav nav-tabs tabs-left" style="margin-bottom: 80px">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>
                    <div class="col-md-9 agile_ipo_left2">
                        <h3>{{$title}}</h3>
                        <div class="w3layouts_site_map_left_grid">
                            @foreach($years as $k => $y)
                                <h3>Volume {{$k+1}}, {{$y}}</h3>
                                <div class="col-md-4">
                                    <div class="w3layouts_site_map_left_grid1">
                                        <ul>
                                            @foreach($journals as $j)
                                                <li><span class="glyphicon glyphicon-menu-right"
                                                          aria-hidden="true"></span><a
                                                            href="journal/view-archive/{{$j->month}}/{{$j->year}}">Vol {{$k+1}} Issue {{$j->month}},
                                                         {{$j->year}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!--End Year-->

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //news-original -->
    </div>


@stop