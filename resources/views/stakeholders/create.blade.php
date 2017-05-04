@extends('layouts.master')

@section('title', 'Stake Holders')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Have Stake Holders at {{ $company->name }} </h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('stakeholders/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" />
						</div>
						<div class="form-group">
							<label for="latstname">Last Name</label>
							<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" />
						</div>
						<div class="form-group">
							<label for="position">Position</label>
							<input type="text" name="position" id="position" class="form-control" placeholder="Position" />
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection