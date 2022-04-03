@extends('admin')

@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">New Role</h4>
				<p class="category"></p>
			</div>
			<div class="card-content">
			<form method="post" action="admin/role/create">
				{{csrf_field()}}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group label-floating">
								<label class="control-label">Role Title</label>
								<input type="text" class="form-control" name="role_name">
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-info pull-right">
						Save Role
					</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop