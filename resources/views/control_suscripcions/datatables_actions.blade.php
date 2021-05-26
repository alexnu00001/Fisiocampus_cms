{!! Form::open(['route' => ['controlSuscripcions.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('controlSuscripcions.show', $id) }}" class='btn-default btn-sm' data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">
        <i class="feather icon-eye"></i>
    </a>
    <a href="{{ route('controlSuscripcions.edit', $id) }}" class='btn btn-default btn-sm' data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">
        <i class="feather icon-edit"></i>
    </a>
    {!! Form::button('<i class="feather icon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => "return confirm('¿Esta Seguro?')"
    ]) !!}
</div>
{!! Form::close() !!}
