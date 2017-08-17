<table class="table table-responsive" id="proyectos-table">
    <thead>
        <th>Nombre</th>
        <th>Alumno</th>
        <th>Empresa</th>
        <th>Asesor Empresarial</th>
        <th>Asesor Academico</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($proyectos as $proyecto)
        <tr>
            <td>{!! $proyecto->nombre !!}</td>
            <td>{!! $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos !!}</td>
            <td>{!! $proyecto->empresa->nombre !!}</td>
            <td>{!! $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos !!}</td>
            <td>{!! $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formatos.definicion', [$proyecto->id]) !!}" class='btn btn-default btn-xs' target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>