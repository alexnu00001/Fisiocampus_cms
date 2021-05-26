<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
  </div>
</div>


<!-- Tipo Field -->
<div class="form-group col-sm-6">
  <div class="controls">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-sm-6">
  @isset($categoria)
    @if(sizeof($categoria->getMedia('categoria_principal')) > 0)
      <img src="{{ $categoria->getFirstMediaUrl('categoria_principal')}}" alt="Agregar" width="100%" height="80%">
    @endif
  @endisset
  <div class="form-group col-sm-12">
    <h4 class="title">Imagen principal</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_principal" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6">
  @isset($categoria)
    @if(sizeof($categoria->getMedia('categoria_icono')) > 0)
      <img src="{{ $categoria->getFirstMediaUrl('categoria_icono')}}" alt="Agregar" width="30%" >
    @endif
  @endisset
  <div class="form-group col-sm-12">
    <h4 class="title">Imagen Icono</h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div class="fileinput-new thumbnail" style="">
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
      <div>
      <span class="btn btn-primary btn-round btn-file">
        <span class="fileinput-new" >Seleccionar imagen</span>
        <span class="fileinput-exists">Cambiar</span>
        <input type="hidden">
        <input type="file" name="img_icono" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/png" data-max-file-size="20M" >
        <div class="ripple-container"></div></span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
  <div class="controls">
      {!! Form::label('descripcion', 'Descripcion:') !!}
      {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
  </div>
</div>



<!-- Rel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rel_id', 'Rel Id:') !!}
    {!! Form::number('rel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categorias.index') }}" class="btn btn-default">Cancelar</a>
</div>
