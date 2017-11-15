<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Proyecto</th>
      <th>Descripción</th>
      <th>Semana</th>
      <th>Horas</th>
      <th>Competencias</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($etapas as $etapa)
          <tr>
            <td>{!! $etapa->proyecto->nombre !!}</td>
            <td>{!! $etapa->descripcion !!}</td>
            <td>{!! $etapa->semana !!}</td>
            <td>{!! $etapa->horas !!}</td>
            <td>{!! $etapa->competencias !!}</td>
            <td>
                {!! Form::open(['route' => ['etapas.destroy', $etapa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('etapas.show', [$etapa->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('etapas.edit', [$etapa->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
