<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Descripcion Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Grado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado_id', 'Grado Id:') !!}
    {!! Form::number('grado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Escala Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escala', 'Escala:') !!}
    {!! Form::number('escala', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('planEstudios.index') }}" class="btn btn-default">Cancelar</a>
</div>
