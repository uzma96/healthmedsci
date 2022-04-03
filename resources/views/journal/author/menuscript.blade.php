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
                            <h4>Submit Your Menuscript</h4>
                            <hr>
                            <form action="author/submit-menuscript" method="post" autocomplete="off"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                @include('form_errors')
                                <input type="hidden" value="{{$journal_id}}" name="journal_id">
                                <div class="form-group">
                                    <label>Article Type</label>
                                    <select type="text" class="form-control" name="article_type">
                                        
                    
                                <option>Original Research</option>
                                <option>Review Article</option>
                                <option>Editorial</option>
                                <option>Brief Report</option>
                                <option>Case Report</option>
                                <option>Opinion</option>
                                <option>Prospective</option>
                            
                            </select>
                                        
                                </div>
                                <div class="form-group">
                                    <label>Enter Research Paper Title</label>
                                    <input type="text" class="form-control" name="paper_title"
                                           placeholder="Enter Paper Title"
                                           required="" value="{{old('paper_title')}}">
                                </div>

                                <div class="form-group">
                                    <label for="">Abstract</label>
                                    <textarea name="abstract" id="editor" class="form-control" rows="8"
                                              placeholder="Abstract"
                                              style="height: 300px">{{old('abstract')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Keywords</label>
                                    <textarea name="keywords" id="" class="form-control" rows="2"
                                              placeholder="Keywords" required>{{old('keywords')}}</textarea>
                                </div>

                               

                                <div class="form-group">
                                    <label>Area of Research</label>
                                    <select name="area_of_research" id="" required class="form-control">
                                        <option value="">Area of Research</option>
                                        @foreach($category as $c)
                                            <option value="{{$c->category_title}}" {{old('area_of_research')==$c->category_title?'selected':''}}>{{$c->category_title}}</option>
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
                              
@stop
