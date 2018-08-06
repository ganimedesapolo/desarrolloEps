@extends('adminlte::page')

@section('title', 'Tipo de Vendedores')

@section('content_header')
    <h1>Paises</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
	    <div class="col-md-10 table-responsive">
           @include('layouts.msginfo')

           <a  style="margin-bottom:20px;"  href="{{ route('paises.create') }}" class="btn  btn-primary pull-left">Nuevo Pais</a>  

   	      <table id=""  class="table table-hover table-striped table-bordered">
				<thead>
				<tr>
					<th width="50px">Nombre</th>
					<th>Codigo</th>
					<th >Editar</th>
				    <th >Eliminar</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($paises as $pais)	
				<tr>
					<td  width="25%">{{ $pais->nombre }}</td>
					<td  width="25%">{{ $pais->codigo }}</td>
					<td width="5%" >
					 <a href="{{ route('paises.edit',$pais->id) }}" class="btn btn-sm btn-default">Editar</a>
					</td>
					<td width="5%">
						 {!! Form::open(['route' => ['paises.destroy', $pais->id], 'method' => 'DELETE']) !!}
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


