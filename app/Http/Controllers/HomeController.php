<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


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
    public function index(Request $request)
    {
     
       $user=auth()->user();
       $rol = $user->rol;
        if($rol==0){
        //cerrar sesion
        $request->session()->flush();    
        return redirect('/');
       }

        $users = User::orderBy('id','DESC')->get();
        return view('home',compact('users'));
    }


 


}
