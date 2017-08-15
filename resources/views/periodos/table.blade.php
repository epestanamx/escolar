<table class="table table-responsive" id="periodos-table">
    <thead>
        <th>Inicio</th>
        <th>Fin</th>
        <th>Estado</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($periodos as $periodo)
        <tr>
            <td>{!! $periodo->fecha_inicio !!}</td>
            <td>{!! $periodo->fecha_fin !!}</td>
            <td>{!! $periodo->activo == 1 ? 'Activo' : 'Desactivado' !!}</td>
            <td>
                {!! Form::open(['route' => ['periodos.destroy', $periodo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('periodos.show', [$periodo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('periodos.edit', [$periodo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>