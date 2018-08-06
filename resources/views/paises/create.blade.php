@extends('layouts.app')

@section('title', 'Registrar Pais')

@section('content_header')
    <h1>Registrar Pais</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')
                 {!! Form::open(['route'=>'paises.store']) !!}
				            @include('paises.partials.form')
				 {!! Form::close() !!}
		</div>
    </div>
</div>
           

@stop