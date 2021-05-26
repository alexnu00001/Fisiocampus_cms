<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{{ $tipoCursos->nombre }}</td>
</tr>


<!-- Titulo Field -->
<tr>
  <th>{!! Form::label('titulo', 'Titulo:') !!}</th>
  <td>{{ $tipoCursos->titulo }}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{{ $tipoCursos->created_at }}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{{ $tipoCursos->updated_at }}</td>
</tr>


