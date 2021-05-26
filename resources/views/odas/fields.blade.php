<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    {{  Form::hidden('orden', 6)}}
  </div>
</div>


<!-- Documento Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('doc_principal_oda', 'Actividad o Tarea:') !!}
    {!! Form::file('doc_principal_oda',['class' => 'form-control']) !!}
  </div>
</div>


<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('descripcion', 'Descripcion:') !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Archivo Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('archivo', 'Archivo:') !!}
      {!! Form::textarea('archivo', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Tipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    {!! Form::number('tipo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('odas.index') }}" class="btn btn-default">Cancelar</a>
</div>
