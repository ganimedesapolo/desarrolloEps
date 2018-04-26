@extends('adminlte::page')

@section('title', 'Registrar Usuario')

@section('content_header')
    <h1>Registrar Usuario</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
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


   
        