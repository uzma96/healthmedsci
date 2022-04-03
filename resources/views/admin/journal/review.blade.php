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
                        <form method="post" action="admin/journal/review/{{$journal->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @include('form_errors')
                            <div class="row">
                                <input type="hidden" name="journal_id" value="{{$journal->journal_id}}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Comment</label>
                                        <textarea class="form-control" id="editor"
                                                  name="comment">{{$journal->comment}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Updated Journal File</label>
                                        <input type="file" name="attachment" class="btn btn-default">
                                        <div class="help-text text-danger">If no changes need in article file than don't
                                            upload attachment
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select name="status" class="form-control" id="" required>
                                            <option value="">Select Status</option>
                                            <option value="1">{{reviewerStatus(1)}}</option>
                                            <option value="2">{{reviewerStatus(2)}}</option>
                                            <option value="3">{{reviewerStatus(3)}}</option>
                                            <option value="4">{{reviewerStatus(4)}}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info pull-right">
                                Submit your review Report
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor'), {
            toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'link']
        });
    </script>
@stop