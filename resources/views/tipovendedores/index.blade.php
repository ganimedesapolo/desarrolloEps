@extends('adminlte::page')

@section('title', 'Tipo de Vendedores')

@section('content_header')
    <h1>Tipo de Vendedores</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
	    <div class="col-md-10 table-responsive">
           @include('layouts.msginfo')

           <a  style="margin-bottom:20px;"  href="{{ route('tipovendedores.create') }}" class="btn  btn-primary pull-left">Nuevo Tipo de Vendedor</a>  

   	      <table id=""  class="table table-hover table-striped table-bordered">
				<thead>
				<tr>
					<th width="50px">Identificador</th>
					<th>Tipo Vendedor</th>
					<th >Editar</th>
				    <th >Eliminar</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($tipovendedores as $tipovendedor)	
				<tr>
					<td  width="25%">{{ $tipovendedor->id }}</td>
					<td  width="25%">{{ $tipovendedor->nombre_tipo }}</td>
					<td width="5%" >
					 <a href="{{ route('tipovendedores.edit',$tipovendedor->id) }}" class="btn btn-sm btn-default">Editar</a>
					</td>
					<td width="5%">
						 {!! Form::open(['route' => ['tipovendedores.destroy', $tipovendedor->id], 'method' => 'DELETE']) !!}
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


