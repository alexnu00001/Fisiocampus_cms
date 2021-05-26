<!-- Titulo Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Subtitulo Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('subtitulo', 'Subtitulo:') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo') !!}
</div>
<div class="clearfix"></div>

<!-- Imagen Cabecera Fondo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen_cabecera_fondo', 'Imagen Cabecera Fondo:') !!}
    {!! Form::file('imagen_cabecera_fondo') !!}
</div>
<div class="clearfix"></div>

<!-- Categoria Congreso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_congreso_id', 'Categoria Congreso Id:') !!}
    {!! Form::number('categoria_congreso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Streaming Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('video_streaming', 'Video Streaming:') !!}
    {!! Form::text('video_streaming', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Descripcion Temario Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('descripcion_temario', 'Descripcion Temario:') !!}
      {!! Form::textarea('descripcion_temario', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Programa Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('programa', 'Programa:') !!}
    {!! Form::text('programa', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Direccion Id Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('direccion_id', 'Direccion Id:') !!}
    {!! Form::text('direccion_id', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Is Fecha Final Field -->
<div class="form-group col-sm-6">
  <div class="controls">
      {!! Form::label('is_fecha_final', 'Is Fecha Final:') !!}
      <label class="checkbox-inline">
          {!! Form::hidden('is_fecha_final', 0) !!}
          {!! Form::checkbox('is_fecha_final', '1', null) !!}
      </label>
  </div>
</div>


<!-- Numero Plazas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_plazas', 'Numero Plazas:') !!}
    {!! Form::number('numero_plazas', null, ['class' => 'form-control']) !!}
</div>

<!-- Duracion Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('duracion', 'Duracion:') !!}
    {!! Form::text('duracion', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Tipo Congreso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_congreso_id', 'Tipo Congreso Id:') !!}
    {!! Form::number('tipo_congreso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('congresos.index') }}" class="btn btn-default">Cancelar</a>
</div>
