{{--<!-- Idalumno Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idAlumno', 'Idalumno:') !!}--}}
    {{--{!! Form::number('idAlumno', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAlumno', 'Alumno:') !!}
    <select name="idAlumno" id="idAlumno" class="form-control">
    </select>
</div>

{{--<!-- Idproyecto Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idProyecto', 'Idproyecto:') !!}--}}
    {{--{!! Form::number('idProyecto', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <select name="idProyecto" id="idProyecto" class="form-control">
    </select>
</div>

{{--<!-- Liberada Field -->--}}
<div class="form-group col-sm-6">
    {!! Form::label('liberada', 'Estado:') !!}
    <label class="checkbox-inline">
        <select name="liberada" id="liberada">
            <option value="0">En proceso</option>
            <option value="1">Liberada</option>
        </select>
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estadias.index') !!}" class="btn btn-default">Cancel</a>
</div>
