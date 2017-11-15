<div class="row">
  <div class="col-6">
    <!-- Matricula Field -->
    <div class="form-group">
        {!! Form::label('matricula', 'Matricula:') !!}
        {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Nombres Field -->
    <div class="form-group">
        {!! Form::label('nombres', 'Nombres:') !!}
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Apellidos Field -->
    <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos:') !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Sexo Field -->
    <div class="form-group">
        {!! Form::label('sexo', 'Sexo:') !!}
        <select name="sexo" id="sexo" class="form-control">
          <option value="Femenino">Femenino</option>
          <option value="Masculino"
          @isset($alumno)
            @if ($alumno->sexo != null)
              selected
            @endif
          @endisset>Masculino</option>
        </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <div class="form-group">
        {!! Form::label('email', 'Correo personal:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
        {!! Form::label('email_oficial', 'Correo oficial:') !!}
        {!! Form::text('email_oficial', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('curp', 'CURP:') !!}
        {!! Form::text('curp', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('nss', 'Numero de seguro social:') !!}
        {!! Form::text('nss', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <!-- Carrera Field -->
    <div class="form-group">
      {!! Form::label('idCarrera', 'Carrera:') !!}
      <select name="idCarrera" id="idCarrera" class="form-control">
        @isset($alumno)
          @if ($alumno->idCarrera != null)
            <option value="{{ $alumno->carrera->id }}">{{ $alumno->carrera->nombre }}</option>
          @endif
        @endisset
      </select>
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
        {!! Form::label('cuatrimestre', 'Cuatrimestre:') !!}
        {!! Form::text('cuatrimestre', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
        {!! Form::label('grupo', 'Grupo:') !!}
        {!! Form::text('grupo', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <h4>Persona de contacto</h4>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('contacto_nombres', 'Nombres:') !!}
        {!! Form::text('contacto_nombres', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('contacto_apellidos', 'Apellidos:') !!}
        {!! Form::text('contacto_apellidos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('contacto_telefono', 'Telefono:') !!}
        {!! Form::text('contacto_telefono', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
        {!! Form::label('contacto_parentesco', 'Parentesco:') !!}
        {!! Form::text('contacto_parentesco', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('alumnos.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
