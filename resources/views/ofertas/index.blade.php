@extends('adminlte::page')

@section('title', 'Ofertas Registradas')

@section('content_header')
    <h1>Ofertas Registradas</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
	    <div class="col-md-10 table-responsive">
           
           @include('layouts.msginfo')

   	     <a  style="margin-bottom:20px;"  href="{{ route('ofertas.create') }}" class="btn  btn-primary pull-left">Nueva Oferta</a>
   	      <table id="tblOfertas" class="table table-hover table-striped">
				<thead>
				<tr>
					<th width="20px">Consecutivo</th>
					<th>Titulo </th>
					<th>Descripcion </th>
					<th >Imagen</th>
					<th >Pais</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($ofertas as $oferta)	
				<tr>
					<td>{{ $oferta->id }}</td>
					<td>{{ $oferta->titulo }}</td>
					<td>{{ $oferta->descripcion }}</td>
					<td><img style="width: 50px; height: 50px;" src="{{$oferta->file}}" class="" alt="alt text"></td>
					<td>{{  $oferta->pais->nombre }}</td>
					
				</tr>
		     @endforeach
			</tbody>	
		</table>
    </div> 
  </div>
</div>
@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop


