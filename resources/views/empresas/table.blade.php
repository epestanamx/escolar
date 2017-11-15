<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Nombre</th>
      <th>Giro Comercial</th>
      <th>Dirección</th>
      <th>Responsable de RH</th>
      <th>Telefono</th>
      <th>Extension</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($empresas as $empresa)
          <tr>
            <td>{!! $empresa->nombre !!}</td>
            <td>{!! $empresa->giro_comercial !!}</td>
            <td>{!! $empresa->dirección !!}</td>
            <td>{!! $empresa->titulo  . ' ' . $empresa->responsable_rh !!}</td>
            <td>{!! $empresa->telefono !!}</td>
            <td>{!! $empresa->extension !!}</td>
            <td>
                {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empresas.show', [$empresa->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('empresas.edit', [$empresa->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
