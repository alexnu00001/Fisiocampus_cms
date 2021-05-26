<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'id'=>"descripcion", 'name'=>"descripcion" ]) !!}
</div>

<!-- Id Stripe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_stripe', 'Stripe - Verificar en Dashboard de Stripe:') !!}
    {!! Form::text('id_stripe', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Id Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_pais', 'País:') !!}
    {!! Form::number('id_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('controlSuscripcions.index') }}" class="btn btn-default">Cancelar</a>
</div>
