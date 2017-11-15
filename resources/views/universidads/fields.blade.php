<div class="row">
  <div class="col-6">
    <!-- Nombre Field -->
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Direccion Field -->
    <div class="form-group">
        {!! Form::label('direccion', 'Direccion:') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Telefono Field -->
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <h4>Rector</h4>
  </div>
  <div class="col-2">
    <!-- Jefe Vinculacion Titulo Field -->
    <div class="form-group">
        {!! Form::label('rector_titulo', 'Titulo:') !!}
        {!! Form::text('rector_titulo', null, ['class' => 'form-control']) !!}
    </div>

  </div>
  <div class="col-5">
    <!-- Jefe Vinculacion Nombres Field -->
    <div class="form-group">
        {!! Form::label('rector_nombres', 'Nombres:') !!}
        {!! Form::text('rector_nombres', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-5">
    <!-- Jefe Vinculacion Apellidos Field -->
    <div class="form-group">
        {!! Form::label('rector_apellidos', 'Apellidos:') !!}
        {!! Form::text('rector_apellidos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <h4>Jefe de vinculación</h4>
  </div>
  <div class="col-2">
    <!-- Jefe Vinculacion Titulo Field -->
    <div class="form-group">
        {!! Form::label('jefe_vinculacion_titulo', 'Titulo:') !!}
        {!! Form::text('jefe_vinculacion_titulo', null, ['class' => 'form-control']) !!}
    </div>

  </div>
  <div class="col-5">
    <!-- Jefe Vinculacion Nombres Field -->
    <div class="form-group">
        {!! Form::label('jefe_vinculacion_nombres', 'Nombres:') !!}
        {!! Form::text('jefe_vinculacion_nombres', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-5">
    <!-- Jefe Vinculacion Apellidos Field -->
    <div class="form-group">
        {!! Form::label('jefe_vinculacion_apellidos', 'Apellidos:') !!}
        {!! Form::text('jefe_vinculacion_apellidos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a href="{!! url('/home') !!}" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
