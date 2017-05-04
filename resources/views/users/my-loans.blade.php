@extends('layouts.master')

@section('title', 'My Loans')

@section('content')

<div class="container">
	<div class="row">

	<div class="well">
		<h2>My Loans:</h2>
		@if($loans->count() > 0)

			<table class="table table-hover">
				<thead>
					<tr>
					{{--	<th>SN</th> --}}
						<th>Customer</th>
						<th>Amount</th>
						<th>Company</th>
						<th>Loan Time(Months)</th>
						<th>Phone Number</th>
						<th>Reason</th>
						<th>Sponsor</th>
						<th>Date of application</th>
						<th>Account Name</th>
						<th>Payment Means</th>
						<th>Account Number</th>
						<th>Authorize</th>
					</tr>
				</thead>
				<tbody>
					@foreach($loans as $loan)
						<tr>
							{{-- <td>{{ $loan->id }}</td> --}}
							<td>{{ $loan->user->firstname }}  {{ $loan->user->lastname }}</td>
							<td>{{ $loan->amount }}</td>
							<td>{{ $loan->company->name }}</td>
							<td>{{ $loan->loantime }}</td>
							<td>{{ $loan->phone }}</td>
							<td>{{ $loan->reason }}</td>
							<td>{{ $loan->sponsor }}</td>
							<td>{{ $loan->created_at }}</td>
							<td>{{ $loan->accountname }}</td>
							<td>{{ $loan->paymeans }}</td>
							<td>{{ $loan->accountnumber }}</td>
							<td>Pending</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
		<h3>
			<font color="red">Sorry! No Loans for this account!</font>
			<a href="/company/1/loans/apply">Appy Now?</a>
		</h3>

		@endif
	</div>		

	</div>
</div>

@endsection