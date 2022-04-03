<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <base href="/">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="admin/assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="admin/assets/css/custom.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>
</head>

<body>

<div class="wrapper">


    <div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="card login-div">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Login</h4>
                                 <p class="category">Admin Login</p>
                            </div>
                            <div class="card-content">
                                <form method="post" action="secure/login">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password" value="{{old('password')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success pull-right">Login</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-warning">{{session()->get('message')}}</div>
                        @endif
                    </div>
                </div>


            </div>
        </div>


    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="admin/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="admin/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="admin/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="admin/assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="admin/assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
