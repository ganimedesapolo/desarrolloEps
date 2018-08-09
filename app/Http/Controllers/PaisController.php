<?php

namespace App\Http\Controllers;
use App\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
   
     public function index()
    {
        $paises = Pais::orderBy('id','ASC')->get();
        return view('paises.index',compact('paises'));   
        
    }


      public function create()
    {
        return view('paises.create');
    }
    

    public function store(Request $request)
    {
       $request->validate([
          'nombre' => 'required|max:255',
          'codigo' => 'required|max:255',
     ]);

       $pais = Pais::create($request->all());
       $paises = Pais::orderBy('id','ASC')->get();
       return redirect()->route('paises.index',compact('paises'))->with('info', 'Pais creado con exito');
  }


    public function edit($id)
    {
         $pais = Pais::find($id);
         return view('paises.edit', compact('pais'));

     }

    public function update(Request $request, $id)
    {

        $request->validate([
          'nombre' => 'required|max:255',
          'codigo' => 'required|max:255',
        ]);
        
        $pais = Pais::find($id);
        $pais->fill($request->all())->save();

        $paises = Pais::orderBy('id','ASC')->get();
       return redirect()->route('paises.index',compact('paises'))->with('info', 'Pais actualizado con exito');


    }


 public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();
        return back()->with('info', 'Pais eliminado correctamente');
    }


 

}
