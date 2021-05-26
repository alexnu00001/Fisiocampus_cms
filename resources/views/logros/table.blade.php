<table class="table" id="logros_Table">

    <thead>
        <th>Nombre </th>
        <th>Descripcion</th>
        <th>Tipo id</th>
        <th>Archivo</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($logros as $logro)
        <tr>
            <td>{!! $logro ->nombre!!}</td>
            <td>{!! $logro ->descripcion !!}</td>
            <td>{!! $logro ->tipo_id !!}</td>
            <td><img src="{{$logro->getFirstMediaUrl('logros')}}"
              style="width: 100px; height: 100px"></a></td>
            <td>
               {!! Form::open(['route' => ['logros.destroy', $logro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('logros.show', [$logro->id]) !!}" class='btn btn-default btn-xs'><i class="feather icon-eye"></i></a>
                    <a href="{!! route('logros.edit', [$logro->id]) !!}" class='btn btn-default btn-xs'><i class="feather icon-edit"></i></a>
                    {!! Form::button('<i class="feather icon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que desea eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>