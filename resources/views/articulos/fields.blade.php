<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Autor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('autor_id', 'Autor del articulos (previamente registrado):') !!}
    {!! Form::select('autor_id', $autores, ['class' => 'form-control']) !!}
    <p>Registrar un autor <a href="{{route('autors.create')}}">aquí</a></p>
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-12">
    {!! Form::label('contenido', 'Contenido:') !!}
    {!! Form::textarea('contenido', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Referencias Field -->
<div class="form-group col-sm-12">
    {!! Form::label('referencias', 'Referencias:') !!}
    {!! Form::textarea('referencias', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articulos.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Configurar explorador de archivos -->
<script>
    CKEDITOR.replace( 'contenido', {
        filebrowserUploadUrl: "{{route('articulos.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });
</script>