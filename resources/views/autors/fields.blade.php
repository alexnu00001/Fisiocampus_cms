<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Autor -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('img_autor', 'Imagen de autor:') !!}
    {!! Form::file('img_autor',['class' => 'form-control', 'accept' => "image/*" ]) !!}
  </div>
</div>

<!-- Descripcion Corta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_corta', 'Descripcion Corta:') !!}
    {!! Form::text('descripcion_corta', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Larga Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion_larga', 'Descripcion Larga:') !!}
    {!! Form::textarea('descripcion_larga', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('autors.index') }}" class="btn btn-default">Cancel</a>
</div>
