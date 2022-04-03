@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header" data-background-color="blue">
                    <h4 class="box-title">New Journal Category</h4>
                </div>
                <div class="box-body">
                    <form method="post" action="admin/paper-category/create">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Category Title</label>
                                    <input type="text" class="form-control" name="category_title" required
                                           value="{{old('category_title')}}">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label">Category Description</label>
                                        <textarea class="form-control" rows="5" name="category_description"
                                                  required>{{old('category_description')}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-save"></i> Save Category
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@stop