<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Alumno</th>
      <th>Empresa</th>
      <th>Asesor estadiarial</th>
      <th>Asesor academico</th>
      <th>Proyecto</th>
      <th>Estado</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($estadias as $estadia)
          <tr>
              <td>{!! $estadia->alumno->nombre . ' ' . $estadia->alumno->apellidos !!}</td>
              <td>{!! $estadia->proyecto->empresa->nombre !!}</td>
              <td>{!! $estadia->proyecto->asesorEmpresarial->titulo . ' '. $estadia->proyecto->asesorEmpresarial->nombres . ' ' . $estadia->proyecto->asesorEmpresarial->apellidos !!}</td>
              <td>{!! $estadia->proyecto->asesorAcademico->titulo . ' ' . $estadia->proyecto->asesorAcademico->nombres . ' ' . $estadia->proyecto->asesorEmpresarial->apellidos !!}</td>
              <td>{!! $estadia->proyecto->nombre !!}</td>
              <td>{!! $estadia->liberada == 1 ? 'Liberada' : 'En proceso' !!}</td>
            <td>
                {!! Form::open(['route' => ['estadias.destroy', $estadia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('formatos.registro', ['idProyecto' => $estadia->proyecto->id])}}" target="_blank" class='btn btn-labeled btn-info btn-sm'><i class="fa fa-print"></i></a>
                    <a href="{!! route('estadias.show', [$estadia->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('estadias.edit', [$estadia->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
