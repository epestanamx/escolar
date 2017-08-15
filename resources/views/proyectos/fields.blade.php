<!-- Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <select name="idAlumno" id="idAlumno" class="form-control">
    </select>
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Objetivos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('objetivos', 'Objetivos:') !!}
    {!! Form::textarea('objetivos', null, ['class' => 'form-control']) !!}
</div>

<!-- Actividades Aprendizaje Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('actividades_aprendizaje', 'Actividades de aprendizaje:') !!}
    {!! Form::textarea('actividades_aprendizaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Resultados Aprendizaje Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('resultados_aprendizaje', 'Resultados de aprendizaje:') !!}
    {!! Form::textarea('resultados_aprendizaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Evidencias Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evidencias', 'Evidencias:') !!}
    {!! Form::textarea('evidencias', null, ['class' => 'form-control']) !!}
</div>

<!-- Instrumentos Evaluacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('instrumentos_evaluacion', 'Instrumentos de evaluacion:') !!}
    {!! Form::textarea('instrumentos_evaluacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Asignaturas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('asignaturas', 'Asignaturas:') !!}
    {!! Form::textarea('asignaturas', null, ['class' => 'form-control']) !!}
</div>

<!-- Topicos Recomendados Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('topicos_recomendados', 'Topicos recomendados:') !!}
    {!! Form::textarea('topicos_recomendados', null, ['class' => 'form-control']) !!}
</div>

<!-- Estrategias Didacticas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('estrategias_didacticas', 'Estrategias didacticas:') !!}
    {!! Form::textarea('estrategias_didacticas', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Idalumno Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idAlumno', 'Idalumno:') !!}--}}
    {{--{!! Form::number('idAlumno', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Idempresa Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idEmpresa', 'Idempresa:') !!}--}}
    {{--{!! Form::number('idEmpresa', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Idasesorempresarial Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idAsesorEmpresarial', 'Idasesorempresarial:') !!}--}}
    {{--{!! Form::number('idAsesorEmpresarial', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Idasesoracademico Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idAsesorAcademico', 'Idasesoracademico:') !!}--}}
    {{--{!! Form::number('idAsesorAcademico', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
        <select name="idEmpresa" id="idEmpresa" class="form-control">
    </select>
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAsesorEmpresarial', 'Asesor empresarial:') !!}
    <select name="idAsesorEmpresarial" id="idAsesorEmpresarial" class="form-control">
    </select>
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAsesorAcademico', 'Asesor academico:') !!}
    <select name="idAsesorAcademico" id="idAsesorAcademico" class="form-control">
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('proyectos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
