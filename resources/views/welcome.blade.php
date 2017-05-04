@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        
        <div class="row banner">
            <div class="col-sm-10 col-md-12">
                <div class="side-borders">
                        <div class="hero-bg" style="background-image:url('/images/house2.jpg');background-repeat: no-repeat;background-size: 100% 100%; height: 500px;">
                        </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md=1">
                <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                       <font color="blue"><b>5bfs is here to serve you. Apply for Loan.....</b>
                       </font>
                </marquee></p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>5bfs Financial Company</h3>
                                <p>Here is the company that cares for you. The company offers loans based on defined 
                                    percent on terms&conditions.</p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                    Terms&Conditions
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>Looking for Loan Application?</h3>
                                <p>Here is the list of different organizations and companies which provides different loan 
                                    services to their customers
                               !</p>
                                <a href="{{ url('companies')}}" class="btn btn-primary" role="button">
                                    Choose Company
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>Learn about Power of Money!</h3>
                                <p>The knowledge of getting, serving and using money is offered by different people
                                    who have successed in this field.</p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                   Financial Docs
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    <h2 class="alt-h2">5bfs grows you richer!</h2>
        <div class="clearfix gut-lg">
          <div class="float-md-left col-md-4 my-4">
            <h3 class="alt-h3 my-2"><a href="#" class="text-blue octicon-middle">Individuals <svg aria-hidden="true" class="octicon octicon-chevron-right" height="22" version="1.1" viewBox="0 0 8 16" width="11"><path fill-rule="evenodd" d="M7.5 8l-5 5L1 11.5 4.75 8 1 4.5 2.5 3z"/></svg></a></h3>
            <p class="text-gray">You can Register your own Financial institution, if you have enough money or you wnat to start organazation and have ability to have as much customer as you can.</p>
          </div>
          <div class="float-md-left col-md-4 my-4">
            <h3 class="alt-h3 my-2"><a href="#" class="text-orange octicon-middle">Organization<svg aria-hidden="true" class="octicon octicon-chevron-right" height="22" version="1.1" viewBox="0 0 8 16" width="11"><path fill-rule="evenodd" d="M7.5 8l-5 5L1 11.5 4.75 8 1 4.5 2.5 3z"/></svg></a></h3>
            <p class="text-gray">5bfs helps you as a manager to register your organization and set policies and rule to allow different people to have loans from you!.</p>
          </div>
          <div class="float-md-left col-md-4 my-4">
            <h3 class="alt-h3 my-2"><a href="#" class="text-purple octicon-middle">Financial services <svg aria-hidden="true" class="octicon octicon-chevron-right" height="22" version="1.1" viewBox="0 0 8 16" width="11"><path fill-rule="evenodd" d="M7.5 8l-5 5L1 11.5 4.75 8 1 4.5 2.5 3z"/></svg></a></h3>
            <p class="text-gray">The site allows for registered organizations to host their products and sell them online..</p>
          </div>
      </div>
    </div>

@endsection