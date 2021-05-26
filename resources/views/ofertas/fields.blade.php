<!-- Nombre Field -->
<div class="form-group col-sm-12">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
  </div>
</div>



<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('descripcion', 'Descripcion:') !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-sm-12">

  <div class="form-group col-sm-12">
    <h4 class="title">Banner</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
        @if(isset($oferta))
          @if($oferta->getFirstMediaUrl('ofertas_banner'))
          <div class="fileinput-preview  thumbnail">
            <img src="{{$oferta->getFirstMediaUrl('ofertas_banner')}}" style="width: 400px; height: 400px;" alt="{{$oferta->alt_banner != null ? $oferta->alt_banner : 'sin datos'}}" title="{{$oferta->title_banner != null ? $oferta->title_banner : 'sin datos'}}">

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
        <input type="file" name="img_banner_oferta" value="" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
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
        @if(isset($oferta))
          @if($oferta->getFirstMediaUrl('ofertas_principal'))
            <img src="{{$oferta->getFirstMediaUrl('ofertas_principal')}}" style="max-width: 200px;" alt="{{$oferta->alt_img_princ != null ? $oferta->alt_img_princ : 'sin datos'}}" title="{{$oferta->title_img_princ!= null ? $oferta->title_img_princ : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_principal_oferta" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
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
        @if(isset($oferta))
          @if($oferta->getFirstMediaUrl('ofertas_secundaria'))
            <img src="{{$oferta->getFirstMediaUrl('ofertas_secundaria')}}" style="max-width: 200px;" alt="{{$oferta->alt_img_sec != null ? $oferta->alt_img_sec : 'sin datos'}}" title="{{$oferta->title_img_sec != null ? $oferta->title_img_sec : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 200px; max-height: 150px;"></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_secundaria_oferta" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
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

        @if(isset($oferta))
          @if($oferta->getFirstMediaUrl('ofertas_icono'))
            <img src="{{$oferta->getFirstMediaUrl('ofertas_icono')}}" style="max-width: 200px;" alt="{{$oferta->alt_icono != null ? $oferta->alt_icono : 'sin datos'}}" title="{{$oferta->title_icono != null ? $oferta->title_icono : 'sin datos'}}">
          @endif
        @endif
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_icono_oferta" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
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


<!-- Costo Field -->
<div class="form-group col-sm-4" style="margin-top: 15px;">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::text('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-4" style="margin-top: 15px;">
    {!! Form::label('pais_id', 'Pais:') !!}
    {!! Form::select('pais_id', $paises ,null, ['class' => 'form-control select2']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-4" style="margin-top: 15px;">
  {!! Form::label('categorias', 'Categorias:') !!}
  {!! Form::select('categorias[]', $categorias ,null, ['class' => 'form-control select-multiple', 'multiple'=>'multiple']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-4" style="margin-top: 15px;">
  {!! Form::label('suscripciones', 'Suscripciones a las que pertenece:') !!}
  {!! Form::select('suscripciones[]', $suscripcionesTipos ,null, ['class' => 'form-control select-multiple', 'multiple'=>'multiple']) !!}
</div>

<!-- Moneda Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moneda_id', 'Moneda Id:') !!}
    {!! Form::select('moneda_id', $monedas ,null, ['class' => 'form-control']) !!}
</div>

<!-- Oferta Tipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oferta_tipo_id', 'Oferta Tipo Id:') !!}
    {!! Form::select('oferta_tipo_id', $tipoOfertas ,null, ['class' => 'form-control']) !!}
</div>

<!-- Is Activo Field -->
<div class="form-group col-sm-6">
  <div class="controls">
      {!! Form::label('is_activo', 'Activo:') !!}
      <label class="checkbox-inline">
          {!! Form::hidden('is_activo', 0) !!}
          {!! Form::checkbox('is_activo', '1', null) !!}
      </label>
  </div>
</div>


<!-- Is Public Field -->
<div class="form-group col-sm-6">
  <div class="controls">
      {!! Form::label('is_public', 'Público:') !!}
      <label class="checkbox-inline">
          {!! Form::hidden('is_public', 0) !!}
          {!! Form::checkbox('is_public', '1', null) !!}
      </label>
  </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ofertas.index') }}" class="btn btn-default">Cancelar</a>
</div>
