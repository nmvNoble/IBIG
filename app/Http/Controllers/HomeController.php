<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customize;

class HomeController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        //
        $customize = Customize::getuserData(1);
        return view('welcome', ['customize' => $customize]);
    }

    public function signIn()
    {
        $customize = Customize::getuserData(1);
        return view('auth.login', ['customize' => $customize]);
    }

    
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customize = Customize::getuserData(1);
        return view('welcome', ['customize' => $customize]);
    }
}
