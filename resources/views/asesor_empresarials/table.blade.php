<table class="table table-responsive" id="asesorEmpresarials-table">
    <thead>
        <th>Nombres</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Empresa</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($asesorEmpresarials as $asesorEmpresarial)
        <tr>
            <td>{!! $asesorEmpresarial->titulo . ' ' . $asesorEmpresarial->nombres  . ' ' .$asesorEmpresarial->apellidos !!}</td>
            <td>{!! $asesorEmpresarial->email !!}</td>
            <td>{!! $asesorEmpresarial->telefono !!}</td>
            <td>{!! $asesorEmpresarial->empresa->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['asesorEmpresarials.destroy', $asesorEmpresarial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asesorEmpresarials.show', [$asesorEmpresarial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asesorEmpresarials.edit', [$asesorEmpresarial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>