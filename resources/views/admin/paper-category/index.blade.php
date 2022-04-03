@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border" data-background-color="purple">
                    <h4 class="box-title">Journal Category List

                    </h4>
                    <a href="admin/paper-category/create" class="btn btn-info btn-sm pull-right m0">New Journal
                        Category</a>
                </div>
                <div class="box-body">
                    <div class="card-content table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <th>SL</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($results as $k => $r)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$r->category_title}}</td>
                                    <td>{{$r->category_description}}</td>
                                    <td>
                                        <a href="admin/paper-category/edit/{{$r->id}}" class="btn btn-xs btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="admin/paper-category/delete/{{$r->id}}" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash-o"></i>
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