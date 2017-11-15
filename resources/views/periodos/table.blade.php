<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Inicio</th>
      <th>Fin</th>
      <th>Estado</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($periodos as $periodo)
          <tr>
              <td>{!! $periodo->fecha_inicio !!}</td>
              <td>{!! $periodo->fecha_fin !!}</td>
              <td>{!! $periodo->activo == 1 ? 'Activo' : 'Desactivado' !!}</td>
            <td>
                {!! Form::open(['route' => ['periodos.destroy', $periodo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('periodos.show', [$periodo->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('periodos.edit', [$periodo->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
