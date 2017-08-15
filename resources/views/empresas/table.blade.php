<table class="table table-responsive" id="empresas-table">
    <thead>
        <th>Nombre</th>
        <th>Giro Comercial</th>
        <th>Dirección</th>
        <th>Responsable de RH</th>
        <th>Telefono</th>
        <th>Extension</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{!! $empresa->nombre !!}</td>
            <td>{!! $empresa->giro_comercial !!}</td>
            <td>{!! $empresa->dirección !!}</td>
            <td>{!! $empresa->titulo  . ' ' . $empresa->responsable_rh !!}</td>
            <td>{!! $empresa->telefono !!}</td>
            <td>{!! $empresa->extension !!}</td>
            <td>
                {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empresas.show', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empresas.edit', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>