<!-- Idalumno Field -->
<div class="form-group">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <p>{!! $estadias->alumno->nombres . ' ' . $estadias->alumno->apellidos!!}</p>
</div>

<!-- Idempresa Field -->
<div class="form-group">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <p>{!! $estadias->proyecto->empresa->nombre !!}</p>
</div>

<!-- Idasesorempresarial Field -->
<div class="form-group">
    {!! Form::label('idAsesorEmpresarial', 'Asesor empresarial:') !!}
    <p>{!! $estadias->proyecto->asesorEmpresarial->titulo . ' '. $estadias->proyecto->asesorEmpresarial->nombres . ' ' . $estadias->proyecto->asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Idasesoracademico Field -->
<div class="form-group">
    {!! Form::label('idAsesorAcademico', 'Asesor academico:') !!}
    <p>{!! $estadias->proyecto->asesorAcademico->titulo . ' ' . $estadias->proyecto->asesorAcademico->nombres . ' ' . $estadias->proyecto->asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Idproyecto Field -->
<div class="form-group">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <p>{!! $estadias->proyecto->nombre !!}</p>
</div>

<!-- Liberada Field -->
<div class="form-group">
    {!! Form::label('liberada', 'Estado:') !!}
    <p>{!! $estadias->liberada == 1 ? 'Liberada' : 'En proceso'!!}</p>
</div>