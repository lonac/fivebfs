<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company = Company::findOrFail($id);
        return view('transactions.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $user =Auth::user();
        $company = $user->company->find($id);

        $trans = new Transaction();
        $trans->company_id = $company->id;
        $trans->capital = $company->capital;
        $trans->firstname = $request->input('firstname');
        $trans->lastname = $request->input('lastname');
        $trans->takeAmount = $request->input('takeAmount');
        $trans->sendtransactionsId= $request->input('sendtransactionId');
        $trans->takeDate = $request->input('takeDate');
        $trans->retAmount = $request->input('retAmount');
        $trans->retDate = $request->input('returnDate');
        $trans->rectransactionsId= $request->input('rectransactionId');
        $trans->descriptions = $request->input('descriptions');
        $trans->status = $request->input('status');
        $trans->user_id = Auth::user()->id;

        if (request()->has('takeAmount')!=='0') {
            $trans->totalAmount = $company->capital - request('takeAmount');
        }
        if (request()->has('retAmount')!=='0') {
            $trans->totalAmount = $company->capital + request('retAmount');
        }

        $trans->save();

        return redirect('/company/'.$company->id.'/transactions/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $company = $user->company->find($id);
        $transactions =$company->transactions;

        return view('transactions.show',compact('company','transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
