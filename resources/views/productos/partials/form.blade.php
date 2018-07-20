{{ csrf_field() }}
	<div class="form-group">
	  {{ Form::label('nombre', 'Nombre') }}
	  {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
	</div>
	<div class="form-group">
			    {{ Form::label('descripcion_pdf', 'Descripción (ARCHIVO PDF)') }}
			    {{ Form::file('descripcion_pdf') }}
	</div>
    <div class="form-group">
				{{ Form::label('foto','Fotografia') }}
				{{ Form::file('foto') }}
	</div>
    <div class="form-group">
	  {{ Form::label('video_youtube_1', 'URL Video Youtube 1') }}
	  {{ Form::text('video_youtube_1', null, ['class' => 'form-control', 'id' => 'video_youtube_1']) }}
	</div>
    <div class="form-group">
	  {{ Form::label('video_youtube_2', 'URL Video Youtube 2') }}
	  {{ Form::text('video_youtube_2', null, ['class' => 'form-control', 'id' => 'video_youtube_2']) }}
	</div>
	<div class="form-group">
	  {{ Form::label('idLineaNegocio', 'Linea de Negocio') }}
	  {{ Form::select('idLineaNegocio', $lineaNegocios, null, ['class' => 'form-control','placeholder' => 'Por favor seleccione'] )}}
	</div>
	<div class="form-group">
	      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	 </div>
