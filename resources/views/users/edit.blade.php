@extends('layouts.app')

@section('title', 'Registrar Usuario')

@section('content_header')
    <h1>Actualizar Usuario</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-8 ">
          @include('layouts.errors')
          {!! Form::model($user, ['route'=> ['users.update', $user->id], 'method'=>'PUT']) !!}
		            @include('users.partials.form')
	   	    {!! Form::close() !!}
           </div>
        </div>
    </div>
</div>
           

@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop


   
        