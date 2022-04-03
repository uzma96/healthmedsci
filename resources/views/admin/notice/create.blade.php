@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header with-border" data-background-color="blue">
                        <h3 class="box-title">New Notice</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" action="admin/notice/create">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Notice Title</label>
                                        <input type="text" class="form-control" name="notice_title" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Notice Date</label>
                                        <input type="text" class="form-control date" name="notice_date">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info pull-right">
                                Save Notice
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
