@extends('admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Article List 
					<a href="admin/article/create" class="btn btn-info btn-sm pull-right m0">New Article</a>
				</h4>
				<p class="category"></p>
			</div>
			<div class="card-content table-responsive">
				<table class="table table-bordered" id="dataTable">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Date</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
					@foreach($articles as $k => $a)
						<tr>
							<td>{{$k+1}}</td>
							<td>{{$a->article_title}}</td>
							<td>{{$a->article_date}}</td>
							<td>{{$a->article_status==0?'Inactive':'Active'}}</td>
							<td class="td-actions text-right">
								<a rel="tooltip" href="admin/article/edit/{{$a->id}}" title="Edit Article" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">edit</i>
								</a>
								<a rel="tooltip" href="admin/article/delete/{{$a->id}}" title="Remove Article" class="btn btn-danger btn-simple btn-xs">
									<i class="material-icons">close</i>
								</a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>

			</div>
		</div>
	</div>


</div>
@stop