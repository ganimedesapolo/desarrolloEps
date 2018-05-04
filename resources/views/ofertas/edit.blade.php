@extends('layouts.app')

@section('title', 'Actualizar Oferta')

@section('content_header')
    <h1>Actualizar Oferta</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-8 ">
          
          @include('layouts.errors')

        {!! Form::model($oferta, ['route'=> ['ofertas.update', $oferta->id], 'method'=>'PUT','files'=>true]) !!}
                @include('ofertas.partials.form')
      {!! Form::close() !!}

           
           </div>
        </div>
    </div>
</div>
           

@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop


  