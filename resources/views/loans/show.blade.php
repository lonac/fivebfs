@extends('layouts.master')

@section('title', 'Companies Loans')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
           <div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">All Loans:</h3>
			</div>

				@if($loans->count() > 0)

				@include('loans._table')

				@else

					There is no loan so far!

				@endif	
			</div>	
		</div>
	</div>
</div>

@endsection