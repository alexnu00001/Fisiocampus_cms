<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{{ $categoria->nombre }}</td>
</tr>


<!-- Tipo Field -->
<tr>
  <th>{!! Form::label('tipo', 'Tipo:') !!}</th>
  <td>{{ $categoria->tipo }}</td>
</tr>


<!-- Descripcion Field -->
<tr>
  <th>{!! Form::label('descripcion', 'Descripcion:') !!}</th>
  <td>{{ $categoria->descripcion }}</td>
</tr>


<!-- Rel Id Field -->
<tr>
  <th>{!! Form::label('rel_id', 'Rel Id:') !!}</th>
  <td>{{ $categoria->rel_id }}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{{ $categoria->created_at }}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{{ $categoria->updated_at }}</td>
</tr>


