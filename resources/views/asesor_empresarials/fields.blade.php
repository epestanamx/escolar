<div class="row">
  <div class="col-2">
    <!-- Titulo Field -->
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-5">
    <!-- Nombres Field -->
    <div class="form-group">
        {!! Form::label('nombres', 'Nombres:') !!}
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-5">
    <!-- Apellidos Field -->
    <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos:') !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Telefono Field -->
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <!-- Empresa Field -->
    <div class="form-group">
        {!! Form::label('idEmpresa', 'Empresa:') !!}
        <select name="idEmpresa" id="idEmpresa" class="form-control">
          @isset($asesorEmpresarial)
            @if ($asesorEmpresarial->idEmpresa != null)
              <option value="{{ $asesorEmpresarial->empresa->id }}">{{ $asesorEmpresarial->empresa->nombre }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('asesores-empresariales.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
