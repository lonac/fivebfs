@extends('layouts.master')

@section('title', 'Company Details')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add Company Details:</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('company/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="name">Company Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Name here" />
						</div>
						<div class="form-group">
							<label for="description">About</label>
							<textarea name="description" id="description" class="form-control" rows="10" placeholder="Write something about your company"></textarea>
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="address" name="line_one" id="line_one" class="form-control" placeholder="Company Address">
						</div>
						<div class="form-group">
							<label for="location">Location</label>
							<input type="text" name="line_two" id="line_two" class="form-control" placeholder="Head-quarters">
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="number" name="phone1" class="form-control" id="phone1" placeholder="Phone Number">
						</div>
						<div class="form-group">
							<input type="number" name="phone2" class="form-control" id="phone2" placeholder="Add Phone Number">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email-Address">
						</div>
						<div class="form-group">
							<label for="terms$conditions">Terms&Condtion File:</label>
							<label class="btn btn-primary btn-file">
							    Browse File<input type="file">
							</label>
						</div>

						<div class="form-group">
							<label for="capital">Capital:</label>
							<input type="number" name="capital" class="form-control" id="capital" placeholder="Capital??">
						</div>
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection