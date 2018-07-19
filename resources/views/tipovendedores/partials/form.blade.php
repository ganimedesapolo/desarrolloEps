{{ csrf_field() }}
	<div class="form-group">
	  {{ Form::label('nombre_tipo', 'Nombre Tipo Vendedor') }}
	  {{ Form::text('nombre_tipo', null, ['class' => 'form-control', 'id' => 'nombre_tipo']) }}
	</div>
	
	<div class="form-group">
	      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>
