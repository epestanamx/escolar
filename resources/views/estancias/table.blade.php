<table class="table table-responsive" id="estancias-table">
    <thead>
        <th>Alumno</th>
        <th>Empresa</th>
        <th>Asesor empresarial</th>
        <th>Asesor academico</th>
        <th>Proyecto</th>
        <th>Estado</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($estancias as $estancia)
        <tr>
            <td>{!! $estancia->alumno->nombre . ' ' . $estancia->alumno->apellidos !!}</td>
            <td>{!! $estancia->proyecto->empresa->nombre !!}</td>
            <td>{!! $estancia->proyecto->asesorEmpresarial->titulo . ' '. $estancia->proyecto->asesorEmpresarial->nombres . ' ' . $estancia->proyecto->asesorEmpresarial->apellidos !!}</td>
            <td>{!! $estancia->proyecto->asesorAcademico->titulo . ' ' . $estancia->proyecto->asesorAcademico->nombres . ' ' . $estancia->proyecto->asesorEmpresarial->apellidos !!}</td>
            <td>{!! $estancia->proyecto->nombre !!}</td>
            <td>{!! $estancia->liberada == 1 ? 'Liberada' : 'En proceso' !!}</td>
            <td>
                {!! Form::open(['route' => ['estancias.destroy', $estancia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formatos.registro', [$estancia->proyecto->id]) !!}" class='btn btn-default btn-xs' target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                    <a href="{!! route('estancias.show', [$estancia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estancias.edit', [$estancia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>