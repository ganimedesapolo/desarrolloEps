{{ csrf_field() }}
	<div class="form-group">
	  {{ Form::label('titulo', 'Titulo') }}
	  {{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
	</div>
	<div class="form-group">
			    {{ Form::label('descripcion', 'Descripción') }}
			    {{ Form::textarea('descripcion', null, ['class' => 'form-control','rows'=>3]) }}
	</div>
    <div class="form-group">
				{{ Form::label('file','Imagen') }}
				{{ Form::file('file') }}
	</div>
	<div class="form-group">
	  {{ Form::label('idPais', 'Pais') }}
	  {{ Form::select('idPais', $paises, null, ['class' => 'form-control'] )}}
	</div>
	<div class="form-group">
	      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	 </div>

