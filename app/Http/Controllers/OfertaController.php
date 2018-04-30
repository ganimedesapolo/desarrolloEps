<?php

namespace App\Http\Controllers;

use App\Oferta;
use App\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\OfertaRequest;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::orderBy('id','DESC')->get();
        return view('ofertas.index',compact('ofertas'));   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::orderBy('id','ASC')->pluck('nombre','id');
        return view('ofertas.create',compact('paises'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfertaRequest $request)
    {
       $oferta = Oferta::create($request->all());
       if($request->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
            $oferta->fill(['file'=>asset($path)])->save();
        }

       $ofertas = Oferta::orderBy('id','DESC')->get();
       return view('ofertas.index')->with('ofertas',$ofertas)->with('info', 'Oferta creada con exito');
     /// return redirect()->route('ofertas.index',compact('ofertas'))->with('info', 'Oferta creado con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
