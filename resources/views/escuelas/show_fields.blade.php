<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $escuela->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $escuela->descripcion }}</p>
</div>

<!-- Siglas Field -->
<div class="form-group">
    {!! Form::label('siglas', 'Siglas:') !!}
    <p>{{ $escuela->siglas }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $escuela->link }}</p>
</div>

<!-- Direccion Id Field -->
<div class="form-group">
    {!! Form::label('direccion_id', 'Direccion Id:') !!}
    <p>{{ $escuela->direccion_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $escuela->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $escuela->updated_at }}</p>
</div>

