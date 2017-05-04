<table class="table table-hover">
	<thead>
		<tr>
			<th>Names</th>
			<th>Take Date</th>
			<th>Amount Taken</th>
			<th>Send Transaction ID</th>
			<th>Return Date</th>
			<th>Return Amount</th>
			<th>Received Transaction ID</th>
			<th>Descriptions</th>
			<th>Account Balance</th>
			<th>Status:</th>
			<th>Authorize</th>
		</tr>
	</thead>
	<tbody>
		@foreach($transactions as $trans)
			<tr>
				<td>{{ $trans->firstname}} {{ $trans->lastname}}</td>
				<td>{{ $trans->takeDate}}</td>
				<td>{{ $trans->takeAmount}}</td>
				<td>{{ $trans->sendtransactionId}}</td>
				<td>{{ $trans->retDate}}</td>
				<td>{{ $trans->retAmount}}</td>
				<td>{{ $trans->rectransactionId}}</td>
				<td>{{ $trans->descriptions}}</td>
				<td>{{ $trans->totalAmount}}</td>
				<td>{{ $trans->status}}</td>
				<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a></td>
			</tr>
		@endforeach
	</tbody>
</table>