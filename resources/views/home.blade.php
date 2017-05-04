@extends('layouts.master')

@section('title', $me)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-body">
                    <p><h2>Welcome {{ Auth::User()->firstname}} {{ Auth::User()->lastname}}</h2></p>               
                </div>
            </div>
        </div>
    </div>

    @if($u==1)
           
    {{-- VIEW MY COMPANY --}}
        @if($comp!==null)
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company:</h3>
                    </div>
                    <div class="panel-body">
                        <h4><a href="company/{{ $comp->id }}">{{ $comp->name }}</a></h4>
                    </div>
                </div>
            </div>

            {{-- VIEW COMPANY LOANS --}}
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company's Loans:</h3>
                    </div>
                    <div class="panel-body">
                        {{-- The company should show the list all loans app-forms and other requests --}}
                        <a href="/companies/{{ $comp->id }}/loans/show">View</a>
                    </div>
                </div>
            </div>

            {{-- COMPANY TRANSACTIONS --}}
             <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company's Transactions:</h3>
                    </div>
                    <div class="panel-body">
                        <a href="/companies/{{ $comp->id }}/transactions/show">View Company Transactions</a>    
                    </div>
                </div>
            </div>

            {{-- COMPANY STAKEHOLDERS --}}
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company's StakeHolders:</h3>
                    </div>
                    <div class="panel-body">
                        <a href="stakeholders/create">Add StakeHolder?</a>
                        <strong>OR</strong>
                        <a href="stakeholders/show">View</a> 
                         
                    </div>
                </div>
            </div>
         </div>
            @else
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-body">
                            <p>
                                <a href="{{url('company/create')}}" role="Button" class="btn btn-primary" >Add Company Details</a> 
                             </p>
                        </div>
                    </div>
                </div>
            </div>
            
        @endif
    @endif
    <div class="row">
         <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-success">
                  <div class="panel-body">
                         <a href="loans/apply" role="Button" class="btn btn-primary">Apply for Loan</a>    
                 </div>
                </div>
        </div>
    </div>

</div>
@endsection
