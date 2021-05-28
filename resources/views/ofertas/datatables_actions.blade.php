{!! Form::open(['route' => ['ofertas.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('ofertas.show', $id) }}" class='btn btn-icon btn-outline-info waves-effect' data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">
        <i class="feather icon-eye"></i>
    </a>
    <a href="{{ route('ofertas.edit', $id) }}" class='btn btn-icon btn-outline-primary waves-effect' data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">
        <i class="feather icon-edit"></i>
    </a>
    {!! Form::button('<i class="feather icon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-icon btn-outline-danger waves-effect',
        'onclick' => "return confirm('¿Esta Seguro?')"
    ]) !!}
</div>
{!! Form::close() !!}