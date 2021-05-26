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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categoriaCongresos.index') }}" class="btn btn-default">Cancelar</a>
</div>
