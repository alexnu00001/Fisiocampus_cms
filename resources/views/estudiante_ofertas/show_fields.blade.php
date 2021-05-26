<!-- Estudiante Id Field -->
<div class="form-group">
    {!! Form::label('estudiante_id', 'Estudiante Id:') !!}
    <p>{{ $estudianteOferta->estudiante_id }}</p>
</div>

<!-- Oferta Id Field -->
<div class="form-group">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    <p>{{ $estudianteOferta->oferta_id }}</p>
</div>

<!-- Estatus Id Field -->
<div class="form-group">
    {!! Form::label('estatus_id', 'Estatus Id:') !!}
    <p>{{ $estudianteOferta->estatus_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $estudianteOferta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $estudianteOferta->updated_at }}</p>
</div>

