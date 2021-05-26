<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>


<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
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
    <a href="{{ route('monedas.index') }}" class="btn btn-default">Cancelar</a>
</div>
