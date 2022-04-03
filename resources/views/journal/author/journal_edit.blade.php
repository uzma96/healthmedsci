@extends('journal.layout')

@section('css')
    <style>
        .ck-editor__editable {
            min-height: 400px;
        }
    </style>
@stop

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
                        <div class="div-content well">
                            <h4>Update Your Menuscript</h4>
                            <hr>
                            <form action="author/submit-menuscript" method="post" autocomplete="off"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                @include('form_errors')
                                <input type="hidden" value="{{$journal_id}}" name="journal_id">
                                <div class="form-group">
                                    <label>Article Type</label>
                                    <input type="text" class="form-control" name="article_type"
                                           placeholder="Article Type"
                                           required="" value="{{old('article_type',$journal->article_type)}}">
                                </div>
                                <div class="form-group">
                                    <label>Enter Research Paper Title</label>
                                    <input type="text" class="form-control" name="paper_title"
                                           placeholder="Enter Paper Title"
                                           required="" value="{{old('paper_title',$journal->paper_title)}}">
                                </div>

                                <div class="form-group">
                                    <label for="">Abstract</label>
                                    <textarea name="abstract" id="editor" class="form-control" rows="8"
                                              placeholder="Abstract"
                                              style="height: 300px">{!! old('abstract',$journal->abstract) !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Keywords</label>
                                    <textarea name="keywords" id="" class="form-control" rows="2"
                                              placeholder="Keywords"
                                              required>{{old('keywords',$journal->keywords)}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">DOI</label>
                                    <input type="text" placeholder="DOI" name="doi" class="form-control"
                                           value="{{old('doi',$journal->doi)}}">
                                </div>

                                <div class="form-group">
                                    <label>Area of Research</label>
                                    <select name="area_of_research" id="" required class="form-control">
                                        <option value="">Area of Research</option>
                                        @foreach($category as $c)
                                            <option value="{{$c->category_title}}" {{old('area_of_research',$journal->area_of_research)==$c->category_title?'selected':''}}>{{$c->category_title}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Menuscript Document List</label>
                                    <div class="document-table"></div>
                                    <input type="file" id="exampleInputFile" name="attachment"
                                           class="form-control file-upload"
                                           accept="image/png,image/jpeg,image/jpg,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">

                                    <p class="help-block">Select Research paper ex.pdf,doc file</p>
                                    <div class="file-warning" hidden></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Author List</label>
                                    <div class="author-table"></div>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#myModal"><i class="fa fa-user-plus"></i> Add more Author
                                    </button>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button type="button" onclick="history.back()" class="btn btn-warning">Back</button>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Submit Menuscript</button>&nbsp;
                                        <button type="submit" class="btn btn-primary"
                                                formaction="author/store-menuscript">Save This Menuscript
                                        </button>
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Author</h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:" method="post" autocomplete="off" id="addAuthorForm">
                        <input type="hidden" value="{{$journal_id}}" name="journal_id">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="salutation">Title</label>
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
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="First Name" class="form-control input-sm"
                                           name="first_name">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="Last Name" class="form-control input-sm"
                                           name="last_name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email" class="form-control input-sm" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Affiliation</label>
                                    <textarea name="affiliation" placeholder="Affiliation"
                                              class="form-control input-sm"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" id="country" class="form-control input-sm">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Germany">Germany</option>
                                <option value="Finland">Finland</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Author</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- //login -->
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script>
        var journalId = '{{$journal_id}}';
        var loadAuthorTable = function () {
            $('.author-table').load('author/load-author-table/' + journalId);
        };
        var loadDocumentTable = function () {
            $('.document-table').load('author/load-document-table/' + journalId);
        };
        $(function () {
            loadAuthorTable();
            loadDocumentTable();
        });

        $('.file-upload').on('change', function () {

            if (this.files[0].size / 1024 > 512) {
                alert('File size cannot greater than 500KB');
                return false;
            }

            var myFormData = new FormData();
            myFormData.append('document', $(this).prop("files")[0]);
            myFormData.append('journal_id', journalId);


            $.ajax({
                url: 'author/document-upload',
                type: 'POST',
                processData: false, // important
                contentType: false, // important
                dataType: 'json',
                data: myFormData,
                success: function (rs) {
                    // do something
//                    console.log(rs);
//                    alert('ok');
                    document.querySelector('.file-upload').value = '';
                    loadDocumentTable();
                },
                error: function (request, status, error) {
//                    console.log(request);
                    var json = $.parseJSON(request.responseText);
//                    console.log(json);
                    $.each(json.document, function (key, value) {
                        alert(value);
                        $('.file-warning').show();
                        $('.file-warning').append('<p>' + value + '</p>');
                    });
                }
            });

        });

        $('body').on('click', '.delete-document', function () {
            if (confirm('Are you sure ?')) {
                $.get('author/delete-document/' + $(this).data('id')).done(function () {
                    alert('Document Deleted Successfully');
                    loadDocumentTable();
                });
            }
        });

        $('body').on('click', '.delete-author', function () {
            if (confirm('Are you sure ?')) {
                $.get('author/delete-author/' + $(this).data('id')).done(function () {
                    alert('Author Deleted Successfully');
                    loadAuthorTable();
                });
            }
        });

        $('#addAuthorForm').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serializeArray();
//            console.log(data);
            $.post('author/store-author', data).done(function () {
                $('#myModal').modal('hide');
                $('#addAuthorForm').trigger("reset");
                loadAuthorTable();
            });
        });

        $('.document-table').on('change', '#documentType', function () {
            var data = {id: $(this).data('id'), document_type: $(this).val()};
            $.post('author/update-document-type', data, function () {
                loadDocumentTable();
//                alert('done');
            });
        });

        $('.document-table').on('input', '.doc__name', function () {
            if ($(this).val() != $(this).data('value')) {
                $(this).next('changed').show();
            } else {
                $(this).next('changed').hide();
            }
        });
        $('.document-table').on('click', '.update_doc_name', function () {
            var index = $('.update_doc_name').index(this);
            var data = {id: $(this).data('id'), name: $('.doc__name').eq(index).val()};
            $.post('author/update-document-name', data, function () {
                loadDocumentTable();
            });
        });

        ClassicEditor.create(document.querySelector('#editor'), {
            toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'link']
        });
    </script>
@stop
