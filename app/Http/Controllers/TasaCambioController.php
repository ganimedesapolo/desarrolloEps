<?php

namespace App\Http\Controllers;
use App\Http\Requests\TasaCambioUpdateRequest;


use Illuminate\Http\Request;
use App\TasaCambio;

class TasaCambioController extends Controller
{
    
     public function index()
    {
        $tasaCambios = TasaCambio::orderBy('id','DESC')->get();
        return view('tasaCambios.index',compact('tasaCambios'));   
        
    }


     public function edit($id)
    {
         $tasaCambio = TasaCambio::find($id);
         return view('tasaCambios.edit', compact('tasaCambio'));
    }
   


     public function update(TasaCambioUpdateRequest $request, $id)
    {
       $tasaCambio = TasaCambio::find($id);
       $tasaCambio->fill($request->all())->save();

       $tasaCambios = TasaCambio::orderBy('id','DESC')->get();
        return redirect()->route('tasaCambios',compact('tasaCambios'))->with('info', 'Tasa de Cambio actualizada con exito');
    }


}
