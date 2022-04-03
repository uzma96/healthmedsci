@extends('admin.layout')

@section('css')
    <link rel="stylesheet" href="assets/admin/plugins/iCheck/square/blue.css">
@stop
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border" data-background-color="purple">
                        <h4 class="box-title">User</h4>

                        <a href="admin/user/create" class="btn btn-info btn-sm pull-right btn-flat">New User</a>
                    </div>
                    <div class="box-body">
                        @include('notification')
                        <div class="card-content table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                {{--<th>Activation Code</th>--}}
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($users as $k => $u)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{$u->first_name.' '.$u->last_name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->role}}</td>
                                        <td>
                                            {!! $u->status==1?'<label class="label label-primary"><i class="fa fa-check"></i> Active</label>':'<label class="label label-danger"><i class="fa fa-times"></i> Inactive</label>' !!}
                                        </td>
                                        {{--<td>{{$u->reset_token}}</td>--}}
                                        <td>
                                            <div class="btn-group">
                                                @if($u->role!='admin')
                                                    @if($u->status=='0')
                                                        <a href="admin/user/active/{{$u->id}}"
                                                           class="btn btn-xs btn-success"><i
                                                                    class="fa fa-check"></i> Active</a>
                                                    @elseif($u->status=='1')
                                                        <a href="admin/user/block/{{$u->id}}"
                                                           class="btn btn-xs btn-warning"><i
                                                                    class="fa fa-times"></i> Inactive</a>
                                                    @endif

                                                    <a href="admin/user/edit/{{$u->id}}" class="btn btn-xs btn-info"><i
                                                                class="fa fa-pencil"></i> Edit</a>
                                                    <a href="admin/user/delete/{{$u->id}}"
                                                       class="btn btn-xs btn-danger"><i
                                                                class="fa fa-trash"></i> Delete</a>
                                                @endif
                                            </div>
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

@section('js')
    <script src="assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
//                increaseArea: '20%' /* optional */
            });
        });
    </script>
@stop