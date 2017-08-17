<table class="table table-responsive" id="estadias-table">
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
    @foreach($estadias as $estadias)
        <tr>
            <td>{!! $estadias->alumno->nombre . ' ' . $estadias->alumno->apellidos !!}</td>
            <td>{!! $estadias->proyecto->empresa->nombre !!}</td>
            <td>{!! $estadias->proyecto->asesorEmpresarial->titulo . ' '. $estadias->proyecto->asesorEmpresarial->nombres . ' ' . $estadias->proyecto->asesorEmpresarial->apellidos !!}</td>
            <td>{!! $estadias->proyecto->asesorAcademico->titulo . ' ' . $estadias->proyecto->asesorAcademico->nombres . ' ' . $estadias->proyecto->asesorEmpresarial->apellidos !!}</td>
            <td>{!! $estadias->proyecto->nombre !!}</td>
            <td>{!! $estadias->liberada == 1 ? 'Liberada' : 'En proceso' !!}</td>
            <td>
                {!! Form::open(['route' => ['estadias.destroy', $estadias->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formatos.registro', [$estadias->proyecto->id]) !!}" class='btn btn-default btn-xs' target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                    <a href="{!! route('estadias.show', [$estadias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estadias.edit', [$estadias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>