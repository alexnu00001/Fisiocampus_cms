<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    <p>{{ $ofertaCategoria->categoria_id }}</p>
</div>

<!-- Oferta Id Field -->
<div class="form-group">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    <p>{{ $ofertaCategoria->oferta_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ofertaCategoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ofertaCategoria->updated_at }}</p>
</div>

