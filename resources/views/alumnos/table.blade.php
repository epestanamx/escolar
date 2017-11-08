<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Correo eléctronico</th>
        <th>Telefono</th>
        <th>Carrera</th>
        <th>Cuatrimestre</th>
        <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{!! $alumno->matricula !!}</td>
            <td>{!! $alumno->nombres . ' ' .$alumno->apellidos !!}</td>
            <td>{!! $alumno->email !!}</td>
            <td>{!! $alumno->telefono !!}</td>
            <td>{!! $alumno->carrera->nombre !!}</td>
            <td>{!! $alumno->cuatrimestre  . ' (' .$alumno->grupo . ')' !!}</td>
            <td>
                {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alumnos.show', [$alumno->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('alumnos.edit', [$alumno->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
