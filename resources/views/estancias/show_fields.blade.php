<!-- Idalumno Field -->
<div class="form-group">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <p>{!! $estancia->alumno->nombres . ' ' . $estancia->alumno->apellidos!!}</p>
</div>

<!-- Idempresa Field -->
<div class="form-group">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <p>{!! $estancia->proyecto->empresa->nombre !!}</p>
</div>

<!-- Idasesorempresarial Field -->
<div class="form-group">
    {!! Form::label('idAsesorEmpresarial', 'Asesor empresarial:') !!}
    <p>{!! $estancia->proyecto->asesorEmpresarial->titulo . ' '. $estancia->proyecto->asesorEmpresarial->nombres . ' ' . $estancia->proyecto->asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Idasesoracademico Field -->
<div class="form-group">
    {!! Form::label('idAsesorAcademico', 'Asesor academico:') !!}
    <p>{!! $estancia->proyecto->asesorAcademico->titulo . ' ' . $estancia->proyecto->asesorAcademico->nombres . ' ' . $estancia->proyecto->asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Idproyecto Field -->
<div class="form-group">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <p>{!! $estancia->proyecto->nombre !!}</p>
</div>

<!-- Liberada Field -->
<div class="form-group">
    {!! Form::label('liberada', 'Estado:') !!}
    <p>{!! $estancia->liberada == 1 ? 'Liberada' : 'En proceso'!!}</p>
</div>