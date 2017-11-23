<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Fecha</th>
      <th>Alumno</th>
      <th>Empresa</th>
      <th>Periodo escolar</th>
      <th>Tipo</th>
      <th>Horas</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($cartaPresentacions as $cartaPresentacion)
          <tr>
              <td>{{ $cartaPresentacion->created_at->format('d/m/Y')}}</td>
              <td>{!! $cartaPresentacion->alumno->nombres . ' ' . $cartaPresentacion->alumno->apellidos !!}</td>
              <td>{!! $cartaPresentacion->empresa->nombre !!}</td>
              <td>{!! $cartaPresentacion->periodo->fecha_inicio . ' - ' . $cartaPresentacion->periodo->fecha_fin !!}</td>
              <td>{!! $cartaPresentacion->tipo !!}</td>
              <td>{!! $cartaPresentacion->horas !!}</td>
            <td>
                {!! Form::open(['route' => ['cartas-presentacion.destroy', $cartaPresentacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                  <a href="{{ route('formatos.presentacion', ['idProyecto' => $cartaPresentacion->id])}}" target="_blank" class='btn btn-labeled btn-info btn-sm'><i class="fa fa-print"></i></a>
                    <a href="{!! route('cartas-presentacion.show', [$cartaPresentacion->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('cartas-presentacion.edit', [$cartaPresentacion->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
