@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border" data-background-color="blue">
                        <h4 class="box-title">Update Password</h4>
                    </div>
                    <div class="box-body">
                        <form method="post" action="admin/update-password" autocomplete="off">
                            {{csrf_field()}}
                            @include('notification')
                            @include('form_errors')
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Current Password</label>
                                        <input type="password" class="form-control" name="current_password"
                                               placeholder="Current Password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">New Password</label>
                                        <input type="password" class="form-control" name="password"
                                               placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                               placeholder="Password Confirmation" required>
                                    </div>
                                </div>


                            </div>

                            <button type="submit" class="btn btn-info btn-flat">
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
