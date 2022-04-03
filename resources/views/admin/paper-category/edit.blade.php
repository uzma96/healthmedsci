@extends('admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Edit Journal Category</h4>
                        <p class="category"></p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="admin/paper-category/edit/{{$result->id}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Category Title</label>
                                        <input type="text" class="form-control" name="category_title"
                                               value="{{$result->category_title}}">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="control-label">Category Description</label>
                                            <textarea class="form-control" rows="5"
                                                      name="category_description">{{$result->category_description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info pull-right">
                                Update Category
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop