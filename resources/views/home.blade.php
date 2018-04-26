@extends('adminlte::page')

@section('title', 'Usuarios Registrados')

@section('content_header')
    <h1>Usuarios Registrados</h1>
@stop

@section('content')
  <div class="container">
      <div class="row">
		      	@if(session('info'))
		          <div class="col-md-3">
		                <div class="alert alert-success">
		                     {{ session('info') }}
		                </div>
		            </div>
			 @endif 
        <div class="col-md-11 ">
   	     <a  style="margin-bottom:20px;"  href="{{ route('users.create') }}" class="btn  btn-primary pull-left">Nuevo Usuario</a>
   	      <table id="tblusuarios" class="table table-hover table-striped">
				<thead>
				<tr>
					<th width="20px">Consecutivo</th>
					<th>Nombre </th>
					<th>Correo </th>
					<th>Administrador </th>
					<th >&nbsp;</th>
					<th >&nbsp;</th>
					<th >&nbsp;</th>
				</tr>
		    	</thead>
				
				<tbody>
				  @foreach($users as $user)	
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>@if ( $user->rol== 1) Si
						@elseif( $user->rol== 0) No
                        @endif
					</td>
					<td width="20px">
						<a href="" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
					   <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">Editar</a>
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
  </div>
</div>
@stop

@section('js')
    <script src="{{ asset('js/general.js') }}"> </script>
@stop


