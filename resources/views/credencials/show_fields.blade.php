<!-- Idalumno Field -->
<div class="form-group">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <p>{!! $credencial->alumno->nombres . ' ' . $credencial->alumno->apellidos !!}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{!! $credencial->tipo !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $credencial->estado !!}</p>
</div>
