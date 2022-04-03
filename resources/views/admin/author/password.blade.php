@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border" data-background-color="blue">
                    <h4 class="box-title">Password Reset</h4>
                </div>
                <div class="box-body">
                    <form method="post" action="admin/author/password-reset/{{$id}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">New Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info pull-right">
                            Reset Password
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@stop
