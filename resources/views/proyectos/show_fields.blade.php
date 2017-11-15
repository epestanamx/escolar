{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $proyecto->id !!}</p>--}}
{{--</div>--}}

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $proyecto->nombre !!}</p>
</div>

<!-- Objetivos Field -->
<div class="form-group">
    {!! Form::label('objetivos', 'Objetivos:') !!}
    <p>{!! $proyecto->objetivos !!}</p>
</div>

<!-- Actividades Aprendizaje Field -->
<div class="form-group">
    {!! Form::label('actividades_aprendizaje', 'Actividades de aprendizaje:') !!}
    <p>{!! $proyecto->actividades_aprendizaje !!}</p>
</div>

<!-- Resultados Aprendizaje Field -->
<div class="form-group">
    {!! Form::label('resultados_aprendizaje', 'Resultados de aprendizaje:') !!}
    <p>{!! $proyecto->resultados_aprendizaje !!}</p>
</div>

<!-- Evidencias Field -->
<div class="form-group">
    {!! Form::label('evidencias', 'Evidencias:') !!}
    <p>{!! $proyecto->evidencias !!}</p>
</div>

<!-- Instrumentos Evaluacion Field -->
<div class="form-group">
    {!! Form::label('instrumentos_evaluacion', 'Instrumentos de evaluacion:') !!}
    <p>{!! $proyecto->instrumentos_evaluacion !!}</p>
</div>

<!-- Asignaturas Field -->
<div class="form-group">
    {!! Form::label('asignaturas', 'Asignaturas:') !!}
    <p>{!! $proyecto->asignaturas !!}</p>
</div>

<!-- Topicos Recomendados Field -->
<div class="form-group">
    {!! Form::label('topicos_recomendados', 'Topicos recomendados:') !!}
    <p>{!! $proyecto->topicos_recomendados !!}</p>
</div>

<!-- Estrategias Didacticas Field -->
<div class="form-group">
    {!! Form::label('estrategias_didacticas', 'Estrategias didacticas:') !!}
    <p>{!! $proyecto->estrategias_didacticas !!}</p>
</div>

<!-- Idalumno Field -->
<div class="form-group">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <p>{!! $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos !!}</p>
</div>

<!-- Idempresa Field -->
<div class="form-group">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <p>{!! $proyecto->empresa->nombre !!}</p>
</div>

<!-- Idasesorempresarial Field -->
<div class="form-group">
    {!! Form::label('idAsesorEmpresarial', 'Asesor empresarial:') !!}
    <p>{!! $proyecto->asesorEmpresarial->titulo . ' ' . $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Idasesoracademico Field -->
<div class="form-group">
    {!! Form::label('idAsesorAcademico', 'Asesor academico:') !!}
    <p>{!! $proyecto->asesorAcademico->titulo . ' ' . $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $proyecto->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $proyecto->updated_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $proyecto->deleted_at !!}</p>--}}
{{--</div>--}}

<h4>Etapas del proyecto</h4>
<input type="hidden" {{ $etapas = $proyecto->etapas }}>
@include('etapas.table')
