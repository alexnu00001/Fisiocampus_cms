<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Archivo Field-->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'Seleccione una imagen:') !!}
    {!! Form::file('archivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    {!! Form::number('tipo_id', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-10">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'files' => 'true']) !!}
    <a href="{{ route('logros.index') }}" class="btn btn-default">Cancelar</a>
</div>
