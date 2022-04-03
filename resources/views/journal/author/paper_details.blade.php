@extends('journal.layout')

@section('content')
    <!-- news-original -->
    <div class="news-original">
        <div class="container">
            <div class="agileinfo_news_original_grids w3_agile_news_market_grids">
                <div class="col-md-12 agile_ipo_left">
                    <div class="col-md-3 agile_ipo_left1">
                        <div class="clearfix"></div>
                        <ul class="nav nav-tabs tabs-left" style="margin-bottom: 80px">
                            @include('journal.partials.sidemenu')
                        </ul>
                    </div>
                    <div class="col-md-9 agile_ipo_left2" style="margin-bottom: 50px">
                        <h3 class="d-title">
                            Journal Details
                        </h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>Journal Title</td>
                                <td>{{$journal->paper_title}}</td>
                            </tr>
                            <tr>
                                <td>Area of Research</td>
                                <td>{{$journal->area_of_research}}</td>
                            </tr>
                            <tr>
                                <td>Abstract</td>
                                <td>{!! $journal->abstract !!}</td>
                            </tr>
                            <tr>
                                <td>Keywords</td>
                                <td>{!! $journal->keywords !!}</td>
                            </tr>
                            <tr>
                                <td>DOI</td>
                                <td>{!! $journal->doi !!}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{journalStatus($journal->status)}}</td>
                            </tr>
                            <tr>
                                <td>Submission Date</td>
                                <td>{{$journal->created_at}}</td>
                            </tr>
                        </table>
                        <br>
                        @if(auth()->check() && auth()->user()->role=='author')
                            <legend>Document File Details</legend>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Document Name</th>
                                    <th>Document Type</th>
                                    <th>Document File</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($journal->documents as $k =>  $d)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$d->document_name}}</td>
                                        <td>{{$d->document_type}}</td>
                                        <td><a href="pdf-view/{{$journal->journal_id}}" target="_blank"
                                               class="btn btn-xs btn-primary btn-flat">PDF View</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                        @endif
                        <legend>Author Information</legend>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>SL</td>
                                <td>Author Name</td>
                                <td>Email</td>
                                <td>Affiliation</td>
                                <td>Country</td>
                                <td>Correspondent Author</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($journal->authors as $k => $author)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$author->first_name.' '.$author->last_name}}</td>
                                    <td>{{$author->email}}</td>
                                    <td>{{$author->affiliation}}</td>
                                    <td>{{$author->country}}</td>
                                    <td>{{$author->correspondent_author=='1'?'Yes':''}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if(count($journal->reviewer)>0)
                            <br>
                            @foreach($journal->reviewer as $r)
                                <h3>Review Feedback</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="20%">Reviewer</th>
                                        <td>
                                            {{$r->reviewer->salutation.' '.$r->reviewer->first_name.' '.$r->reviewer->last_name}}
                                            <br>
                                            {{$r->reviewer->affiliation}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Comment</th>
                                        <td>{!! $r->comment !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Update File</th>
                                        <td><a href="storage/{{$r->document}}" target="_blank">View File</a></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="label label-info">{{reviewerStatus($r->status)}}</span></td>
                                    </tr>
                                </table>
                            @endforeach
                        @endif
                        <a href="javascript:" onclick="history.back()" class="btn btn-link"><i
                                    class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
        <!-- //news-original -->
    </div>
@stop