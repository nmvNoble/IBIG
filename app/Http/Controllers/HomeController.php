<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customize;
use Illuminate\Support\Facades\Auth;

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
        // $user=Auth::user();
        // $userID= $user->id;
        // $customize = Customize::getuserData($userID);
        // return view('welcome', ['customize' => $customize]);
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('welcome', ['customize' => $customize]);
        }

        else {
            $customize = Customize::getuserData(1);
            return view('welcome', ['customize' => $customize]);

        }
    }

    public function signIn()
    {
        // $user=Auth::user();
        // $userID= $user->id;
        // $customize = Customize::getuserData($userID);
        // return view('auth.login', ['customize' => $customize]);
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('auth.login', ['customize' => $customize]);
        }

        else {
            $customize = Customize::getuserData(1);
            return view('auth.login', ['customize' => $customize]);

        }
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
        // $user=Auth::user();
        // $userID= $user->id;
        // $customize = Customize::getuserData($userID);
        // return view('welcome', ['customize' => $customize]);
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('welcome', ['customize' => $customize]);
        }

        else {
            $customize = Customize::getuserData(1);
            return view('welcome', ['customize' => $customize]);

        }
    }
}
