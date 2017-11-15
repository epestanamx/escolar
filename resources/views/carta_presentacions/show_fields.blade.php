<!-- Idalumno Field -->
<div class="form-group">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <p>{!! $cartaPresentacion->alumno->nombres . ' ' . $cartaPresentacion->alumno->apellidos !!}</p>
</div>

<!-- Idempresa Field -->
<div class="form-group">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <p>{!! $cartaPresentacion->empresa->nombre !!}</p>
</div>

<!-- Idperiodo Field -->
<div class="form-group">
    {!! Form::label('idPeriodo', 'Periodo escolar:') !!}
    <p>{!! $cartaPresentacion->periodo->fecha_inicio . ' - ' . $cartaPresentacion->periodo->fecha_fin !!}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{!! $cartaPresentacion->tipo !!}</p>
</div>

<!-- Horas Field -->
<div class="form-group">
    {!! Form::label('horas', 'Horas:') !!}
    <p>{!! $cartaPresentacion->horas !!}</p>
</div>
