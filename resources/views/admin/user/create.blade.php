@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border" data-background-color="purple">
                        <h4 class="box-title">Create User</h4>
                    </div>
                    <div class="box-body">
                        @include('form_errors')
                        <form action="admin/user/create" method="post" autocomplete="off" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Salutation</label>
                                <div class="col-md-9">
                                    <select name="salutation" class="form-control" id="">
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                           required value="{{old('first_name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                           required value="{{old('last_name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Affiliation</label>
                                <div class="col-md-9">
                                    <textarea name="affiliation" class="form-control"
                                              placeholder="Affiliation">{{old('affiliation')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Role</label>
                                <div class="col-md-9">
                                    <div class="radio">
                                        <label for="role"><input type="radio" name="role" value="admin" id="role"> Admin</label>
                                        <label for="role2"><input type="radio" name="role" value="reviewer" id="role2">
                                            Reviewer</label>
                                        <label for="role3"><input type="radio" name="role" value="author" id="role3">
                                            Author</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="password" class="form-control" placeholder="Password" required value="{{old('password')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Status</label>
                                <div class="col-md-9">
                                    <div class="radio">
                                        <label for="active"><input type="radio" name="status" value="1" id="active"> Active</label>
                                        <label for="inactive"><input type="radio" name="status" value="0" id="inactive">
                                            Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Mail Notification</label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="hidden" name="mail_notify" value="0">
                                            <input type="checkbox" name="mail_notify" value="1"> Mail Notification
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-offset-3">
                                    <button type="button" class="btn btn-flat btn-warning" onclick="history.back()">
                                        Back
                                    </button>
                                    <button type="submit" class="btn btn-flat btn-primary">Save User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
@stop