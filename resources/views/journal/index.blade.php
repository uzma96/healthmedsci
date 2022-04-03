@extends('journal.layout')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <!-- news-original -->
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids">
                <div class="row agileinfo_news_original_grids_left1">
                    <div class="col-md-3 col-xs-6">
                        <ul class="nav nav-tabs tabs-left">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>

                    <div class="col-md-9 col-xs-6">
                        <!-- Tab panes -->
                        <div class="div-content well">
                            <h3>About {{subdomain($domain)}}</h3>
                            <p>{!! $content->page_description !!}</p>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
        <!-- //news-original -->
        <!-- Satisfied Clients Section Start Here-->
        <section class="clients-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <header class="page-header section-header text-center">
                            <h1 class="h-bold">Indexing</h1>
                            <span class="line text-center"></span>
                            <!--<p>Unique features give you a head-start over your competitors: countless customization options,<br>
                                working forms and newsletters, flexible code, great design, and more</p> -->
                        </header>
                    </div>
                    <div class="col-md-12">
                        <ul id="logo" class="owl-carousel owl-theme" style="list-style: none">
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-1.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-3.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-4.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-5.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-6.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-4.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="assets/journal/images/clients/logo-3.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Satisfied Client Section End Here-->
        <!-- follow-us -->
    </div>
@stop

@section('script')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {


            $("#logo").slick({
                slidesToShow: 4,
                autoplay: true,
                arrows: false
            });

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
@stop