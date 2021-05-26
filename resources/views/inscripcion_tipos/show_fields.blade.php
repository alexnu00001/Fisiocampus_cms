<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $inscripcionTipo->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $inscripcionTipo->descripcion }}</p>
</div>

<!-- Estatus Id Field -->
<div class="form-group">
    {!! Form::label('estatus_id', 'Estatus Id:') !!}
    <p>{{ $inscripcionTipo->estatus_id }}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p>{{ $inscripcionTipo->observaciones }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inscripcionTipo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inscripcionTipo->updated_at }}</p>
</div>

