<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

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
        $users = User::orderBy('id','DESC')->get();
        return view('home',compact('users'));
    }


  public function guardarUsuario(UserRequest $request)
    {   
       $user = User::create($request->all());
       $users = User::orderBy('id','DESC')->get();
       return view('home',compact('users'));
    }



}
