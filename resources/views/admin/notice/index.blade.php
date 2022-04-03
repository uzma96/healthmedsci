@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h4 class="box-title">Notice List

                        </h4>
                        <a href="admin/notice/create" class="btn btn-info btn-sm pull-right m0">New Notice</a>
                        <p class="category"></p>
                    </div>
                    <div class="box-body">
                        <div class="card-content table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <th>ID</th>
                                <th>Notice Title</th>
                                <th>Notice Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($notices as $k => $p)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$p->notice_title}}</td>
                                        <td>{{$p->notice_date}}</td>
                                        <td>{{status($p->status)}}</td>
                                        <td>
                                            @if(Auth::user()->role=='admin')
                                                <a rel="tooltip" href="admin/notice/edit/{{$p->id}}" title="Edit Notice"
                                                   class="btn btn-primary btn-simple btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                @if($p->status==1)
                                                    <a rel="tooltip" href="admin/notice/status/{{$p->id}}/0"
                                                       title="Block Notice"
                                                       class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @elseif($p->status==0)
                                                    <a rel="tooltip" href="admin/notice/status/{{$p->id}}/1"
                                                       title="Active Notice"
                                                       class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @endif
                                                <a rel="tooltip" href="admin/notice/delete/{{$p->id}}" title="Remove Notice"
                                                   class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@stop