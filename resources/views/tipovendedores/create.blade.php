@extends('layouts.app')

@section('title', 'Registrar Tipo Vendedor')

@section('content_header')
    <h1>Registrar Tipo Vendedor</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')
                 {!! Form::open(['route'=>'tipovendedores.store']) !!}
				            @include('tipovendedores.partials.form')
				 {!! Form::close() !!}
		</div>
    </div>
</div>
           

@stop