@extends('admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">New Journal</h4>
                        <p class="category"></p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="admin/paper-category/create">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Category Title</label>
                                        <input type="text" class="form-control" name="category_title">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Category Description</label>
                                            <textarea class="form-control" rows="5"
                                                      name="category_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info pull-right">
                                Save Category
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop