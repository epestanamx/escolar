{{--<!-- Idalumno Field -->--}}
{{--<div class="form-group row col-6">--}}
    {{--{!! Form::label('idAlumno', 'Idalumno:') !!}--}}
    {{--{!! Form::number('idAlumno', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Alumno Field -->
<div class="form-group row col-6">
    {!! Form::label('idAlumno', 'Alumno:') !!}

    <select name="idAlumno" id="idAlumno" class="form-control">
      @isset($estadias)
        @if ($estadias->idAlumno != null)
          <option value="{{ $estadias->alumno->id }}">{{ $estadias->alumno->nombres . ' ' . $estadias->alumno->apellidos}}</option>
        @endif
      @endisset
    </select>
</div>

{{--<!-- Idproyecto Field -->--}}
{{--<div class="form-group row col-6">--}}
    {{--{!! Form::label('idProyecto', 'Idproyecto:') !!}--}}
    {{--{!! Form::number('idProyecto', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Proyecto Field -->
<div class="form-group row col-6">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <select name="idProyecto" id="idProyecto" class="form-control">
      @isset($estadias)
        @if ($estadias->idProyecto != null)
          <option value="{{ $estadias->proyecto->id }}">{{ $estadias->proyecto->nombre }}</option>
        @endif
      @endisset
    </select>
</div>

{{--<!-- Liberada Field -->--}}
<div class="form-group row col-6">
    {!! Form::label('liberada', 'Estado:') !!}
    <label class="checkbox"></label>
        <select name="liberada" id="liberada" class="form-control">
            <option value="0" selected>En proceso</option>
            <option value="1">Liberada</option>
        </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('estadias.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
