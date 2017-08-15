<table class="table table-responsive" id="asesorAcademicos-table">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($asesorAcademicos as $asesorAcademico)
        <tr>
            <td>{!! $asesorAcademico->titulo . ' ' . $asesorAcademico->nombres . ' ' . $asesorAcademico->apellidos !!}</td>
            <td>{!! $asesorAcademico->email !!}</td>
            <td>{!! $asesorAcademico->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['asesorAcademicos.destroy', $asesorAcademico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asesorAcademicos.show', [$asesorAcademico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asesorAcademicos.edit', [$asesorAcademico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el registro seleccionado?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>