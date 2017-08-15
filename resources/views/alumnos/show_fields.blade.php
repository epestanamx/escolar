{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $alumno->id !!}</p>--}}
{{--</div>--}}

<!-- Matricula Field -->
<div class="form-group">
    {!! Form::label('matricula', 'Matricula:') !!}
    <p>{!! $alumno->matricula !!}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{!! $alumno->nombres !!}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{!! $alumno->apellidos !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $alumno->email !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $alumno->telefono !!}</p>
</div>

<!-- Nss Field -->
<div class="form-group">
    {!! Form::label('nss', 'Número de seguro social:') !!}
    <p>{!! $alumno->nss !!}</p>
</div>

<!-- Cuatrimestre Field -->
<div class="form-group">
    {!! Form::label('cuatrimestre', 'Cuatrimestre:') !!}
    <p>{!! $alumno->cuatrimestre !!}</p>
</div>

<!-- Grupo Field -->
<div class="form-group">
    {!! Form::label('grupo', 'Grupo:') !!}
    <p>{!! $alumno->grupo !!}</p>
</div>

<!-- Idcarrera Field -->
<div class="form-group">
    {!! Form::label('idCarrera', 'Carrera:') !!}
    <p>{!! $alumno->carrera->nombre !!}</p>
</div>


<input type="hidden" {{ $proyectos = $alumno->proyectos }}>
<h4>Proyectos</h4>

@include('proyectos.table')