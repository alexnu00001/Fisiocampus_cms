<!-- Oferta Id Field -->
<div class="form-group">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    <p>{{ $ofertaInscripcion->oferta_id }}</p>
</div>

<!-- Inscripcion Tipo Id Field -->
<div class="form-group">
    {!! Form::label('inscripcion_tipo_id', 'Inscripcion Tipo Id:') !!}
    <p>{{ $ofertaInscripcion->inscripcion_tipo_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ofertaInscripcion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ofertaInscripcion->updated_at }}</p>
</div>

