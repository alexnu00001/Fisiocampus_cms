<!-- Estudiante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudiante_id', 'Estudiante Id:') !!}
    {!! Form::number('estudiante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Oferta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    {!! Form::number('oferta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Estatus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus_id', 'Estatus Id:') !!}
    {!! Form::number('estatus_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estudianteOfertas.index') }}" class="btn btn-default">Cancel</a>
</div>
