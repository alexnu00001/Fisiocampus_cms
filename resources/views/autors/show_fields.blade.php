<!-- Nombre Field -->
<tr>
    <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
    <td>{{ $autor->nombre }}</td>
</tr>

<!-- Titulo Field -->
<tr>
    <th>{!! Form::label('titulo', 'Titulo:') !!}</th>
    <td>{{ $autor->titulo }}</td>
</tr>

<!-- Descripcion Corta Field -->
<tr>
    <th>{!! Form::label('descripcion_corta', 'Descripcion Corta:') !!}</th>
    <td>{{ $autor->descripcion_corta }}</td>
</tr>

<!-- Descripcion Larga Field -->
<tr>
    <th>{!! Form::label('descripcion_larga', 'Descripcion Larga:') !!}</th>
    <td>{{ $autor->descripcion_larga }}</td>
</tr>

<!-- Created At Field -->
<tr>
    <th>{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $autor->created_at }}</td>
</tr>

<!-- Updated At Field -->
<tr>
    <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $autor->updated_at }}</td>
</tr>
