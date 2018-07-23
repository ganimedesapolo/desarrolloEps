<?php

namespace App\Http\Controllers;

use App\Producto;
use App\LineaNegocio;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\ProductoUpdateRequest;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderBy('id','DESC')->get();
        return view('productos.index',compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $lineaNegocios = LineaNegocio::orderBy('id','ASC')->pluck('nombre','id');
         return view('productos.create',compact('lineaNegocios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        
        $producto = Producto::create($request->all());
        if($request->file('descripcion_pdf')){
            $path = Storage::disk('public')->put('uploads',$request->file('descripcion_pdf'));
            $producto->fill(['descripcion_pdf'=>asset($path)])->save();
        }

        if($request->file('foto')){
            $path = Storage::disk('public')->put('uploads',$request->file('foto'));
            $producto->fill(['foto'=>asset($path)])->save();
        }

       $productos = Producto::orderBy('id','DESC')->get();
       return redirect()->route('productos.index',compact('productos'))->with('info', 'Producto creada con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
         $producto = Producto::find($producto->id);
         $lineaNegocios = LineaNegocio::orderBy('id','ASC')->pluck('nombre','id');
         return view('productos.edit', compact('producto','lineaNegocios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, Producto $producto)
    {
        
       $producto = Producto::find($producto->id);
       $producto->fill($request->all())->save();

          if($request->file('descripcion_pdf')){
            $path = Storage::disk('public')->put('uploads',$request->file('descripcion_pdf'));
            $producto->fill(['descripcion_pdf'=>asset($path)])->save();
        }

        if($request->file('foto')){
            $path = Storage::disk('public')->put('uploads',$request->file('foto'));
            $producto->fill(['foto'=>asset($path)])->save();
        } 
    

        $productos = Producto::orderBy('id','DESC')->get();
        return redirect()->route('productos.index',compact('productos'))->with('info', 'Producto actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto = Producto::find($producto->id);
        $producto->delete();
        return back()->with('info', 'Producto Eliminado correctamente');
    }
}
