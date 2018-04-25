@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Registrar Usuario</h1>
@stop

@section('content')

@if(count($errors))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

   <div class="col-sm-8">
   	    {!! Form::open(['route'=>'guardarUsuario','id'=>'formUsuario']) !!}
        {{ csrf_field() }}
	   <div class="form-group">
          {{ Form::label('name', 'Nombre nombre') }}
          {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
       </div>
       <div class="form-group">
          {{ Form::label('email', 'Correo Electronico') }}
          {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
       </div>
       <div class="form-group">
          {{ Form::label('password', 'Clave') }}
          {{ Form::password('password', ['class' => 'form-control']) }}
       </div>
       <div class="form-group">
          {{ Form::label('password_confirmation', 'Confirmar Clave') }}
          {{ Form::password('password_confirmation',  ['class' => 'form-control']) }}
       </div>
        <div class="form-group">
              {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
             </div>
     {!! Form::close() !!}
    </div>

@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop
