@extends('layouts.master')

@section('title', 'Transaction Records')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Customer Records on : {{ $company->name}} </h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('company/'.$company->id.'/transactions/create') }}" role="form">

						{{ csrf_field() }}
						<div class="form-group">
							<label for="firstname">First Name:</label>
							<input type="text" name="firstname" id="firstname" class="form-control" placeholder="first name" required="">
						</div>
						<div class="form-group">
							<label for="lastname">Last Name</label>
							<input type="text" name="lastname" id="lastname" class="form-control" placeholder="last name" required="">
						</div>
						<div class="form-group">
							<label for="AmountTaken">Amount Taken</label>
							<input type="number" name="takeAmount" id="takeAmount" class="form-control" placeholder="Amount Taken">
						</div>
						<div class="form-group">
							<label for="sendtransId">Sent Money:</label>
							<input type="text" name="sendtransactionId" id="sendtransactionId" placeholder="Transaction IDs">
						</div>
						<div class="form-group">
							<label for="DateTaken">Date Taken:</label>
							<input type="date" name="takeDate" id="takeDate" class="form-control" placeholder="Date Taken">
						</div>
						<div class="form-group">
							<label for="AmountReturned">Amount Returned:</label>
							<input type="number" name="retAmount" id="retAmount" class="form-control" placeholder="Returned Amount">
						</div>
						<div class="form-group">
							<label for="dateReturned">Date Returned:</label>
							<input type="date" name="returnDate" id="returnDate" class="form-control" placeholder="Date Returned">
						</div>
						<div class="form-group">
							<label for="rectransId">Received Money:</label>
							<input type="text" name="rectransactionId" id="rectransactionId" placeholder="Transaction IDs">
						</div>
						<div class="form-group">
							<label for="Descriptions">Descriptions:</label>
							<input type="text" name="descriptions" id="descriptions" class="form-control" placeholder="Any short descriptions?">
						</div>
						<div class="form-group">
							<label for="gender" class="col-sm-2 control-label">Status:</label>
							<div class="col-sm-10">
								<select class="form-control" name="status">
									<option value="Paid">PAID</option>
									<option value="notpaid">NOT PAID</option>
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-success">Save </button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection