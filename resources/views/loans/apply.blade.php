@extends('layouts.master')

@section('title', $company->name)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Loan Application Form: : {{ $company->name }}</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('company/'.$company->id.'/loans/apply') }}" >

						{{ csrf_field() }}

						<div class="form-group">
							<label for="amount">Amount</label>
							<input type="number" name="amount" id="amount" class="form-control" placeholder="Amount" />
						</div>
						<div class="form-group">
							<label for="LoanTime">Select Loan Time:(1month=30days)</label>
								<select class="form-control" name="loantime">
									<option value="1">1 Month</option>
									<option value="2">2 Months</option>
									<option value="3">3 Months</option>
								</select>
						</div>
						<div class="form-group">
							<label for="phone">Phone Number</label>
							<input type="number" name="phone" id="phone" class="form-control" placeholder="Your Phone Number">
						</div>
						<div class="form-group">
							<label for="reason">Reason</label>
							<textarea name="reason" id="reason" class="form-control" rows="10" placeholder="Write something why you are applying"></textarea>
						</div>

						@if($stakeholder->count()>0)
							<div class="form-group">
								<label for="sponsor">Choose Sponsor</label>
								<select class="form-control" name="sponsor">
									@foreach ($stakeholder as $stake)
										<option value="{{$stake->firstname}}{{ $stake->lastname}}">{{$stake->firstname}}  {{$stake->lastname}}</option>
									@endforeach

								</select>
							</div>
						@endif 
				
						<div class="form-group">
								<label for="paymeans">Means of Payment:</label>
									<select class="form-control" name="paymeans">
										<option value="mpesa">M-PESA</option>
										<option value="tigopesa">TIGO-PESA</option>
										<option value="airtelmoney">AIRTEL-MONEY</option>
										<option value="crdb">CRDB</option>
										<option value="mpesa">NMB</option>
									</select>
							</div>

						<div class="form-group">
							<label for="AccountName">Account Name</label>
							<input type="text" name="accountname" id="accountname" class="form-control" placeholder="Account Name" required="" />
						</div>

						<div class="form-group">
							<label for="Accountnumber">Account Number</label>
							<input type="text" name="accountnumber" id="accountnumber" class="form-control" placeholder="AccountNumber" required="" />
						</div>


						<div class="form-group">
   							 <input type="checkbox" class="form-control" name="terms" value="{{ old('terms') }}" /> Agree with the <a href="#">Terms&Conditions:</a>
						</div>
						<button type="submit" class="btn btn-success">Apply</button>	 
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection