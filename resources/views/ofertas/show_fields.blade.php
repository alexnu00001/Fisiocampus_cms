<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{{ $oferta->nombre }}</td>
</tr>


<!-- Descripcion Field -->
<tr>
  <th>{!! Form::label('descripcion', 'Descripcion:') !!}</th>
  <td>{{ $oferta->descripcion }}</td>
</tr>


<!-- Costo Field -->
<tr>
  <th>{!! Form::label('costo', 'Costo:') !!}</th>
  <td>{{ $oferta->costo }}</td>
</tr>


<!-- Pais Id Field -->
<tr>
  <th>{!! Form::label('pais_id', 'Pais:') !!}</th>
  <td>{{ $oferta->pais->nombre }}</td>
</tr>


<!-- Moneda Id Field -->
<tr>
  <th>{!! Form::label('moneda_id', 'Moneda:') !!}</th>
  <td>{{ $oferta->moneda->nombre }}</td>
</tr>


<!-- Oferta Tipo Id Field -->
<tr>
  <th>{!! Form::label('oferta_tipo_id', 'Oferta Tipo:') !!}</th>
  <td>{{ $oferta->ofertaTipo->nombre }}</td>
</tr>


<!-- Is Activo Field -->
<tr>
  <th>{!! Form::label('is_activo', 'Es Activo Para el usuario Integrador:') !!}</th>
  <td>@if($oferta->is_activo) SI @else NO @endif</td>
</tr>


<!-- Is Public Field -->
<tr>
  <th>{!! Form::label('is_public', 'Es Publico para los alumnos:') !!}</th>
  <td>@if($oferta->is_public) SI @else NO @endif </td>
</tr>


