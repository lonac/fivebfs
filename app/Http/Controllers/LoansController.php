<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use App\Loan;

use Auth;

class LoansController extends Controller
{
   public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index($id)
    {
        $company = Company::findOrFail($id);
    	$loans = $company->loans;
    	return view('loans.show', compact('loans'));
    }

    public function create($id)
    {
    	$company = Company::findOrFail($id);

         $stakeholder = $company->stakeholders;
      //  dd($name);
    		return view('loans.apply', compact('company','stakeholder'));
    }

    public function store(Request $request, $id)
    {
    	
        $this->validate($request, [

       'reason' => 'required|string|max:200',
    ]);

        

        $company = Company::findOrFail($id);
    	// TODO Validate amount

    	$loan = new Loan();
    	$loan->user_id = Auth::user()->id;
    	$loan->company_id = $company->id;
    	$loan->amount = $request->input('amount');
        $loan->loantime= $request->input('loantime');
        $loan->reason = $request->input('reason');
        $loan->phone = $request->input('phone');
        $loan->paymeans = $request->input('paymeans');
        $loan->accountname = $request->input('accountname');
        $loan->accountnumber = $request->input('accountnumber');
        $loan->sponsor = $request->input('sponsor');
    	$loan->save();

    	   return redirect('account/my-loans');
    }
}
