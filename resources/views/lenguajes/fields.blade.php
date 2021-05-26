<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Nombre Ingles Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre_ingles', 'Nombre Ingles:') !!}
    {!! Form::text('nombre_ingles', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Simbolo Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('simbolo', 'Simbolo:') !!}
    {!! Form::text('simbolo', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lenguajes.index') }}" class="btn btn-default">Cancelar</a>
</div>
