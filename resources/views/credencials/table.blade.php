<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Fecha</th>
      <th>Alumno</th>
      <th>Tipo</th>
      <th>Estado</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($credencials as $credencial)
          <tr>
              <td>{{ $credencial->created_at->format('d/m/Y') }}</td>
              <td>{!! $credencial->alumno->nombres .' ' .$credencial->alumno->apellidos !!}</td>
              <td>{!! $credencial->tipo !!}</td>
              <td>{!! $credencial->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['credenciales.destroy', $credencial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('credenciales.show', [$credencial->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('credenciales.edit', [$credencial->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
