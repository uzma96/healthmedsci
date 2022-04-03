@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Page List

                        </h4>
                        <a href="admin/page/create" class="btn btn-info btn-sm pull-right m0">New Page</a>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Page ID</th>
                                <th>Page Title</th>
                                <th>Page Url</th>
                                <th>Status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($pages as $k => $p)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$p->page_id}}</td>
                                        <td>{{$p->page_title}}</td>
                                        <td>{{$p->page_url}}</td>
                                        <td>{{status($p->status)}}</td>
                                        <td>

                                            <a href="admin/page/edit/{{$p->id}}" class="label label-info">Edit</a>
                                            @if($p->status==1)
                                                <a href="admin/page/edit/{{$p->id}}" class="label label-warning">Deactive</a>
                                            @elseif($p->status==0)
                                                <a href="admin/page/edit/{{$p->id}}"
                                                   class="label label-success">Active</a>
                                            @endif
                                            <a href="admin/page/delete/{{$p->id}}"
                                               onclick="return confirm('Are you sure ?')" class="label label-danger">Delete</a>
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