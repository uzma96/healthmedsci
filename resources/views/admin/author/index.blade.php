@extends('admin.layout')

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border" data-background-color="purple">
                    <h4 class="box-title">Author List
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="text-primary">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Affiliation</th>
                            <th>Phone</th>
                            <th>Country</th>
                            </thead>
                            <tbody>
                            @foreach($authors as $k => $a)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$a->salutation.' '.$a->first_name.' '.$a->last_name}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->affiliation}}</td>
                                    <td>{{$a->phone}}</td>
                                    <td>{{$a->country}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
    </section>
@stop