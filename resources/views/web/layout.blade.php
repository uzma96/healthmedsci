<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="/">
    <!-- Site Title   -->
    <title>HealthMedScience | Home of exclusive journals</title>
    {{--<title>International Journal of Diabetes Obesity and Cancer</title>--}}

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

            @yield('content')
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
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#" class="has-submenu">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="journal">Our Journal</a></li>

                            </ul>
                        </li>
                        <li><a href="#" class="has-submenu">Journals</a>
                            <ul class="sub-menu">
                                <li><a href="journal">International Journal of Diabetes Obesity and Cancer</a></li>

                            </ul>
                        </li>
                        <li><a href="#" class="has-submenu">Conferance</a>
                            <ul class="sub-menu">
                                <li><a href="tab.html">Tab</a></li>

                            </ul>
                        </li>

                        <li><a href="contact">Contact us</a></li>
                        <li><a href="help">Help</a></li>

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
