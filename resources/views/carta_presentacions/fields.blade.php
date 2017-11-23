<div class="row">
  <div class="col-6">
    <!-- Idalumno Field -->
    <div class="form-group">
        {!! Form::label('idAlumno', 'Alumno:') !!}
        <select name="idAlumno" id="idAlumno" class="form-control">
          @isset($cartaPresentacion)
            @if ($cartaPresentacion->idAlumno != null)
              <option value="{{ $cartaPresentacion->alumno->id }}">{{ $cartaPresentacion->alumno->nombres . ' ' . $cartaPresentacion->alumno->apellidos }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-6">
    <!-- Idempresa Field -->
    <div class="form-group">
        {!! Form::label('idEmpresa', 'Empresa:') !!}
        <select name="idEmpresa" id="idEmpresa" class="form-control">
          @isset($cartaPresentacion)
            @if ($cartaPresentacion->idEmpresa != null)
              <option value="{{ $cartaPresentacion->empresa->id }}">{{ $cartaPresentacion->empresa->nombre }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <!-- Idperiodo Field -->
    <div class="form-group">
        {!! Form::label('idPeriodo', 'Periodo escolar:') !!}
        <select name="idPeriodo" id="idPeriodo" class="form-control">
          @isset($cartaPresentacion)
            @if ($cartaPresentacion->idPeriodo != null)
              <option value="{{ $cartaPresentacion->periodo->id }}">{{ $cartaPresentacion->periodo->fecha_inicio . ' - ' . $cartaPresentacion->periodo->fecha_fin }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-4">
    <!-- Tipo Field -->
    <div class="form-group">
        {!! Form::label('tipo', 'Tipo:') !!}
        <select name="tipo" id="tipo" class="form-control">
          <option value="Estancia">Estancia</option>
          <option value="Estadia"
          @isset($cartaPresentacion)
            @if ($cartaPresentacion->tipo == 'Estadia')
              selected
            @endif
          @endisset>Estadia</option>
        </select>
    </div>
  </div>
  <div class="col-4">
    <!-- Horas Field -->
    <div class="form-group">
        {!! Form::label('horas', 'Horas:') !!}
        {!! Form::number('horas', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('cartas-presentacion.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
