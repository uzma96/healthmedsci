@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border" data-background-color="blue">
                    <h4 class="box-title">New Testimonial</h4>
                </div>
                <div class="box-body">
                    <form method="post" action="admin/testimonial/edit/{{$testimonial->id}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Statement</label>
                                    <textarea name="statement" class="form-control" placeholder="Statement">{{$testimonial->statement}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$testimonial->username}}">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info pull-right">
                            Update
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@stop