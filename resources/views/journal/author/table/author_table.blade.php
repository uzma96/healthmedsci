<table class="table table-bordered">
    <thead>
    <tr>
        <td>SL</td>
        <td>Name</td>
        <td>Details</td>
        <td>Correspond. Author</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($authors as $k => $a)
        <tr>
            <td>{{$k+1}}</td>
            <td>{{$a->first_name.' '.$a->last_name}}</td>
            <td>{{$a->affiliation}}|{{$a->email}}<br>{{$a->country}}</td>
            <td>{{$a->correspondent_author==1?"Yes":"No"}}
            </td>
            <td>
                @if($a->correspondent_author==0)
                    <a href="javascript:" class="text-danger delete-author" data-id="{{$a->id}}"><i
                                class="fa fa-trash"></i> Delete</a>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>