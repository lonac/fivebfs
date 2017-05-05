@extends('layouts.master')

@section('title', 'Staff IDs')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">SList of Company IDs : {{ $company->name }} </h3>
				</div>
				<div class="panel-body">
					@if($staffIDs->count()>0)

						@include('staffId.table');

					@else

						No stakeholders!

					@endif
					
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection