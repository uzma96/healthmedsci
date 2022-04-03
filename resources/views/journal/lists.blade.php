@extends('journal.layout')

@section('content')
    <!-- news-original -->
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids w3_agile_news_market_grids">
                <div class="col-md-12 agile_ipo_left">
                    <div class="col-md-3 agile_ipo_left1">

                        <div class="clearfix"></div>
                        <ul class="nav nav-tabs tabs-left" style="margin-bottom: 80px">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>
                    <div class="col-md-9 agile_ipo_left2" style="margin-bottom: 50px">
                        <h3>
                            {{$title or ''}}
                        </h3>
                        @if(count($journals) == 0)
                            <div class="well">Sorry, No record found</div>
                        @endif
                        @foreach($journals as $j)
                            <div class="w3l_ipo_news_grid">
                                <a href="journal/details/{{$j->journal_id}}"><h3 class="">{{$j->paper_title}}</h3></a>
                                <p class="article_author">Authors:
                                    @foreach($j->authors as $a)
                                        <ins><strong>{{$a->salutation.' '.$a->first_name.' '.$a->last_name}}</strong>,
                                        </ins>
                                    @endforeach
                                </p>
                                <p class="view_article">
                                    <a href="journal/details/{{$j->journal_id}}">Abstract</a>
                                    <a href="journal/details/{{$j->journal_id}}">View Article</a>
                                    <a href="pdf-view/{{$j->journal_id}}" target="_blank">Download PDF</a>
                                    <a href="">DOI: {{$j->doi}}</a>
                                </p></br>
                                <p class="article_view">
                                    <a href="javascript:">Total View <span
                                                class="label label-info">{{$j->no_of_view}}</span></a>
                                <!--<a href="javascript:">View Download <span class="label label-warning">{{$j->no_of_download}}</span></a> -->
                                </p>
                                <p><i>Submit at : {{date('d-m-Y',strtotime($j->created_at))}}</i></p>
                            </div>

                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //news-original -->
    </div>
@stop