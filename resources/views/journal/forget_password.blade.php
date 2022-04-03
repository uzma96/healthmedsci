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
                            <div>Password Recovery</div>
                            <hr>
                            <form action="journal/forget-password" method="post" autocomplete="off">
                                {{csrf_field()}}
                                @include('notification')
                                @include('form_errors')
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control input-sm" placeholder="Email" value="{{old('email')}}"
                                           required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Recover Password</button>
                                    <hr>
                                    <a href="journal/register" class="btn btn-link btn-sm">Register Now!</a>
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

