<div class="row">
  <div class="col-6">
    <!-- Alumno Field -->
    <div class="form-group">
        {!! Form::label('idAlumno', 'Alumno:') !!}
        <select name="idAlumno" id="idAlumno" class="form-control">
          @isset($proyecto)
            @if ($proyecto->idAlumno != null)
              <option value="{{ $proyecto->alumno->id }}">{{ $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-6">
    <!-- Nombre Field -->
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <!-- Empresa Field -->
    <div class="form-group">
        {!! Form::label('idEmpresa', 'Empresa:') !!}
        <select name="idEmpresa" id="idEmpresa" class="form-control">
          @isset($proyecto)
            @if ($proyecto->idEmpresa != null)
              <option value="{{ $proyecto->empresa->id }}">{{ $proyecto->empresa->nombre }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-4">
    <!-- Empresa Field -->
    <div class="form-group">
        {!! Form::label('idAsesorEmpresarial', 'Asesor empresarial:') !!}
        <select name="idAsesorEmpresarial" id="idAsesorEmpresarial" class="form-control">
          @isset($proyecto)
            @if ($proyecto->idAsesorEmpresarial != null)
              <option value="{{ $proyecto->asesorEmpresarial->id }}">{{ $proyecto->asesorEmpresarial->titulo . ' ' . $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-4">
    <!-- Empresa Field -->
    <div class="form-group">
        {!! Form::label('idAsesorAcademico', 'Asesor academico:') !!}
        <select name="idAsesorAcademico" id="idAsesorAcademico" class="form-control">
          @isset($proyecto)
            @if ($proyecto->idAsesorAcademico != null)
              <option value="{{ $proyecto->asesorAcademico->id }}">{{ $proyecto->asesorAcademico->titulo . ' ' . $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Objetivos Field -->
    <div class="form-group">
        {!! Form::label('objetivos', 'Objetivos:') !!}
        {!! Form::textarea('objetivos', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Actividades Aprendizaje Field -->
    <div class="form-group">
        {!! Form::label('actividades_aprendizaje', 'Actividades de aprendizaje:') !!}
        {!! Form::textarea('actividades_aprendizaje', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Resultados Aprendizaje Field -->
    <div class="form-group">
        {!! Form::label('resultados_aprendizaje', 'Resultados de aprendizaje:') !!}
        {!! Form::textarea('resultados_aprendizaje', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Evidencias Field -->
    <div class="form-group">
        {!! Form::label('evidencias', 'Evidencias:') !!}
        {!! Form::textarea('evidencias', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Instrumentos Evaluacion Field -->
    <div class="form-group">
        {!! Form::label('instrumentos_evaluacion', 'Instrumentos de evaluacion:') !!}
        {!! Form::textarea('instrumentos_evaluacion', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Asignaturas Field -->
    <div class="form-group">
        {!! Form::label('asignaturas', 'Asignaturas:') !!}
        {!! Form::textarea('asignaturas', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <!-- Topicos Recomendados Field -->
    <div class="form-group">
        {!! Form::label('topicos_recomendados', 'Topicos recomendados:') !!}
        {!! Form::textarea('topicos_recomendados', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Estrategias Didacticas Field -->
    <div class="form-group">
        {!! Form::label('estrategias_didacticas', 'Estrategias didacticas:') !!}
        {!! Form::textarea('estrategias_didacticas', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a href="{!! route('proyectos.index') !!}" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
