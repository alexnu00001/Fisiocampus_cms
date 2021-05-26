<!-- Linea 1 Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('linea_1', 'Linea 1:') !!}
    {!! Form::text('linea_1', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Linea 2 Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('linea_2', 'Linea 2:') !!}
    {!! Form::text('linea_2', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais_id', 'Pais Id:') !!}
    {!! Form::number('pais_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Postal Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('codigo_postal', 'Codigo Postal:') !!}
    {!! Form::text('codigo_postal', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Provincia Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('provincia', 'Provincia:') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Ciudad Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Referencia Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('referencia', 'Referencia:') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Alias Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('direccions.index') }}" class="btn btn-default">Cancelar</a>
</div>
