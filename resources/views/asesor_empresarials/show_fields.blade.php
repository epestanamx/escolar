{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $asesorEmpresarial->id !!}</p>--}}
{{--</div>--}}

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $asesorEmpresarial->titulo !!}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{!! $asesorEmpresarial->nombres !!}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{!! $asesorEmpresarial->apellidos !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $asesorEmpresarial->email !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $asesorEmpresarial->telefono !!}</p>
</div>

<!-- Idempresa Field -->
<div class="form-group">
    {!! Form::label('idEmpresa', 'Empresa:') !!}
    <p>{!! $asesorEmpresarial->empresa->nombre !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $asesorEmpresarial->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $asesorEmpresarial->updated_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $asesorEmpresarial->deleted_at !!}</p>--}}
{{--</div>--}}

