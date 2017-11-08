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
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('alumnos.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
