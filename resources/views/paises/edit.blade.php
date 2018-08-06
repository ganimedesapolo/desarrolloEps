@extends('layouts.app')

@section('title', 'Editar Tipo Vendedor')

@section('content_header')
    <h1>Editar Tipo Vendedor</h1>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')
              {!! Form::model($tipovendedor, ['route'=> ['tipovendedores.update', $tipovendedor->id], 'method'=>'PUT']) !!}
                @include('tipovendedores.partials.form')
           {!! Form::close() !!}
		</div>
    </div>
</div>
           

@stop