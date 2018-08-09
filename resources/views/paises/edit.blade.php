@extends('layouts.app')

@section('title', 'Editar Pais')

@section('content_header')
    <h1>Editar Pais</h1>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')
              {!! Form::model($pais, ['route'=> ['paises.update', $pais->id], 'method'=>'PUT']) !!}
                @include('paises.partials.form')
           {!! Form::close() !!}
		</div>
    </div>
</div>
           

@stop