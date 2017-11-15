<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Nombre</th>
      <th>Alumno</th>
      <th>Empresa</th>
      <th>Asesor Empresarial</th>
      <th>Asesor Academico</th>
        <th>Acciones</th>
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
                  <a href="{{ route('formatos.definicion', ['idProyecto' => $proyecto->id])}}" target="_blank" class='btn btn-labeled btn-info btn-sm'><i class="fa fa-print"></i></a>
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
