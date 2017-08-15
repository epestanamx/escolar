<table class="table table-responsive" id="etapas-table">
    <thead>
        <th>Proyecto</th>
        <th>Descripción</th>
        <th>Semana</th>
        <th>Horas</th>
        <th>Competencias</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($etapas as $etapa)
        <tr>
            <td>{!! $etapa->proyecto->nombre !!}</td>
            <td>{!! $etapa->descripcion !!}</td>
            <td>{!! $etapa->semana !!}</td>
            <td>{!! $etapa->horas !!}</td>
            <td>{!! $etapa->competencias !!}</td>
            <td>
                {!! Form::open(['route' => ['etapas.destroy', $etapa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('etapas.show', [$etapa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('etapas.edit', [$etapa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>