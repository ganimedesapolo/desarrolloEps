@extends('layouts.app')

@section('title', 'Registrar Oferta')

@section('content_header')
    <h1>Registrar Oferta</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')

			    {!! Form::open(['route'=>'ofertas.store','files'=>true,'id'=>'formOferta']) !!}
				            @include('ofertas.partials.form')
				 {!! Form::close() !!}
		     
        </div>
    </div>
</div>
           

@stop



