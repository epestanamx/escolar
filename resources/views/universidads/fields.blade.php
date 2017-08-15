<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Vinculacion Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jefe_vinculacion_titulo', 'Jefe Vinculacion Titulo:') !!}
    {!! Form::text('jefe_vinculacion_titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Vinculacion Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jefe_vinculacion_nombres', 'Jefe Vinculacion Nombres:') !!}
    {!! Form::text('jefe_vinculacion_nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Vinculacion Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jefe_vinculacion_apellidos', 'Jefe Vinculacion Apellidos:') !!}
    {!! Form::text('jefe_vinculacion_apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! url('/home') !!}" class="btn btn-default">Cancelar</a>
</div>
