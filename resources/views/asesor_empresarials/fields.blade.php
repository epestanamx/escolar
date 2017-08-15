<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
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

{{--<!-- Idempresa Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('idEmpresa', 'Idempresa:') !!}--}}
    {{--{!! Form::number('idEmpresa', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <select name="idEmpresa" id="idEmpresa" class="form-control">
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('asesorEmpresarials.index') !!}" class="btn btn-default">Cancelar</a>
</div>