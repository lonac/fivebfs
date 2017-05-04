@extends('layouts.master')

@section('title', 'Company')

@section('content')

<div class="container">
	<div class="row">
		<div class="jumbotron">
			{{-- Form to Search for Companies--}}
			<form action="{{url('companies/search')}}" method="POST" role="search">
			    {{ csrf_field() }}
			    <div class="input-group">
			        <input type="text" class="form-control" name="searchcompany"
			            placeholder="You can Search Companies Here"> <span class="input-group-btn">
			            <button type="submit" class="btn btn-default">
			                <span class="glyphicon glyphicon-search"></span>
			            </button>
			        </span>
			    </div>
				</form>
			</div>
		@if($companies->count() > 0)

			@foreach($companies as $company)


				<div class="col-sm-3">
					<div class="well">
						<h2>{{ $company->name }}</h2>
						<p>
							{{ str_limit($company->description, 100) }} ..
							<a href="{{ url('companies/' . $company->id) }}">Read more &raquo;</a>
						</p>
				</div>
			</div>

			@endforeach

		@else

			Nothing here

		@endif

	</div>
</div>

@endsection