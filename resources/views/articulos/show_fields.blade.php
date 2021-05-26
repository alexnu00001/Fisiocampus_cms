<!-- Titulo Field -->
<div class="form-group">
    <!--{!! Form::label('titulo', 'Titulo:') !!}-->
    <h1>{{ $articulo->titulo }}</h1>
</div>

<!-- Contenido Field -->
<div class="form-group">
    <!--{!! Form::label('contenido', 'Contenido:') !!}-->
    {!! $articulo->contenido !!}
</div>

<!-- Referencias Field -->
<div class="form-group">
    <h3>Referencias Bibliográficas</h3>
        {!! $articulo->referencias !!}
    
</div>

<!-- Created At Field -->
<div class="form-group">
    <div class="alert alert-dark">
        <p>Publicado: {{ $articulo->created_at->format('d/m/Y') }} / Revisado y modificado: {{ $articulo->updated_at->format('d/m/Y') }}</p>
    </div>
</div>

<!-- Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $articulo->updated_at }}</p>
</div>
-->

