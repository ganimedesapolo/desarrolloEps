@extends('adminlte::page')

@section('title', 'Tasa de Cambio')

@section('content_header')
    <h1>Tasa de Cambio</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
	    <div class="col-md-10 table-responsive">
           @include('layouts.msginfo')

   	      <table id="" class="table table-hover table-striped table-bordered">
				<thead>
				<tr>
					<th width="20px">Identificador</th>
					<th>Valor Actual </th>
					<th >&nbsp;</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($tasaCambios as $tasa)	
				<tr>
					<td>{{ $tasa->id }}</td>
					<td>{{ $tasa->valor }}</td>
					<td width="20px">
					   <a href="{{ route('tasaCambios.edit',$tasa->id) }}" class="btn btn-sm btn-default">Editar</a>
					</td>
				</tr>
		     @endforeach
			</tbody>	
		</table>
    </div> 
  </div>
</div>
@stop


