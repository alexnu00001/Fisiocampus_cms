<!-- Documento Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('documento', 'Documento:') !!}
    {!! Form::text('documento', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Descripcion Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Estatus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus_id', 'Estatus Id:') !!}
    {!! Form::number('estatus_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estatuses.index') }}" class="btn btn-default">Cancelar</a>
</div>
