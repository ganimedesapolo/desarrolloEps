@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Usuarios Registrados</h1>
@stop

@section('content')
  <div class="col-sm-12">
   	<a  style="margin:10px;"  href="{{ route('usuario.crear') }}" class="btn btn-primary pull-left">Nuevo</a>
     <table id="tblusuarios" class="table table-hover table-striped">
				<thead>
				<tr>
					<th width="20px">Consecutivo</th>
					<th>Nombre </th>
					<th >&nbsp;</th>
					<th >&nbsp;</th>
					<th >&nbsp;</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($users as $user)	
				<tr>
					<td>{{ $user->id }}</td>
					<td>
						{{ $user->name }}
					</td>
					<td width="20px">
						<a href="" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						<a href="" class="btn btn-link">
							Borrar
						</a>
					</td>
				</tr>
		     @endforeach
			</tbody>	
		</table>
	</div> 
@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop
