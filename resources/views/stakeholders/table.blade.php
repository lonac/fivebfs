<table class="table table-hover">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Position</th>
		</tr>
	</thead>
	<tbody>
		@foreach($stakeholder as $stake)
			<tr>
				<td>{{ $stake->firstname}}</td>
				<td>{{ $stake->lastname}}</td>
				<td>{{ $stake->position}}</td>
			</tr>
		@endforeach
	</tbody>
</table>