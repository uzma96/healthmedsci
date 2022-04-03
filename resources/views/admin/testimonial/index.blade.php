@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Testimonial
                    </h4>
                    <a href="admin/testimonial/create" class="btn btn-info btn-sm pull-right m0">New Testimonial</a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <th>ID</th>
                            <th>Statement</th>
                            <th>User</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($result as $k => $r)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$r->statement}}</td>
                                    <td>{{$r->username}}</td>
                                    <td>
                                        <a rel="tooltip" href="admin/testimonial/edit/{{$r->id}}" title="Edit" class="btn btn-primary btn-simple btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a rel="tooltip" href="admin/testimonial/delete/{{$r->id}}" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </a>
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