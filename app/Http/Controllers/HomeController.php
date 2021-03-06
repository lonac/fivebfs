<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $comp = $user->Company;
        $u = $user->id;
        $me = Auth::user()->firstname;
    
        return view('home',compact('comp','u','me'));

    }
}
