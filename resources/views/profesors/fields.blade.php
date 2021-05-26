<!-- Persona Id Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::select('persona_id',$persona,null, ['class' => 'form-control']) !!}
  </div>
</div>

<!-- Curso Id Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('curso', 'Curso Id:') !!}
    {!! Form::select('curso', $curso, null, ['class' => 'form-control']) !!}
  </div>
</div>

<!-- Imagen Principal Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('img_principal_profesores', 'Imagen principal:') !!}
    {!! Form::file('img_principal_profesores',['class' => 'form-control', 'accept' => "image/*" ]) !!}
  </div>
</div>

<!-- Resumen Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('resumen', 'Resumen:') !!}
      {!! Form::textarea('resumen', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Sobre Mi Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('sobre_mi', 'Sobre Mi:') !!}
      {!! Form::textarea('sobre_mi', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Redes Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('redes', 'Redes:') !!}
    {!! Form::text('redes', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('profesors.index') }}" class="btn btn-default">Cancelar</a>
</div>
