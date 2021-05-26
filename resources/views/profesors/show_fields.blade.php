<!-- Persona Id Field -->
<tr>
  <th>{!! Form::label('persona_id', 'Persona Id:') !!}</th>
  <td>{{ $profesor->persona_id }}</td>
</tr>

<!-- Curso Id Field -->
<tr>
  <th>{!! Form::label('curso', 'Curso:') !!}</th>
  <td>{{ $curso->curso }}</td>
</tr>


<!-- Resumen Field -->
<tr>
  <th>{!! Form::label('resumen', 'Resumen:') !!}</th>
  <td>{{ $profesor->resumen }}</td>
</tr>


<!-- Sobre Mi Field -->
<tr>
  <th>{!! Form::label('sobre_mi', 'Sobre Mi:') !!}</th>
  <td>{{ $profesor->sobre_mi }}</td>
</tr>


<!-- Redes Field -->
<tr>
  <th>{!! Form::label('redes', 'Redes:') !!}</th>
  <td>{{ $profesor->redes }}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{{ $profesor->created_at }}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{{ $profesor->updated_at }}</td>
</tr>


