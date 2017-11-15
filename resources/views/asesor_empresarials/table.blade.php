<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Nombres</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Empresa</th>
      <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($asesorEmpresarials as $asesorEmpresarial)
        <tr>
          <td>{!! $asesorEmpresarial->titulo . ' ' . $asesorEmpresarial->nombres  . ' ' .$asesorEmpresarial->apellidos !!}</td>
          <td>{!! $asesorEmpresarial->email !!}</td>
          <td>{!! $asesorEmpresarial->telefono !!}</td>
          <td>{!! $asesorEmpresarial->empresa->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['asesorEmpresarials.destroy', $asesorEmpresarial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asesorEmpresarials.show', [$asesorEmpresarial->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('asesorEmpresarials.edit', [$asesorEmpresarial->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
