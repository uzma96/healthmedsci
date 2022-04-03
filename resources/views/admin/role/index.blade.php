@extends('admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Role 
					<a href="admin/role/create" class="btn btn-info btn-sm pull-right m0">New Role</a>
				</h4>
				<p class="category"></p>
			</div>
			<div class="card-content table-responsive">
				<table class="table">
					<thead class="text-primary">
						<th>ID</th>
						<th>Role Name</th>
						<th>Role Slug</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($roles as $k => $r)
						<tr>
							<td>{{$k+1}}</td>
							<td>{{$r->role_name}}</td>
							<td>{{$r->role_slug}}</td>
							<td class="td-actions text-right">
							<a rel="tooltip" href="admin/role/edit/{{$r->id}}" title="Edit Role" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">edit</i>
								</a>
								<a rel="tooltip" href="admin/role/delete/{{$r->id}}" title="Remove Role" class="btn btn-danger btn-simple btn-xs">
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