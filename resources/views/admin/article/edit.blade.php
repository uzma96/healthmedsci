@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Edit Article</h4>

                    <p class="category"></p>
                </div>
                <div class="card-content">
                    <form method="post" action="admin/article/edit/{{$article->id}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Article Title</label>
                                    <input type="text" class="form-control" name="article_title" value="{{$article->article_title}}">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label">Article Description</label>
                                        <textarea class="form-control" id="editor1" rows="5" name="article_description">{{$article->article_description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label">Publish Date</label>
                                        <input type="text" class="form-control" name="article_date" value="{{$article->article_date}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info pull-right">
                            Update Article
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.2/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@stop