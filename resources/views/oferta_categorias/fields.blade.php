<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::number('categoria_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Oferta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    {!! Form::number('oferta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ofertaCategorias.index') }}" class="btn btn-default">Cancel</a>
</div>
