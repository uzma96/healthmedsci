<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <base href="/">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="admin/assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="//livecdn.github.io/cdn/date.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dynatable/0.3.1/jquery.dynatable.min.css">--}}
    <link href="admin/assets/css/custom.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>
</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                {{ucfirst(Auth::user()->role)}} Dashboard
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="{{Request::is('admin/dashboard')?'active':''}}">
                    <a href="admin/dashboard">
                        <i class="material-icons">dashboard</i>

                        <p>Dashboard</p>
                    </a>
                </li>
                @if(Auth::user()->role=='admin')
                    <li class="{{Request::is('admin/author')?'active':''}}">
                        <a href="admin/author">
                            <i class="material-icons">person</i>

                            <p>Author</p>
                        </a>
                    </li>
                @endif
                <li class="{{Request::is('admin/journal')?'active':''}}">
                    <a href="admin/journal">
                        <i class="material-icons">content_paste</i>

                        <p>Article</p>
                    </a>
                </li>
                <li class="{{Request::is('admin/journal/archive')?'active':''}}">
                    <a href="admin/journal/archive">
                        <i class="material-icons">subject</i>

                        <p>Article Archive</p>
                    </a>
                </li>
                @if(Auth::user()->role == 'admin')
                    <li class="{{Request::is('admin/journal/review-report')?'active':''}}">
                        <a href="admin/journal/review-report">
                            <i class="material-icons">insert_drive_file</i>


                            <p>Review Report</p>
                        </a>
                    </li>
                @endif
                {{--<li class="{{Request::is('admin/paper-category*')?'active':''}}">--}}
                {{--<a href="admin/paper-category">--}}
                {{--<i class="material-icons">library_books</i>--}}

                {{--<p>Journal Category</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="{{Request::is('admin/role')?'active':''}} hidden">--}}
                {{--<a href="admin/role">--}}
                {{--<i class="material-icons">vpn_key</i>--}}

                {{--<p>Role</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                @if(Auth::user()->role != 'author')
                <li class="{{Request::is('admin/notice')?'active':''}}">
                    <a href="admin/notice">
                        <i class="material-icons">announcement</i>

                        <p>Notice</p>
                    </a>
                </li>
                @endif
            <!--<li class="{{Request::is('admin/email')?'active':''}}">
                    <a href="admin/email">
                        <i class="material-icons">announcement</i>

                        <p>Email</p>
                    </a>
                </li> -->
                @if(Auth::user()->role == 'admin')
                    <li class="{{Request::is('admin/testimonial')?'active':''}}">
                        <a href="admin/testimonial">
                            <i class="material-icons">description</i>

                            <p>Testimonial</p>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/page')?'active':''}}">
                        <a href="admin/page">
                            <i class="material-icons">description</i>

                            <p>Page</p>
                        </a>
                    </li>

                    <li class="{{Request::is('admin/paper-category')?'active':''}}">
                        <a href="admin/paper-category">
                            <i class="material-icons">library_books</i>

                            <p>Journal Category</p>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/user')?'active':''}}">
                        <a href="admin/user">
                            <i class="material-icons">people</i>

                            <p>Users</p>
                        </a>
                    </li>
                @endif
                <li class="{{Request::is('admin/setting')?'active':''}}">
                    <a href="admin/setting">
                        <i class="material-icons">build</i>

                        <p>Update Password</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ucfirst(Auth::user()->role)}} Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="logout">Logout</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                {{Auth::user()->first_name.' '.auth()->user()->last_name}}
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="secure/logout">Logout</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


    </div>
</div>

@section('script')
    <!--   Core JS Files   -->
    <script src="admin/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="admin/assets/js/material.min.js" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="admin/assets/js/bootstrap-notify.js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="admin/assets/js/material-dashboard.js"></script>
    <script src="https://livecdn.github.io/cdn/date.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dynatable/0.3.1/jquery.dynatable.min.js"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->

    <script type="text/javascript">
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            $('.date').datetimepicker({
                timepicker: false,
                format: 'Y-m-d',
                scrollMonth: false,
                scrollInput: false
            });

            $('.data-table').dynatable();

        });
    </script>

@show

</body>


</html>
