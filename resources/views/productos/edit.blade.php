@extends('layouts.app')

@section('title', 'Actualizar Producto')

@section('content_header')
    <h1>Actualizar Producto</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-8 ">
          @include('layouts.errors')
          {!! Form::model($producto, ['route'=> ['productos.update', $producto->id], 'method'=>'PUT','files'=>true]) !!}
                @include('productos.partials.form')
           {!! Form::close() !!}
           </div>
        </div>
    </div>
</div>
           

@stop



  