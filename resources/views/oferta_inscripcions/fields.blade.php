<!-- Oferta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    {!! Form::number('oferta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscripcion Tipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscripcion_tipo_id', 'Inscripcion Tipo Id:') !!}
    {!! Form::number('inscripcion_tipo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ofertaInscripcions.index') }}" class="btn btn-default">Cancel</a>
</div>
