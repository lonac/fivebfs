@extends('layouts.master')

@section('title', $company->name)

@section('content')

<div class="jumbotron">
	<div class="container text-center">

		<h3>{{ $company->name }}</h3>
		@if( ! Auth::guest())
			@if($company->ceo->id === Auth::user()->id)
				<a href="{{ url('company/' . $company->id . '/edit') }}">Edit</a>

				{{-- TODO Add confirmation dialog --}}
				<form method="POST" action="{{ url('company/' . $company->id) }}"  onclick="return confirm('You are about to delete Company?');">
					{{ method_field('delete') }}

					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>

			@endif		
		@endif
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Contacts:</h3>
				</div>
				<div class="panel-body">
					<p><strong>Address</strong>: {{ $company->line_one}}
					{{ $company->line_two}}</p>
					<p><strong>Phone</strong>: {{ $company->phone1}}
							or
					{{ $company->phone2}}</p>
					<p><strong>E-mail</strong>: {{ $company->email}}</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">About</h3>
				</div>
				<div class="panel-body">
					{!! $company->description !!}
				</div>
			</div>	
			<div class="panel panel-success">
				<div class="panel-heading">
				</div>
				<div class="panel-body">
					<a href="{{ url('company/'.$company->id.'/loans/apply') }}" class="btn btn-success btn-lg btn-block">Apply Loan</a>
				</div>
			</div>						
		</div>
		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Organization Structure</h3>
				</div>
				<div class="panel-body">
					<strong>CEO:</strong> {{ $company->ceo->firstname }}  {{ $company->ceo->lastname }} </br>
					<strong>STAKEHOLDERS:</strong>
					@if($stakeholder->count()>0)
						<a href="/company/{{ $company->id }}/stakeholders/show">View</a>
					@endif
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection