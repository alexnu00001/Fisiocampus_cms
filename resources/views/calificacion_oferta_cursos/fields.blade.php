<!-- Oferta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oferta_id', 'Oferta Id:') !!}
    {!! Form::select('oferta_id', $ofertas, null, ['class' => 'form-control']) !!}
</div>

<!-- Curso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curso_id', 'Curso Id:') !!}
    {!! Form::select('curso_id', $cursos, null, ['class' => 'form-control']) !!}
</div>

<!-- Oda Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oda_id', 'Oda Id:') !!}
    {!! Form::select('oda_id',$odas, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Calificacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_calificacion_id', 'Tipo Calificacion Id:') !!}
    {!! Form::select('tipo_calificacion_id', $tipos, null, ['class' => 'form-control']) !!}
</div>

<!-- Porcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porcentaje', 'Porcentaje:') !!}
    {!! Form::text('porcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('calificacionOfertaCursos.index') }}" class="btn btn-default">Cancelar</a>
</div>
