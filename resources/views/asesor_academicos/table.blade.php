<table id="datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
    <thead>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($asesorAcademicos as $asesorAcademico)
        <tr>
          <td>{!! $asesorAcademico->titulo . ' ' . $asesorAcademico->nombres . ' ' . $asesorAcademico->apellidos !!}</td>
          <td>{!! $asesorAcademico->email !!}</td>
          <td>{!! $asesorAcademico->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['asesores-academicos.destroy', $asesorAcademico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asesores-academicos.show', [$asesorAcademico->id]) !!}" class='btn btn-labeled btn-success btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('asesores-academicos.edit', [$asesorAcademico->id]) !!}" class='btn btn-labeled btn-warning btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<span class="btn-label"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'class' => 'btn btn-labeled btn-danger btn-sm', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
