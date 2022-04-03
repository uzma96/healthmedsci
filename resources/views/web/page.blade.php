@extends('journal_layout')

@section('content')
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids">
                <div class="col-md-12 agileinfo_news_original_grids_left1">

                    <div class="col-md-3 col-xs-6"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="journal">Journal Home</a></li>
                            <li class="{{Request::is('journal/new')?'active':''}}"><a href="journal/new">Early Online</a>
                            </li>
                            <li class="{{Request::is('journal/current')?'active':''}}"><a href="journal/current">Current
                                    Issue</a></li>
                            <li><a href="journal/past">Past Issue</a></li>
                            <li><a href="journal/most-viewed">Most Viewed Articles</a></li>
                            <li><a href="login">Track Your Manuscript</a></li>
                            <li><a href="journal/contact">Contact Us</a></li>
                            <li><a href="signup">Sign up for Article Alert</a></li>
                            <li><a href="journal/open-access-policy">Open Access Policy</a></li>
                            <li><a href="journal/announcement">Announcement</a></li>
                            <li><a href="journal/search">Search</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9 col-xs-6">
                        <!-- Tab panes -->
                        <div class="div-content">
                            <div>{{$page->page_title}}</div>
                            <hr>
                            <p>{!! $page->page_description !!}</p>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
        <!-- //news-original -->
        <!-- Satisfied Clients Section Start Here-->
    </div>
@stop
