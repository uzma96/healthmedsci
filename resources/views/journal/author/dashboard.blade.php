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
                        <div class="div-content well" style="min-height: 500px">
                            <h3>Dashboard</h3>
                            @include('notification')
                            <fieldset>
                                <legend>
                                    Recent Articles
                                </legend>
                                @if(count($journals)>0)
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Submission Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($journals as $k => $j)
                                            <tr>
                                                <td>{{$k+1}}</td>
                                                <td><a href="journal/details/{{$j->journal_id}}"
                                                       title="View Journal Details">{{$j->paper_title}}</a></td>
                                                <td>{{$j->created_at}}</td>
                                                <td>{{journalStatus($j->status)}}</td>
                                                <td>
                                                    @if($j->status == 0)
                                                        <a title="Edit This Journal"
                                                           href="author/journal/edit/{{$j->journal_id}}"><i
                                                                    class="fa fa-edit"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
<p>No Journal Found</p>
                                @endif
                            </fieldset>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </div>




@stop

