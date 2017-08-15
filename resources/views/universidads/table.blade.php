<table class="table table-responsive" id="universidads-table">
    <thead>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Jefe Vinculacion Titulo</th>
        <th>Jefe Vinculacion Nombres</th>
        <th>Jefe Vinculacion Apellidos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($universidads as $universidad)
        <tr>
            <td>{!! $universidad->nombre !!}</td>
            <td>{!! $universidad->direccion !!}</td>
            <td>{!! $universidad->telefono !!}</td>
            <td>{!! $universidad->email !!}</td>
            <td>{!! $universidad->jefe_vinculacion_titulo !!}</td>
            <td>{!! $universidad->jefe_vinculacion_nombres !!}</td>
            <td>{!! $universidad->jefe_vinculacion_apellidos !!}</td>
            <td>
                {!! Form::open(['route' => ['universidads.destroy', $universidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('universidads.show', [$universidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('universidads.edit', [$universidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>