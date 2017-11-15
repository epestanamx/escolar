<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
        <th>Nombre</th>
        <th>Coordinador</th>
        <th>Activa</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($carreras as $carrera)
          <tr>
              <td>{!! $carrera->nombre !!}</td>
              <td>{!! $carrera->coordinador !!}</td>
              <td>{!! $carrera->activa == 1 ? 'Habilitada' : 'Deshabilitada' !!}</td>
            <td>
                {!! Form::open(['route' => ['carreras.destroy', $carrera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('carreras.show', [$carrera->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('carreras.edit', [$carrera->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
