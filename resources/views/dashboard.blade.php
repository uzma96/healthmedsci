@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @if(Auth::user()->role=='admin')
                <div class="card">
                    <div class="card-header" data-background-color="red">
                        <h4 class="title">Pending Article
                        </h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-primary">
                            <th>SL</th>
                            <th>Title</th>
                            <th>Area of Research</th>
                            <th>Document</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($pending_journals as $k => $j)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td><a href="admin/journal/details/{{$j->id}}">{{$j->paper_title}}</a></td>
                                    <td>{{$j->area_of_research}}</td>
                                    <td><a href="{{Storage::url($j->paper_file)}}" target="_blank"
                                           class="label label-info">View Document</a></td>
                                    <td>{{$j->created_at}}</td>

                                    <td>{{status($j->status)}}</td>
                                    <td>


                                        @if(Auth::user()->role != 'author')
                                            <a href="admin/journal/details/{{$j->id}}"
                                               class="label label-success">Show</a>
                                            <a href="admin/journal/edit/{{$j->id}}" class="label label-info">Edit</a>

                                            @if($j->status=='1')
                                                <a href="admin/journal/update-status/{{$j->id}}/0"
                                                   class="label label-info">Deactive</a>
                                            @elseif($j->status=='0')
                                                <a href="admin/journal/update-status/{{$j->id}}/1"
                                                   class="label label-warning">Active</a>
                                            @endif
                                            <a href="admin/journal/delete/{{$j->id}}"
                                               onclick="return confirm('Are you sure ?')" class="label label-danger">Delete</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Live Article
                        </h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-primary">
                            <th>SL</th>
                            <th>Title</th>
                            <th>Area of Research</th>
                            <th>Document</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($live_journals as $k => $j)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td><a href="admin/journal/details/{{$j->id}}">{{$j->paper_title}}</a></td>
                                    <td>{{$j->area_of_research}}</td>
                                    <td><a href="{{Storage::url($j->paper_file)}}" target="_blank"
                                           class="label label-info">View Document</a></td>
                                    <td>{{$j->created_at}}</td>

                                    <td>{{status($j->status)}}</td>
                                    <td>


                                        @if(Auth::user()->role != 'author')
                                            <a href="admin/journal/details/{{$j->id}}"
                                               class="label label-success">Show</a>
                                            <a href="admin/journal/edit/{{$j->id}}" class="label label-info">Edit</a>

                                            @if($j->status=='1')
                                                <a href="admin/journal/update-status/{{$j->id}}/0"
                                                   class="label label-info">Deactive</a>
                                            @elseif($j->status=='0')
                                                <a href="admin/journal/update-status/{{$j->id}}/1"
                                                   class="label label-warning">Active</a>
                                            @endif
                                            <a href="admin/journal/delete/{{$j->id}}"
                                               onclick="return confirm('Are you sure ?')" class="label label-danger">Delete</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif

            @if(Auth::user()->role != 'admin')
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Update Profile</h4>

                        <p class="category"></p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="admin/update-profile" autocomplete="off" class="form-horizontal">
                            {{csrf_field()}}
                            @include('notification')
                            @include('form_errors')
                            <input type="hidden" name="user_id" value="{{$user->id}}">

                            @if(Auth::user()->role == 'review')
                                <div class="form-group">
                                    <label class="col-sm-2">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" placeholder="Username"
                                               value="{{$user->username or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                               value="{{$user->email or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_title" placeholder="Title"
                                               value="{{$user->user_title or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">First name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name"
                                               placeholder="First name"
                                               value="{{$user->reviewer_profile->first_name or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Family name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="family_name"
                                               placeholder="Family name"
                                               value="{{$user->reviewer_profile->family_name or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Initials</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="initials" placeholder="Initials"
                                               value="{{$user->reviewer_profile->initials or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Job Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="job_title" placeholder="Job Title"
                                               value="{{$user->reviewer_profile->job_title or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Department</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="department"
                                               placeholder="Department"
                                               value="{{$user->reviewer_profile->department or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Organization</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="organization"
                                               placeholder="Organization"
                                               value="{{$user->reviewer_profile->organization or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Institution</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="institution"
                                               placeholder="Institution"
                                               value="{{$user->reviewer_profile->institution or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Area of Expertise</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="principle_field"
                                               placeholder="Area of Expertise"
                                               value="{{$user->reviewer_profile->principle_field or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="country" placeholder="Country"
                                               value="{{$user->reviewer_profile->country or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
                                               value="{{$user->reviewer_profile->phone or ''}}">
                                    </div>
                                </div>
                            @elseif(Auth::user()->role == 'author')
                                <div class="form-group">
                                    <label class="col-sm-2">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                               value="{{$user->first_name or ''}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                               value="{{$user->last_name or ''}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                               value="{{$user->email or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" placeholder="Mobile"
                                               value="{{$user->phone or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Fax</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fax" placeholder="Fax"
                                               value="{{$user->fax or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Affiliation</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="affiliation" placeholder="Affiliation"
                                               value="{{$user->affiliation or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">ORCID iD</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="orcid_id" placeholder="ORCID iD"
                                               value="{{$user->orcid_id or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Mailing Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mailing_address" placeholder="Address"
                                               value="{{$user->mailing_address or ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="country" placeholder="Country"
                                               value="{{$user->country or ''}}">
                                    </div>
                                </div>

                            @endif

                            <button type="submit" class="btn btn-info pull-right">
                                Update Profile
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
@stop