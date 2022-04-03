<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <base href="/">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>International Journal of Diabetes Obesity And Cancer</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/material-kit.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>


</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="">
                <div class="logo-container">
                    <div class="logo">
                        <img src="img/logo.png" alt="Creative Tim Logo" rel="tooltip"
                             title="International Journal of Diabetes Obesity And Cancer" data-placement="bottom"
                             data-html="true">
                    </div>
                    <div class="brand">
                        IJODOAC
                    </div>


                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="article">Explore journals</a>
                </li>
                <li>
                    <a href="menuscript">Get published</a>
                </li>
                <li>
                    <a href="about">About BioMed Central</a>
                </li>


                <li>
                    @if(Auth::check())
                        <a href="admin/dashboard">{{Auth::user()->name}} ({{Auth::user()->role}})</a>
                    @else
                        <a href="login">Login</a>
                    @endif
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="javascript:void(0)"
                       target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="javascript:void(0)"
                       target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="javascript:void(0);"
                       target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('img/bg2.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <a href="home" style="color:#fff;text-decoration: none;">
                            <h1>International </h1>

                            <h3>Journal of Diabetes Obesity And Cancer</h3>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">

        <div class="section text-center submission_page">
            <div class="row">
                <div class="col-md-9 text-left">
                    <h2 class="title margin-0 ">World Congress Integrative Medicine & Health 2017</h2>
                </div>
            </div>

            <div class="features_">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="info">
                                    <img src="img/v3.jpg" alt="Post Images">

                                    <div class="text_box">
                                        <p>Join us in Berlin on May 3rd-5th for the World Congress Integrative Medicine
                                            & Health 2017. Registration is currently open.
                                            If you are attending and would like to meet with BMC Complementary and
                                            Alternative Medicine Editor Tom Rowles to discuss your work, then please do
                                            let us know.
                                            Tom will also be presenting in the "Getting your work published - tips from
                                            editors" pre-congress session on Tuesday 3rd May.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                                            Read more
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="info">
                                            <img src="img/v1.jpg" alt="Post Images">

                                            <div class="text_box">
                                                <h4 class="info-title">
                                                    <a href="javascript:">Featured article: Feasibility of telehealth
                                                        delivery for yoga</a>
                                                </h4>

                                                <p>Veterans report similar improvements in symptoms and satisfaction
                                                    with yoga classes provided via telehealth compared to in-person,
                                                    suggesting that this mode of delivery might be acceptable in patient
                                                    groups for whom attending in-person classes is not feasible.</p>
                                                <a href="javascript:" class="btn btn-primary btn-raised">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="side_bar subission_side">
                                    <div class="first_div">
                                        <img src="img/v1.gif" alt="Side bar img">

                                        <p>BMC Complementary and Alternative Medicine is affiliated with ISCMR, the
                                            international society for complementary medicine research.</p>
                                    </div>
                                    <div class="second_div">
                                        <h3>Aims and scope</h3>

                                        <p>BMC Complementary and Alternative Medicine is an open access journal
                                            publishing original peer-reviewed research articles on interventions and
                                            resources that complement or replace conventional therapies, with a specific
                                            emphasis on research that
                                            explores the biological mechanisms of action, as well as their efficacy,
                                            safety, costs, patterns of use and/or implementation.</p>
                                    </div>
                                    <div class="latest_post">
                                        <h3 class="margin-0">BMC Series blog</h3>

                                        <div class="icon icon-rss">
                                            <i class="fa fa-rss-square" aria-hidden="true"></i>
                                        </div>
                                        <div class="latest">
                                            <h4 class="info-title">
                                                <a href="#">Rediscovering the African wolf</a>
                                            </h4>

                                            <p>Published on: 19 April 2017</p>
                                        </div>
                                        <div class="latest">
                                            <h4 class="info-title">
                                                <a href="#">The Future, High-Tech Impacts of Ultrasound in Health
                                                    Care</a>
                                            </h4>

                                            <p>Published on: 18 April 2017</p>
                                        </div>
                                        <div class="latest">
                                            <h4 class="info-title">
                                                <a href="#">2nd Roman Forum on Suicide – From Research to Clinic</a>
                                            </h4>

                                            <p>Published on: 19 April 2017</p>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <h3>FOLLOW</h3>
                                        <ul>
                                            <li>
                                                <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa-f"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa-g"><i class="fa fa-google-plus"
                                                                            aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 text-center">
                    <h2 class="title">Articles</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="articles">
                                <div class="card card-nav-tabs">
                                    <div class="header header-success col-md-4 col-sm-6 col-xs-8">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="active">
                                                        <a href="#profile" data-toggle="tab">
                                                            <i class="material-icons">history</i>
                                                            Recent
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#messages" data-toggle="tab">
                                                            <i class="material-icons">whatshot</i>
                                                            Most accessed
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active" id="profile">
                                                <div class="top_text">
                                                    <div class="right">
                                                        Recent articles RSS
                                                        <i class="fa fa-rss-square" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="left">RESEARCH ARTICLE</div>
                                                </div>
                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">Subjective perceived impact of Tai Chi training on
                                                            physical and mental health among community older adults at
                                                            risk for ischemic stroke: a qualitative study</a>
                                                    </h4>
                                                    <span class="auther_name">Guohua Zheng, Zhenyu Xiong, Xin Zheng, Junzhe Li, Tingjin Duan, Dalu Qi, Kun Ling and Lidian Chen</span>
                                                    <span class="date_">Published on: 20 April 2017</span>
                                                </div>
                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">Inhibitory activities of selected Sudanese medicinal
                                                            plants on Porphyromonas gingivalis and matrix
                                                            metalloproteinase-9 and isolation of bioactive compounds
                                                            from Combretum hartmannianum (Schweinf) bark </a>
                                                    </h4>
                                                    <span class="auther_name">Ebtihal Abdalla M. Mohieldin, Ali Mahmoud Muddathir and Tohru Mitsunaga</span>
                                                    <span class="date_">Published on: 20 April 2017</span>
                                                </div>
                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">HVC1 ameliorates hyperlipidemia and inflammation in
                                                            LDLR−/− mice </a>
                                                    </h4>
                                                    <span class="auther_name">Se-Yun Cheon, Kyung-Sook Chung, Kyung-Jin Lee, Ho-Young Choi, In-Hye Ham, Dong-Hoon Jung, Yun-Yeop Cha and Hyo-Jin An</span>
                                                    <span class="date_">Published on: 20 April 2017</span>
                                                </div>
                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">Euphorbia dracunculoides L. abrogates carbon
                                                            tetrachloride induced liver and DNA damage in rats </a>
                                                    </h4>
                                                    <span class="auther_name">Riffat Batool, Muhammad Rashid Khan and Muhammad Majid</span>
                                                    <span class="date_">Published on: 20 April 2017</span>
                                                </div>
                                                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                                                    View all articles
                                                </a>
                                            </div>
                                            <div class="tab-pane" id="messages">
                                                <div class="top_text">
                                                    <div class="right">
                                                        Most accessed articles RSS
                                                        <i class="fa fa-rss-square" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="left">RESEARCH ARTICLE</div>
                                                </div>
                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">Antioxidant activity, total phenolic and total
                                                            flavonoid contents of whole plant extracts Torilis
                                                            leptophylla L</a>
                                                    </h4>
                                                    <span class="auther_name">Naima Saeed, Muhammad R Khan and Maria Shabbir</span>
                                                    <span class="date_">Published on: 16 November 2012</span>
                                                </div>

                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">In vitro antibacterial activity of some plant
                                                            essential oils</a>
                                                    </h4>
                                                    <span class="auther_name">Seenivasan Prabuseenivasan, Manickkam Jayakumar and Savarimuthu Ignacimuthu</span>
                                                    <span class="date_">Published on: 30 November 2006</span>
                                                </div>

                                                <div class="article_post">
                                                    <h4>
                                                        <a href="#">Antibacterial activities of selected edible plants
                                                            extracts against multidrug-resistant Gram-negative
                                                            bacteria</a>
                                                    </h4>
                                                    <span class="auther_name">Doriane E Djeussi, Jaurès AK Noumedem, Jackson A Seukep, Aimé G Fankam, Igor K Voukeng, Simplice B Tankeo, Antoine HL Nkuete and Victor Kuete</span>
                                                    <span class="date_">Published on: 10 July 2013</span>
                                                </div>

                                                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                                                    View all articles
                                                </a>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>Completed with examples</h2>
                            <h4>The kit comes with three pre-built pages to help you get started faster. You can change
                                the text and images and you're good to go. More importantly, looking at them will give
                                you a picture of what you can built with this powerful kit.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-download">
                <div class="container">
                    <div class="row sharing-area text-center">
                        <h3>Thank you for supporting us!</h3>
                        <a href="javascript:void(0)" class="btn btn-twitter">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </a>
                        <a href="javascript:void(0)" class="btn btn-facebook">
                            <i class="fa fa-facebook-square"></i>
                            Share
                        </a>
                        <a href="javascript:void(0)" class="btn btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                            Share
                        </a>
                        <a href="javascript:void(0)" class="btn btn-github">
                            <i class="fa fa-github"></i>
                            Star
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="javascript:void(0)">
                            IJODOAC
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                <!--&copy; 2016, made with-->
                <!--<i class="material-icons">favorite</i> by IJODOAC Tim for a better web.-->
                © 2017 BioMed Central Ltd unless otherwise stated. Part of Springer Nature.
            </div>
        </div>
    </footer>
</div>

</body>
<!--   Core JS Files   -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="js/material-kit.js" type="text/javascript"></script>
<!--   Core JS Files   -->


<script type="text/javascript">

    $().ready(function () {
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();
        if (window_width >= 992) {
            big_image = $('.wrapper > .header');
            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }
    });
</script>
</html>
