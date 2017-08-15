<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Nss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nss', 'Nss:') !!}
    {!! Form::text('nss', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuatrimestre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuatrimestre', 'Cuatrimestre:') !!}
    {!! Form::text('cuatrimestre', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo', 'Grupo:') !!}
    {!! Form::text('grupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcarrera Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idCarrera', 'Idcarrera:') !!}--}}
    {{--{!! Form::number('idCarrera', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Carrera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCarrera', 'Carrera:') !!}
    <select name="idCarrera" id="idCarrera" class="form-control">
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alumnos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
