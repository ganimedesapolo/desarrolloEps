    {{ csrf_field() }}
	<div class="form-group">
	  {{ Form::label('name', 'Nombre nombre') }}
	  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>
	<div class="form-group">
	  {{ Form::label('email', 'Correo Electronico') }}
	  {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
	</div>
	<div class="form-group">
	  {{ Form::label('password', 'Clave') }}
	  {{ Form::password('password', ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
	  {{ Form::label('password_confirmation', 'Confirmar Clave') }}
	  {{ Form::password('password_confirmation',  ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
	      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	 </div>