<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{{ $tipoProfesor->nombre }}</td>
</tr>


<!-- Descripcion Field -->
<tr>
  <th>{!! Form::label('descripcion', 'Descripcion:') !!}</th>
  <td>{{ $tipoProfesor->descripcion }}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{{ $tipoProfesor->created_at }}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{{ $tipoProfesor->updated_at }}</td>
</tr>


