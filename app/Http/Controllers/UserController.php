<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\User as UserResource;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }


       public function indexApi()
    {
        $users = User::paginate(15);
        //retornar coleccion de usuarios como recurso
        return UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
     // dd($request->all());
     // $rol =(int)($request['rol']);
      
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'rol' =>(int)$request['rol'],
            'password' => bcrypt($request['password']),
        ]);



      /// $user = User::create($request->all());
       $users = User::orderBy('id','DESC')->get();
      //return view('home')->with('users',$users)->with('info', 'Usuario creado con exito');
      return redirect()->route('home',compact('users'))->with('info', 'Usuario creado con exito');
  
    }


    public function storeApi(Request $request){
         $user = $request->isMethod('put') ? User::findOrFail($request->user_id) :
         new User;

         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = bcrypt($request->input('password'));

           
         if($user->save()){
             return new UserResource($user);
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
        //
    }

     public function showApi($id)
    {
        $user = User::findOrFail($id);
        ///retornar como recurso
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         $user = User::find($id);
         return view('users.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $request['password'] = bcrypt($request['password']);
        $user->fill($request->all())->save();
        return redirect()->route('home')->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
