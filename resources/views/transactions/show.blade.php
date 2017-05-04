@extends('layouts.master')

@section('title', 'Transactions')

@section('content')

<div class="container">
	<div class="row">
		<h2>Transactions Records at : {{ $company->name}} </h2> 
		
		@if($transactions->count()> 0)

			@include('transactions.table')

		@else
			<font color="red">No Transactions records!</font>
		@endif	
		<h2><a href="/company/{{ $company->id }}/transactions/create">Add Records?</a></h2>	
	</div>
</div>

@endsection