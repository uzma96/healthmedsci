@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info" hidden>
                    <div class="box-header with-border">
                        <h4 class="box-title">Review This Journal</h4>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                    </div>
                </div>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h4 class="box-title">Reviewer Section</h4>
                    </div>
                    <div class="box-body">
                        <legend>Review Comment & Report Submission</legend>
                        <table class="table table-bordered">
                            @foreach($journal->reviewer as $r)
                                <tr>
                                    <td>Reviewer</td>
                                    <td>{{$r->reviewer->salutation.' '.$r->reviewer->first_name.' '.$r->reviewer->last_name}}</td>
                                </tr>
                                <tr>
                                    <td>Comment</td>
                                    <td>{!! $r->comment !!}</td>
                                </tr>
                                <tr>
                                    <td>Reviewed File</td>
                                    <td><a href="storage/{{$r->document}}" class="btn btn-flat btn-info btn-xs" target="_blank">View Update File</a></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{reviewerStatus($r->status)}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        <button class="btn btn-flat btn-warning" type="button" onclick="history.back()"><i class="fa fa-arrow-left"></i> Go Back</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

