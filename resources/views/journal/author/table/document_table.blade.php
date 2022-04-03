<table class="table table-bordered">
    <thead>
    <tr>
        <td>SL</td>
        <td>Title</td>
        <td>Type</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($documents as $k => $d)
        <tr>
            <td>{{$k+1}}</td>
            <td>
                <input type="text" name="document_name[]" class="doc__name" value="{{$d->document_name}}" data-value="{{$d->document_name}}">
                <changed hidden><button type="button" data-id="{{$d->id}}" class="update_doc_name"><i class="fa fa-check"></i> Save</button></changed>
            </td>
            <td>
                <select name="document_type" id="documentType" data-id="{{$d->id}}">
                    <option value="Menuscript" {{$d->document_type=='Menuscript'?'selected':''}}>Menuscript</option>
                    <option value="Coverletter" {{$d->document_type=='Coverletter'?'selected':''}}>Coverletter</option>
                    <option value="Figure" {{$d->document_type=='Figure'?'selected':''}}>Figure</option>
                    <option value="Table" {{$d->document_type=='Table'?'selected':''}}>Table</option>
                    <option value="Graphical Abstract" {{$d->document_type=='Graphical Abstract'?'selected':''}}>Graphical Abstract</option>
                </select>
            </td>
            <td>{{$d->status=='1'?'Active':'Pending'}}</td>
            <td><a href="javascript:" class="text-danger delete-document" data-id="{{$d->id}}"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>