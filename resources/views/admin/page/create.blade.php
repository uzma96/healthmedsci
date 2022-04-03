@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header" data-background-color="blue">
                    <h4 class="box-title">New Page</h4>

                </div>
                <div class="box-body">
                    <form method="post" action="admin/page/create">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Page Title</label>
                                    <input type="text" class="form-control" name="page_title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Page Url</label>
                                    <input type="text" class="form-control" name="page_url">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label">Page Description</label>
                                        <textarea class="form-control" id="editor1" rows="5" name="page_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</button>
                            <button type="submit" class="btn btn-info">
                               <i class="fa fa-save"></i> Save Page
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@stop

@section('script')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.2/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'editor1' );
    </script>
@stop