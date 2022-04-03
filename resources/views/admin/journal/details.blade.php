@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Journal Details</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Journal Title</td>
                                <td><h2>{{$journal->paper_title}}</h2></td>
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
                        <legend>Document Information</legend>
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
                                    <td><a href="storage/{{$d->document_src}}" target="_blank"
                                           class="btn btn-xs btn-primary btn-flat">View File</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <legend>Author Information</legend>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Author Name</th>
                                <th>Email</th>
                                <th>Affiliation</th>
                                <th>Country</th>
                                <th>Correspondent Author</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($journal->authors as $k => $author)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$author->salutation.' '.$author->first_name.' '.$author->last_name}}</td>
                                    <td>{{$author->email}}</td>
                                    <td>{{$author->affiliation}}</td>
                                    <td>{{$author->country}}</td>
                                    <td>{{$author->correspondent_author=='1'?'Yes':''}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        @if(isset($journal->reviewer) && count($journal->reviewer)>0)
                            @foreach($journal->reviewer as $r)
                                <legend>Review Feedback</legend>
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
                                        <td><span class="label label-info">{{reviewerStatus($r->status)}}</span>
                                        </td>
                                    </tr>
                                </table>
                            @endforeach
                        @endif
                        <br>
                        <legend>Send to Reviewer</legend>
                        @if($journal->status == 2)
                            <div class="well">This Article is now processed for Review</div>
                        @else
                            <form action="admin/journal/send-to-reviewer" class="form-horizontal" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="journal_id" value="{{$journal->journal_id}}">
                                <div class="form-group">
                                    <label class="col-sm-2">Reviewer</label>
                                    <div class="col-sm-10">
                                        <select name="reviewer_id[]" class="form-control" id="" multiple>
                                            <option value="">Select Reviewer</option>
                                            @foreach($reviewers as $r)
                                                <option value="{{$r->id}}">{{$r->first_name.' '.$r->last_name}}
                                                    ({{$r->affiliation}})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info btn-flat">Send to Reviewer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop