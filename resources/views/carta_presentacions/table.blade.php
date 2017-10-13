<table class="table table-responsive" id="cartaPresentacions-table">
    <thead>
        <th>Idalumno</th>
        <th>Idempresa</th>
        <th>Idperiodo</th>
        <th>Tipo</th>
        <th>Horas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cartaPresentacions as $cartaPresentacion)
        <tr>
            <td>{!! $cartaPresentacion->idAlumno !!}</td>
            <td>{!! $cartaPresentacion->idEmpresa !!}</td>
            <td>{!! $cartaPresentacion->idPeriodo !!}</td>
            <td>{!! $cartaPresentacion->tipo !!}</td>
            <td>{!! $cartaPresentacion->horas !!}</td>
            <td>
                {!! Form::open(['route' => ['cartaPresentacions.destroy', $cartaPresentacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cartaPresentacions.show', [$cartaPresentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cartaPresentacions.edit', [$cartaPresentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>