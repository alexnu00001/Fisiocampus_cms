<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $inscripcion->user_id }}</p>
</div>

<!-- Tipo Id Field -->
<div class="form-group">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    <p>{{ $inscripcion->tipo_id }}</p>
</div>

<!-- Forma Pago Field -->
<div class="form-group">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    <p>{{ $inscripcion->forma_pago }}</p>
</div>

<!-- Estatus Id Field -->
<div class="form-group">
    {!! Form::label('estatus_id', 'Estatus Id:') !!}
    <p>{{ $inscripcion->estatus_id }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $inscripcion->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $inscripcion->fecha_fin }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inscripcion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inscripcion->updated_at }}</p>
</div>

