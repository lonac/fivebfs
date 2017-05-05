@extends('layouts.master')

@section('title', 'Staff IDs')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-sm-4 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Generate Staff IDs at {{ $company->name }} </h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('company/'.$company->id.'/companyIDs/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="staffId">Staff Id</label>
							<input type="text" name="staff_id" id="staff_id" class="form-control" placeholder="e.g (5bfs-0001)" />
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection