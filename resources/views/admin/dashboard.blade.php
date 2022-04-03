@extends('admin.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Atricles</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Reviewers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Pending Articles</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Authors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">

                @if(Auth::user()->role=='admin')
                    <div class="box">
                        <div class="box-header with-border" data-background-color="red">
                            <h4 class="box-title">New Submitted Article
                            </h4>
                        </div>
                        <div class="box-body">
                            <div class="card-content table-responsive">
                                <table class="table table-bordered">
                                    <thead class="text-primary">
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Area of Research</th>
                                    <th>Document</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($pending_journals as $k => $j)
                                        <tr>
                                            <td>{{$k+1}}</td>
                                            <td><a href="admin/journal/details/{{$j->id}}">{{$j->paper_title}}</a></td>
                                            <td>{{$j->area_of_research}}</td>
                                            <td><a href="pdf-view/{{$j->journal_id}}" target="_blank"
                                                   class="label label-info">View Document</a></td>
                                            <td>{{$j->created_at}}</td>

                                            <td>{{status($j->status)}}</td>
                                            <td>


                                                @if(Auth::user()->role != 'author')
                                                    <a href="admin/journal/details/{{$j->id}}"
                                                       class="label label-success">Show</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header with-border" data-background-color="blue">
                            <h4 class="box-title">Live Article
                            </h4>
                        </div>
                        <div class="box-body">
                            <div class="card-content table-responsive">
                                <table class="table table-bordered">
                                    <thead class="text-primary">
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Area of Research</th>
                                    <th>Document</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($live_journals as $k => $j)
                                        <tr>
                                            <td>{{$k+1}}</td>
                                            <td><a href="admin/journal/details/{{$j->id}}">{{$j->paper_title}}</a></td>
                                            <td>{{$j->area_of_research}}</td>
                                            <td><a href="{{Storage::url($j->paper_file)}}" target="_blank"
                                                   class="label label-info">View Document</a></td>
                                            <td>{{$j->created_at}}</td>

                                            <td>{{status($j->status)}}</td>
                                            <td>


                                                @if(Auth::user()->role != 'author')
                                                    <a href="admin/journal/details/{{$j->id}}"
                                                       class="label label-success">Show</a>
                                                    <a href="admin/journal/edit/{{$j->id}}" class="label label-info">Edit</a>

                                                    @if($j->status=='1')
                                                        <a href="admin/journal/update-status/{{$j->id}}/0"
                                                           class="label label-info">Deactive</a>
                                                    @elseif($j->status=='0')
                                                        <a href="admin/journal/update-status/{{$j->id}}/1"
                                                           class="label label-warning">Active</a>
                                                    @endif
                                                    <a href="admin/journal/delete/{{$j->id}}"
                                                       onclick="return confirm('Are you sure ?')" class="label label-danger">Delete</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>

    </section>
    <!-- /.content -->
@stop