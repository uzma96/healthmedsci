@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="red">
                    <h4 class="title">My Email
                        <a href="admin/email/create" class="btn btn-info btn-sm pull-right m0">New Email</a>
                    </h4>
                </div>
                <div class="card-content">
                    @include('notification')
                    <table class="table table-bordered data-table">
                        <thead class="text-primary">
                        <th>ID</th>
                        <th>Email Title</th>
                        <th>Email Date</th>
                        <th>Status</th>
                        <th>Sender</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($emails as $k => $p)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$p->subject}}</td>
                                <td>{{$p->created_at}}</td>
                                <td>{{status($p->status)}}</td>
                                <td>{{$p->sender->email or ''}}</td>
                                <td class="td-actions">
                                    @if(Auth::user()->role=='admin')
                                        <a rel="tooltip" href="admin/email/view/{{$p->id}}" title="View Email"
                                           class="btn btn-primary btn-simple btn-xs">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a rel="tooltip" href="admin/email/delete/{{$p->id}}" title="Remove Email"
                                           class="btn btn-danger btn-simple btn-xs">
                                            <i class="material-icons">delete</i>
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
@stop
