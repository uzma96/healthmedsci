@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">New Email</h4>

                    <p class="category"></p>
                </div>
                <div class="card-content">
                    <form method="post" action="admin/email/create">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Receiver</label>
                                    <select name="receiver_id" class="form-control" id="">
                                        <option value="">Select Email Address</option>
                                        @foreach($emails as $e)
                                            <option value="{{$e->id}}">{{$e->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textarea name="description" id="editor1" class="form-control"
                                              required></textarea>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info pull-right">
                            Send Mail
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
