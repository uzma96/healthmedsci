@extends('journal.layout')

@section('content')
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids">
                <div class="col-md-12 agileinfo_news_original_grids_left1">

                    <div class="col-md-3 col-xs-6"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>

                    <div class="col-md-6 col-md-offset-2">
                        <!-- Tab panes -->
                        <div class="div-content login well">
                            <div>Reset Password</div>
                            <hr>
                            <form action="journal/reset-password" method="post" autocomplete="off">
                                {{csrf_field()}}
                                @include('notification')
                                @include('form_errors')
                                <input type="hidden" name="token" value="{{request('token')}}">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control input-sm" placeholder="Password"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="Confirm Password"
                                           required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Reset Password</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
        <!-- //news-original -->
        <!-- Satisfied Clients Section Start Here-->
    </div>
@stop

