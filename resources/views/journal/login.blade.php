@extends('journal.layout')

@section('content')
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids">
                <div class="row agileinfo_news_original_grids_left1">

                    <div class="col-md-3 col-xs-6"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>

                    <div class="col-md-6 col-md-offset-2">
                        <!-- Tab panes -->
                        <div class="div-content login well">
                            <h4>User Login</h4>
                            <hr>
                            <form action="journal/login" method="post" autocomplete="off">
                                {{csrf_field()}}
                                @include('notification')
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control input-sm" placeholder="Email" value="{{old('email')}}"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control input-sm" placeholder="******"
                                           value="{{old('password')}}" required>
                                </div>
                                {{--<div class="form-group">
                                    <label for="">User Type</label>
                                    <select name="user_type" class="form-control input-sm" id="" required>
                                        <option value="">Select User</option>
                                        <option value="author" {{old('user_type')=='author'?'selected':''}}>Author</option>
                                        <option value="review" {{old('user_type')=='review'?'selected':''}}>Reviewer</option>
                                    </select>
                                </div>--}}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Login</button>
                                    <hr>
                                    <a href="journal/register" class="btn btn-link btn-sm">Register Now!</a>
                                    <a href="journal/forget-password" class="btn btn-link text-danger pull-right btn-sm">Forget Password</a>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </div>
@stop

