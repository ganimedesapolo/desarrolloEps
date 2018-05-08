@extends('layouts.app')

@section('title', 'Actualizar Tasa Cambio')

@section('content_header')
    <h1>Actualizar Tasa Cambio</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-8 ">
          @include('layouts.errors')
          {!! Form::model($tasaCambio, ['route'=> ['tasaCambios.update', $tasaCambio->id], 'method'=>'PUT']) !!}
          {{ csrf_field() }}
          <div class="form-group">
            {{ Form::label('valor', 'Valor') }}
            {{ Form::number('valor', null, ['class' => 'form-control', 'id' => 'valor','step'=>'any','max'=>'99999999.9999']) }}
          </div>
          <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
           </div>
        {!! Form::close() !!}
           </div>
   </div>
</div>
@stop



  