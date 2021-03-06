<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <title>International Journal of Diabetes Obesity and cancer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="_old/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="_old/web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="_old/web/css/menu.css" rel="stylesheet" type="text/css" media="all"/> <!-- menu style -->
    <link href="_old/web/css/ken-burns.css" rel="stylesheet" type="text/css" media="all"/> <!-- banner slider -->
    <link href="_old/web/css/animate.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="_old/web/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="web/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <style>
        .glry-w3agile-grids .view-caption h5 {
            border-radius: 5px;
            width: auto;
        }
    </style>
    <!-- js -->
    <script src="web/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="web/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 4,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [480, 2],
                navigation: true

            });
        });
    </script>
    <script src="web/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function (i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });
    </script>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="web/js/move-top.js"></script>
    <script type="text/javascript" src="web/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function () {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="web/js/bootstrap.js"></script>
</head>
<body>
<div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker" aria-hidden="true"></i> Location
                </h4>
            </div>

        </div>
    </div>
</div>
<script>
    //$('#myModal88').modal('show');
</script>
<!-- header -->
<div class="header">
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">
            <p><a href="submit-paper">Submit Your Paper</a></p>
        </div>
        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown head-dpdn">
                    @if(Auth::check())
                        <a href="admin/dashboard" style="color: #fff">{{Auth::user()->name}} ({{Auth::user()->role}}
                            )</a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"
                               aria-hidden="true"></i>Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login">Login </a></li>
                            <li><a href="signup">Sign Up</a></li>

                        </ul>
                    @endif
                </li>
                <li class="dropdown head-dpdn">
                    <a href="contact" class="dropdown-toggle"><i class="fa fa-phone-square" aria-hidden="true"></i>
                        Contact US</a>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i>
                        Help</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="header-two"><!-- header-two -->
        <div class="container">
            <div class="header-logo">
                <h1><a href="/"><span>I</span>nternational <i></i></a></h1>
                <h6>Journal of Diabetes Obesity and Cancer</h6>
            </div>
            <div class="header-search">
                <form action="#" method="post">
                    <input type="search" name="Search" placeholder="Search articles within this journal....."
                           required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
            </div>
            <div class="header-cart">
                <div class="my-account">
                    <a href="menuscript"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> Submit Your
                        Manuscript</a>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!-- //header-two -->
        <div class="header-three"><!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="#0">Menu</a>
                        <nav class="cd-dropdown">
                            <a href="#0" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">

                                <li class="has-children">
                                    <a href="#">Main Menu</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>

                                        <li class="has-children">
                                            <a href="#">IJODOC</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="javascript:">About the Journal</a></li>
                                                <li><a href="javascript:">Scope of the Journal </a></li>
                                                <li><a href="javascript:">Journal Indexing</a></li>
                                                <li><a href="javascript:">Editorial Board</a></li>
                                                <li><a href="javascript:">Guid For Authors </a></li>
                                                <li><a href="javascript:">Submit Your Manuscript</a></li>
                                                <li><a href="javascript:">Contact Us</a></li>
                                            </ul>
                                        </li>


                                    </ul> <!-- .cd-secondary-dropdown -->
                                </li> <!-- .has-children -->
                                <li>
                                    <a href="#">Journal Home</a>

                                </li> <!-- .has-children -->
                                @foreach($data['pages'] as $p)
                                    <li>
                                        <a href="page/{{$p->page_id}}">{{$p->page_title}}</a>
                                    </li> <!-- .has-children -->
                                @endforeach

                            </ul> <!-- .cd-dropdown-content -->
                        </nav> <!-- .cd-dropdown -->
                    </div> <!-- .cd-dropdown-wrapper -->
                </div>
                <div class="move-text">
                    <div class="marquee">
                        <a href="offers.html">
                            @foreach($data['notices'] as $notice)
                                <span>{{$notice->notice_title}}</span>
                            @endforeach
                        </a>
                    </div>
                    <script type="text/javascript" src="web/js/jquery.marquee.min.js"></script>
                    <script>
                        $('.marquee').marquee({pauseOnHover: true});
                        //@ sourceURL=pen.js
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //header -->
@yield('content')
<!-- footer-top -->
<div class="w3agile-ftr-top">
    <div class="container">
        <div class="ftr-toprow">
            <div class="col-md-4 ftr-top-grids">
                <div class="ftr-top-left">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="ftr-top-right">
                    <h4>HELP</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 ftr-top-grids">
                <div class="ftr-top-left">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="ftr-top-right">
                    <h4>SUBMIT</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 ftr-top-grids">
                <div class="ftr-top-left">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <div class="ftr-top-right">
                    <h4>GOOD QUALITY</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //footer-top -->


<!-- subscribe -->
<div class="subscribe">
    <div class="container">
        <div class="col-md-6 social-icons w3-agile-icons">
            <h4>Keep in touch</h4>
            <ul>
                <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                <li><a href="#" class="fa fa-rss icon rss"> </a></li>
            </ul>
            <ul class="apps">
                <li><h4>Download Our app : </h4></li>
                <li><a href="#" class="fa fa-apple"></a></li>
                <li><a href="#" class="fa fa-windows"></a></li>
                <li><a href="#" class="fa fa-android"></a></li>
            </ul>
        </div>
        <div class="col-md-6 subscribe-right">
            <h4>Sign up for Article Submision</h4>

            <form action="#" method="post">
                <input type="text" name="email" placeholder="Enter your Email..." required="">
                <input type="submit" value="Subscribe">
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-info w3-agileits-info">
            <div class="col-md-4 address-left agileinfo">
                <div class="footer-logo header-logo">
                    <h2><a href="index.html"><span>I</span>nternational<i></i></a></h2>
                    <h6>Journal of Diabetes Obesity and Cancer</h6>
                </div>
                <ul>
                    <li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
                    <li><i class="fa fa-mobile"></i> 333 222 3333</li>
                    <li><i class="fa fa-phone"></i> +222 11 4444</li>
                    <li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 address-right">
                <div class="col-md-4 footer-grids">
                    <h3>Activities</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="marketplace.html">About Us</a></li>
                        <li><a href="values.html">About Us</a></li>
                        <li><a href="privacy.html">About Us</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="marketplace.html">About Us</a></li>


                    </ul>
                </div>
                <div class="col-md-4 footer-grids">
                    <h3>Research</h3>
                    <ul>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="login.html">Returns</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="sitemap.html">Site Map</a></li>
                        <li><a href="login.html">Order Status</a></li>
                        <li><a href="contact.html">Contact Us</a></li>


                    </ul>
                </div>
                <div class="col-md-4 footer-grids">
                    <h3>Payment Methods</h3>
                    <ul>
                        <li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
                        <li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
                        <li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
                        <li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>


                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //footer -->
<div class="copy-right">
    <div class="container">
        <p>?? 2016 BITC . All rights reserved | Design by <a href="http://bashurhat24.com">BITC</a></p>
    </div>
</div>
<!-- cart-js -->
<script src="web/js/minicart.js"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- countdown.js -->
<script src="web/js/jquery.knob.js"></script>
<script src="web/js/jquery.throttle.js"></script>
<script src="web/js/jquery.classycountdown.js"></script>
<script>
    $(document).ready(function () {
        $('#countdown1').ClassyCountdown({
            end: '1388268325',
            now: '1387999995',
            labels: true,
            style: {
                element: "",
                textResponsive: .5,
                days: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#1abc9c",
                        lineCap: 'round'
                    },
                    textCSS: 'font-weight:300; color:#fff;'
                },
                hours: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#05BEF6",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                minutes: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#8e44ad",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                seconds: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#f39c12",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                }

            },
            onEndCallback: function () {
                console.log("Time out!");
            }
        });
    });
</script>
<!-- //countdown.js -->
<!-- menu js aim -->
<script src="web/js/jquery.menu-aim.js"></script>
<script src="web/js/main.js"></script> <!-- Resource jQuery -->
<script src="web/js/custom.js"></script> <!-- Resource jQuery -->
<!-- //menu js aim -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('script')
@show
</body>
</html>