<?php

namespace App\Http\Controllers;
use App\Tipovendedores;
use Illuminate\Http\Request;

class TipovendedoresController extends Controller
{
   
     public function index()
    {
        $tipovendedores = Tipovendedores::orderBy('id','ASC')->get();
        return view('tipovendedores.index',compact('tipovendedores'));   
        
    }


      public function create()
    {
        return view('tipovendedores.create');
    }
    

    public function store(Request $request)
    {
       $request->validate([
          'nombre_tipo' => 'required|max:255',
       ]);

       $tipovendedor = Tipovendedores::create($request->all());
       $tipovendedores = Tipovendedores::orderBy('id','ASC')->get();
       return redirect()->route('tipovendedores.index',compact('tipovendedores'))->with('info', 'Tipo Vendedor creado con exito');
  }


    public function edit($id)
    {
         $tipovendedor = Tipovendedores::find($id);
         return view('tipovendedores.edit', compact('tipovendedor'));

     }

    public function update(Request $request, $id)
    {

       $request->validate([
          'nombre_tipo' => 'required|max:255',
       ]);
        
        $tipovendedor = Tipovendedores::find($id);
        $tipovendedor->fill($request->all())->save();

        $tipovendedores = Tipovendedores::orderBy('id','ASC')->get();
       return redirect()->route('tipovendedores.index',compact('tipovendedores'))->with('info', 'Tipo Vendedor actualizado con exito');


    }


 public function destroy($id)
    {
        $tipovendedor = Tipovendedores::find($id);
        $tipovendedor->delete();
        return back()->with('info', 'Tipo de Vendedor eliminado correctamente');
    }


 

}
