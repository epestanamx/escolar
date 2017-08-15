<table class="table table-responsive" id="alumnos-table">
    <thead>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Nss</th>
        <th>Carrera</th>
        <th>Cuatrimestre</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{!! $alumno->matricula !!}</td>
            <td>{!! $alumno->nombres . ' ' .$alumno->apellidos !!}</td>
            <td>{!! $alumno->email !!}</td>
            <td>{!! $alumno->telefono !!}</td>
            <td>{!! $alumno->nss !!}</td>
            <td>{!! $alumno->carrera->nombre !!}</td>
            <td>{!! $alumno->cuatrimestre  . ' (' .$alumno->grupo . ')' !!}</td>
            <td>
                {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alumnos.show', [$alumno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alumnos.edit', [$alumno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>