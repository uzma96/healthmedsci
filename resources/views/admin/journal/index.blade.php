@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border" data-background-color="purple">
                        <h4 class="box-title">Article List
                        </h4>
                    </div>
                    <div class="box-body">
                        @include('notification')
                        <div class="card-content table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <th>Article ID</th>
                                <th>Article Title</th>
                                <th>Area of Research</th>
                                <th>Submission Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($journals as $k => $j)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td><a href="admin/journal/details/{{$j->id}}">{{$j->paper_title}}</a></td>
                                        <td>{{$j->area_of_research}}</td>
                                        <td>{{$j->created_at}}</td>

                                        <td>{{journalStatus($j->status)}}</td>
                                        <td>

                                            @if(Auth::user()->role == 'reviewer')
                                                <a href="admin/journal/review/{{$j->id}}" class="label label-info">Review</a>
                                            @else
                                                <a href="admin/journal/details/{{$j->id}}" class="label label-success">Show</a>
                                                @if($j->alreadyReviewed)
                                                    <a href="admin/journal/view-review/{{$j->id}}"
                                                       class="label label-primary">View Review</a>
                                                @endif
                                                {{--<a href="admin/journal/edit/{{$j->id}}" class="label label-info">Edit</a>--}}
                                                {{--<a href="admin/journal/delete/{{$j->id}}"--}}
                                                {{--onclick="return confirm('Are you sure ?')"--}}
                                                {{--class="label label-danger">Delete</a>--}}
                                            @endif

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