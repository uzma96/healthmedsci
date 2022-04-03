@extends('journal.layout')

@section('content')

    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids">
                <div class="col-md-12 agileinfo_news_original_grids_left1">

                    <div class="col-md-3 col-xs-6"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            @include('journal.partials.usermenu')
                        </ul>
                    </div>

                    <div class="col-md-9 col-xs-6">
                        <!-- Tab panes -->
                        <div class="div-content login well">
                            <div>Update Profile</div>
                            <hr>
                            <form method="post" action="author/profile" autocomplete="off" class="form-horizontal">
                                {{csrf_field()}}

                                @include('form_errors')

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                               value="{{$user->first_name or ''}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                               value="{{$user->last_name or ''}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                               value="{{$user->email or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" placeholder="Mobile"
                                               value="{{$user->phone or ''}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Affiliation</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="affiliation" placeholder="Affiliation"
                                               value="{{$user->affiliation or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ORCID iD</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="orcid_id" placeholder="ORCID iD"
                                               value="{{$user->orcid_id or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mailing Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mailing_address" placeholder="Address"
                                               value="{{$user->mailing_address or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="country" placeholder="Country"
                                               value="{{$user->country or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-default" type="button" onclick="history.back()">Back</button>
                                        <button class="btn btn-info" type="submit">Update Profile</button>
                                    </div>
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

