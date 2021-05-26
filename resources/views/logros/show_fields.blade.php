<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $logro->nombre }}</p>
</div>

<!-- Archivo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('archivo', 'Archivo:') !!}
    <p><img src="{{$logro->getFirstMediaUrl('logros')}}"
    style="width: 100px; height: 100px"></p>
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $logro->descripcion }}</p>
</div>

<!-- Tipo Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    <p>{{ $logro->tipo_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-4">
    {!! Form::label('created_at', 'Fecha de creacion:') !!}
    <p>{{ $logro->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-4">
    {!! Form::label('updated_at', 'Fecha de actualizacion:') !!}
    <p>{{ $logro->updated_at }}</p>
</div>

