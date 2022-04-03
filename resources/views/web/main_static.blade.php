<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="/">
    <!-- Site Title   -->
    <title>{{$result->page_title}}::International Journal of Diabetes Obesity and Cancer</title>
    @include('web.partials.style')
</head>

<body>



<div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
        <div class="web-sidebar-menu-overlay"></div>
        <div class="web-sidebar-menu-inner">
            <!--Header Section Start Here -->
            @include('web.partials.header')
            <!-- Header Section End Here -->

            <div class="header-space"></div>
            <!-- Page Header Start Here -->
            <section class="page-header">
                <div class="product-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="p-tb-10">{{$result->page_title}}</h2>
                            </div>
                            <div class="col-md-3 m-t-15">
                                <a href="/">Home</a> <i class="fa fa-angle-double-right"></i>
                                <a href="testimonial">{{$result->page_title}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End Here -->

            <!-- Main Section Start Here -->
            <div id="main">
                <section id="contact-us" class="contact-section section-padding">
                    <div class="container form-section">
                <!-- Contact Section Start Here -->
                <div style="border:1px solid #efefef;padding:20px;border-radius:3px;box-shadow:0 0 10px #ddd;">{!! $result->page_description !!}</div>
                <!-- Contact Section end Here -->
                    </div>
                <!-- Map Section Start Here -->
                </section>
                <!-- Map Section Start Here -->
            </div>
            <!-- Satisfied Clients Section Start Here-->

            <!-- Satisfied Client Section End Here-->

            <!-- purchase now Start Here -->

            <!-- purchase now end Here -->

            <!-- Footer Section Start Here -->
            @include('web.partials.footer')
            <!-- End footer -->
            <a class="scroll-top fa fa-angle-up" href="javascript:void(0)"></a>
        </div>
    </div>
    <nav class="web-sidebar-menu web-slide-from-left">
        <div class="nano">
            <div class="content">
                <nav class="responsive-menu">
                    <span class="wa-close"><i class="fa fa-close"></i></span>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index-2.html">Home</a></li>
                        <li><a href="#" class="has-submenu">About Us</a>
                            <ul class="sub-menu">
                                <li> <a href="about.html">Our Journal</a></li>

                            </ul>
                        </li>
                        <li><a href="#" class="has-submenu">Journals</a>
                            <ul class="sub-menu">
                                <li><a href="project-two-column.html">International Journal of Diabetes Obesity and Cancer</a></li>

                            </ul>
                        </li>
                        <li> <a href="#" class="has-submenu">Conferance</a>
                            <ul class="sub-menu">
                                <li><a href="tab.html">Tab</a></li>

                            </ul>
                        </li>

                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="shop.html">Help</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</div>
<!-- STYLE SWITCHER -->

<!-- END OF STYLE SWITCHER -->
@include('web.partials.script')
</body>
</html>