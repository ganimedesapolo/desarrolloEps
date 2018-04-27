@extends('layouts.app')

@section('title', 'Registrar Usuario')

@section('content_header')
    <h1>Registrar Usuario</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
             @include('layouts.errors')

			    {!! Form::open(['route'=>'users.store','id'=>'formUsuario']) !!}
				            @include('users.partials.form')
				 {!! Form::close() !!}
		     
        </div>
    </div>
</div>
           

@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop


   
        