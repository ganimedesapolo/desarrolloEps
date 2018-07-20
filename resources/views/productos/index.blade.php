@extends('adminlte::page')

@section('title', 'Productos Registrados')

@section('content_header')
    <h1>Productos Regsitrados</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
	    <div class="col-md-10 table-responsive">
           
           @include('layouts.msginfo')

   	     <a  style="margin-bottom:20px;"  href="{{ route('productos.create') }}" class="btn  btn-primary pull-left">Nuevo Producto</a>
   	      <table id="tblProductos" class="table table-hover table-striped">
				<thead>
				<tr>
					<th width="20px">Consecutivo</th>
					<th>Nombre </th>
					<th>Descripcion Tecnica </th>
					<th>Foto</th>
					<th>Videos </th>
					<th>Linea Negocio </th>
					<th >&nbsp;</th>
					<th >&nbsp;</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($productos as $producto)	
				<tr>
					<td>{{ $producto->id }}</td>
					<td>{{ $producto->nombre }}</td>
					<td align="center">
					  @if($producto->descripcion_pdf!="")
						<a target="_blank" href="{{ $producto->descripcion_pdf }}"><i class="fa fa-file"></i></a>
					   @endif
					</td>
					<td align="center">
						@if($producto->foto!="")
						 <a target="_blank" href="{{ $producto->foto }}"> 
						  <img width="30px" height="30px" target="_blank" src="{{ $producto->foto }}">
						 </a> 
					    @endif
					</td>
					<td> 
					   @if($producto->video_youtube_1!="")
						<a target="_blank" href="{{ $producto->video_youtube_1 }}"><i class="fa fa-film"></i></a>
					   @endif
					   &nbsp &nbsp
					   @if($producto->video_youtube_2!="")
						<a target="_blank" href="{{ $producto->video_youtube_2 }}"><i class="fa fa-film"></i></a>
					   @endif
					</td>
					<td>{{ $producto->lineaNegocio->nombre }}</td>
					<td width="20px">
					   <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-default">Editar</a>
					</td>
					<td width="20px">
						 {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                         {!! Form::close() !!}
					</td>
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


