{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $carrera->id !!}</p>--}}
{{--</div>--}}

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $carrera->nombre !!}</p>
</div>

<!-- Coordinador Field -->
<div class="form-group">
    {!! Form::label('coordinador', 'Coordinador:') !!}
    <p>{!! $carrera->coordinador !!}</p>
</div>

<!-- Activa Field -->
<div class="form-group">
    {!! Form::label('activa', 'Estado:') !!}
    <p>{!! $carrera->activa == 1 ? 'Habilitada' : 'Deshabilitada'!!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $carrera->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $carrera->updated_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $carrera->deleted_at !!}</p>--}}
{{--</div>--}}

