<!-- Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $periodo->id !!}</p>--}}
{{--</div>--}}

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Inicio:') !!}
    <p>{!! $periodo->fecha_inicio !!}</p>
</div>

<!-- Fecha Fin Field -->
<div class="form-group">
    {!! Form::label('fecha_fin', 'Fin:') !!}
    <p>{!! $periodo->fecha_fin !!}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', 'Estado:') !!}
    <p>{!! $periodo->activo == 1 ? 'Activo' : 'Desactivado' !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Registrado:') !!}--}}
    {{--<p>{!! $periodo->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Ultima modificación:') !!}--}}
    {{--<p>{!! $periodo->updated_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $periodo->deleted_at !!}</p>--}}
{{--</div>--}}

