@extends('layouts.app')

@section('title', 'Registrar Producto')

@section('content_header')
    <h1>Registrar Producto</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')
			    {!! Form::open(['route'=>'productos.store','files'=>true,'id'=>'formProducto']) !!}
				            @include('productos.partials.form')
				 {!! Form::close() !!}
        </div>
    </div>
</div>
           

@stop



