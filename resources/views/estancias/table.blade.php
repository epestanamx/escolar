<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Alumno</th>
      <th>Empresa</th>
      <th>Asesor estanciarial</th>
      <th>Asesor academico</th>
      <th>Proyecto</th>
      <th>Estado</th>
        <th>Acciones</th>
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
                  <a href="{{ route('formatos.registro', ['idProyecto' => $estancia->proyecto->id])}}" target="_blank" class='btn btn-labeled btn-info btn-sm'><i class="fa fa-print"></i></a>
                    <a href="{!! route('estancias.show', [$estancia->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('estancias.edit', [$estancia->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
