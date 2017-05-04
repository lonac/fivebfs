<table class="table table-hover">
	<thead>
		<tr>
			{{-- <th>SN</th> --}}
			<th>Customer</th>
			<th>Amount</th>
			<th>Company</th>
			<th>Loan Time(Months)</th>
			<th>Phone Number</th>
			<th>Reason</th>
			<th>Sponsor</th>
			<th>Date of application</th>
			<th>Authorize</th>
		</tr>
	</thead>
	<tbody>
		@foreach($loans as $loan)
			<tr>
				{{-- <td>{{ $loan->id }}</td> --}}
				<td>{{ $loan->user->firstname }}  {{$loan->user->lastname}}</td>
				<td>{{ $loan->amount }}</td>
				<td>{{ $loan->company->name }}</td>
				<td>{{ $loan->loantime }}</td>
				<td>{{ $loan->phone }}</td>
				<td>{{ $loan->reason }}</td>
				<td>{{ $loan->sponsor }}</td>
				<td>{{ $loan->created_at }}</td>
				<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a></td>
			</tr>
		@endforeach
	</tbody>
</table>