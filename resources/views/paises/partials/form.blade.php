{{ csrf_field() }}
	<div class="form-group">
	  {{ Form::label('nombre', 'Nombre Pais') }}
	  {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
	</div>
	<div class="form-group">
	  {{ Form::label('codigo', 'Codigo Pais') }}<br>
	   <span><i>Por favor digite el codigo ISO 3166-1 alfa-2 del pais, puede consultarlo en esta <a href="http://utils.mucattu.com/iso_3166-1.html" target="_blank">tabla.</a><br>Digitelo cuidadosamente ya que de esto depende filtrar las ofertas y productos por pais.</i></span>	
	  {{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo']) }}
	</div>
	
	<div class="form-group">
	      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>
