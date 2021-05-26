<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>

<div class="col-sm-12">
  <div class="form-group col-sm-12">
    <h4 class="title">Banner</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
        @if(isset($secuenciaAprendizaje))
          @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_banner'))
          <div class="fileinput-preview  thumbnail">
            <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_banner')}}" style="width: 400px; height: 400px;" alt="{{$secuenciaAprendizaje->alt_banner != null ? $secuenciaAprendizaje->alt_banner : 'sin datos'}}" title="{{$secuenciaAprendizaje->title_banner != null ? $secuenciaAprendizaje->title_banner : 'sin datos'}}">

          </div>
          @endif
        @endif
      </div>

      <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 400px; max-height: 400px;">
      </div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>

        <input type="hidden">
        <input type="file" name="img_banner_secuenciaaprendisaje" value="" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
    <div class="col-sm-12 row">
         <div class="col-sm-6">
            {{Form::text('alt_banner', null, ['class' => 'form-control', 'placeholder' => 'Alt del banner'])}}
        </div>
        <div class="col-sm-6">
            {{Form::text('title_banner', null, ['class' => 'form-control', 'placeholder' => 'Title del banner'])}}
        </div>
    </div>
  </div>
</div>

<div class="col-sm-4">

  <div class="form-group col-sm-12">
    <h4 class="title">Imagen principal</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
        @if(isset($secuenciaAprendizaje))
          @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_principal'))
            <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_principal')}}" style="max-width: 200px;" alt="{{$secuenciaAprendizaje->alt_img_princ != null ? $secuenciaAprendizaje->alt_img_princ : 'sin datos'}}" title="{{$secuenciaAprendizaje->title_img_princ!= null ? $secuenciaAprendizaje->title_img_princ : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_principal_secuenciaaprendisaje" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
  </div>
   <div class="col-sm-12 row">
         <div class="col-sm-8" style="margin-bottom: 15px;">
            {{Form::text('alt_img_princ', null, ['class' => 'form-control', 'placeholder' => 'Alt de la imagen principal'])}}
        </div>
        <div class="col-sm-8">
            {{Form::text('title_img_princ', null, ['class' => 'form-control', 'placeholder' => 'Title de la imagen principal'])}}
        </div>
    </div>
</div>

<div class="col-sm-4">

  <div class="form-group col-sm-12">
    <h4 class="title">Imagen secundaria</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
        @if(isset($secuenciaAprendizaje))
          @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_secundaria'))
            <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_secundaria')}}" style="max-width: 200px;" alt="{{$secuenciaAprendizaje->alt_img_sec != null ? $secuenciaAprendizaje->alt_img_sec : 'sin datos'}}" title="{{$secuenciaAprendizaje->title_img_sec != null ? $secuenciaAprendizaje->title_img_sec : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 200px; max-height: 150px;"></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_secundaria_secuenciaaprendisaje" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-12 row">
         <div class="col-sm-8" style="margin-bottom: 15px;">
            {{Form::text('alt_img_sec', null, ['class' => 'form-control', 'placeholder' => 'Alt de la imagen secundaria'])}}
        </div>
        <div class="col-sm-8">
            {{Form::text('title_img_sec', null, ['class' => 'form-control', 'placeholder' => 'Title de la imagen secundaria'])}}
        </div>
    </div>
</div>

<div class="col-sm-4">

  <div class="form-group col-sm-12">
    <h4 class="title">Icono</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">

        @if(isset($secuenciaAprendizaje))
          @if($secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_icono'))
            <img src="{{$secuenciaAprendizaje->getFirstMediaUrl('secuenciasAprendisajes_icono')}}" style="max-width: 200px;" alt="{{$secuenciaAprendizaje->alt_icono != null ? $secuenciaAprendizaje->alt_icono : 'sin datos'}}" title="{{$secuenciaAprendizaje->title_icono != null ? $secuenciaAprendizaje->title_icono : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_icono_secuenciaaprendisaje" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
  </div>


  <div class="col-sm-12 row">
       <div class="col-sm-8" style="margin-bottom: 15px;">
          {{Form::text('alt_icono', null, ['class' => 'form-control', 'placeholder' => 'Alt del icono'])}}
      </div>
      <div class="col-sm-8">
          {{Form::text('title_icono', null, ['class' => 'form-control', 'placeholder' => 'Title del icono'])}}
      </div>
  </div>
</div>

<!-- Is Seriado Field -->
<div class="form-group col-sm-6" style="margin-top:30px;">
  <div class="controls">
      {!! Form::label('is_seriado', 'Is Seriado:') !!}
      <label class="checkbox-inline">
          {!! Form::hidden('is_seriado', 0) !!}
          {!! Form::checkbox('is_seriado', '1', null) !!}
      </label>
  </div>
</div>


<!-- Curso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curso_id', 'Curso Id:') !!}
    {!! Form::number('curso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('secuenciaAprendizajes.index') }}" class="btn btn-default">Cancelar</a>
</div>
