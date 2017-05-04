<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\StakeHolder;

use App\Company;

class StakeHolderController extends Controller
{
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
    public function create()
    {
       $user = Auth::user();
       $company = $user->company;
       //$stak = $company->stake_holders;
      // dd($stak);

       if($user->id==1){

       		 return view('stakeholders.create',compact('company'));
       }

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $stake = new StakeHolder;
        $stake->firstname = $request->input('firstname');
        $stake->lastname = $request->input('lastname');
        $stake->position = $request->input('position');
        $stake->user_id= Auth::user()->id;
        $stake->company_id = $company->id; 
        $stake->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $company = Company::findOrFail($id);
        $stakeholder = $company->stakeholders;

        return view('stakeholders.show',compact('company','stakeholder'));
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
