<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $controlSuscripcion->titulo }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $controlSuscripcion->descripcion }}</p>
</div>

<!-- Id Stripe Field -->
<div class="form-group">
    {!! Form::label('id_stripe', 'Id Stripe:') !!}
    <p>{{ $controlSuscripcion->id_stripe }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $controlSuscripcion->status }}</p>
</div>

<!-- Id Pais Field -->
<div class="form-group">
    {!! Form::label('id_pais', 'Id Pais:') !!}
    <p>{{ $controlSuscripcion->id_pais }}</p>
</div>

