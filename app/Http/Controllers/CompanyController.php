<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Company;

use Auth;

use App\StakeHolders;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $comp = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        dd($comp);
       	// return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'min:10',
            'phone1'=>'required|max:10',
            'phone2'=>'required|max:10',
            'line_one'=>'required',

        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->line_one= $request->input('line_one');
        $company->line_two = $request->input('line_two');
        $company->phone1 = $request->input('phone1');
        $company->phone2 = $request->input('phone2');
        $company->email = $request->input('email');
        $company->capital = $request->input('capital');
        $company->description = $request->input('description');
        $company->user_id = Auth::user()->id;
        $u= Auth::user()->id;

        //check if the user_is_the one with id=1
        if($u==1){
            $company->save();
                 return redirect('/home');
        }
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
        return view('company.show', compact('company','stakeholder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        if($company){
            return  view('company.edit', compact('company'));
        }
        return redirect('company');
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'min:10',
        ]); 

        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        $company = new Company();
        $company->name = $request->input('name');
        $company->line_one= $request->input('line_one');
        $company->line_two = $request->input('line_two');
        $company->phone1 = $request->input('phone1');
        $company->phone2 = $request->input('phone2');
        $company->email = $request->input('email');
        $company->description = $request->input('description');
        $company->user_id = Auth::user()->id;       
        $company->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();

        /*<script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script> */
        
        $company->delete();

        return redirect('home');
    }

    public function search()
    {
         $comp = DB::table('companies')
                ->where('name', 'like', 'searchcompany')
                ->get();
                return view('company.search',compact('comp'));
    }
}
