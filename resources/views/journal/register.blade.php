@extends('journal.layout')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.4.0/css/intlTelInput.css">
    <style>
        .intl-tel-input {
            display: block
        }
    </style>
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

                    <div class="col-md-9 col-xs-6">
                        <!-- Tab panes -->
                        <div class="div-content login well">
                            <h4>User Signup</h4>
                            <hr>
                            <form action="journal/register" method="post" autocomplete="off">
                                {{csrf_field()}}
                                {{--@include('notification')--}}
                                @include('form_errors')
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="salutation">Salutation</label>
                                            <select name="salutation" id="salutation" class="form-control input-sm">
                                                <option value="Prof.">Prof.</option>
                                                <option value="Dr.">Dr..</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">First name (*)</label>
                                            <input type="text" name="first_name" class="form-control input-sm"
                                                   placeholder="First Name" required value="{{old('first_name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Last Name (*)</label>
                                            <input type="text" name="last_name" class="form-control input-sm"
                                                   placeholder="Last Name" required value="{{old('last_name')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="gender">Gender (*)</label>
                                            <select name="gender" class="form-control input-sm" id="gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="male" {{old('gender')=='male'?'selected':''}}>Male
                                                </option>
                                                <option value="female" {{old('gender')=='female'?'selected':''}}>Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="affiliation">Affiliation</label>
                                            <textarea name="affiliation" id="affiliation" class="form-control input-sm"
                                                      placeholder="Affiliation">{{old('affiliation')}}</textarea>
                                            <span class="help-text">Your Institution Name with address</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="orcid_id">ORCID iD</label>
                                            <input type="text" id="orcid_id" name="orcid_id"
                                                   class="form-control input-sm"
                                                   placeholder="ORCID iD" value="{{old('orcid_id')}}">
                                            <span class="help-text">ORCID iDs can only be assigned by <ins>the ORCID Registry</ins>. You must
                        confirm to their standards for expressing ORCID iDs, and include the full URI(eg http://orcid.org/0000-0012-1284-3342).
                    </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email (*)</label>
                                            <input type="email" name="email" class="form-control input-sm"
                                                   placeholder="Email" value="{{old('email')}}"
                                                   required>
                                            <span class="help-text">This email-address will be used as your Login-ID</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="tel" id="phone" class="form-control input-sm"
                                                   name="phone"
                                                   value="{{old('phone')}}">
                                            <input type="hidden" name="phone" id="hphone" value="{{old('phone')}}">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Mailing Address</label>
                                            <textarea name="mailing_address" placeholder="Mailing Address"
                                                      class="form-control input-sm">{{old('mailing_address')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select name="country" id="country" class="form-control input-sm">
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Finland">Finland</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password (*)</label>
                                            <input type="password" name="password" class="form-control input-sm"
                                                   placeholder="******" id="password"
                                                   value="{{old('password')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password (*)</label>
                                            <input type="password" name="password_confirmation"
                                                   class="form-control input-sm" placeholder="******"
                                                   id="confirm_password"
                                                   value="{{old('password_confirmation')}}" required>
                                        </div>
                                    </div>


                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="user_type">User Type</label>--}}
                                            {{--<select name="user_type" class="form-control input-sm" id="user_type"--}}
                                                    {{--required>--}}
                                                {{--<option value="">Select User</option>--}}
                                                {{--<option value="author" {{old('user_type')=='author'?'selected':''}}>--}}
                                                    {{--Author--}}
                                                {{--</option>--}}
                                                {{--<option value="review" {{old('user_type')=='review'?'selected':''}}>--}}
                                                    {{--Reviewer--}}
                                                {{--</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Sign Up</button>
                                </div>
                                <hr>
                                <a href="journal/login" class="btn btn-link btn-sm">Already Registered! Login Now...</a>
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

@section('script')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.4.0/js/intlTelInput.min.js"></script>
    <script>
        $("#phone").intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.4.0/js/utils.js",
            initialCountry: "BD",
            separateDialCode: true
        });
        $('#phone').on('blur',function () {
            var number = $("#phone").intlTelInput("getNumber");
            $('#hphone').val(number);
            console.log(number);
        });

    </script>
@stop