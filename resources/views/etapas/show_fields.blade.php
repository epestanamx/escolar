{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $etapa->id !!}</p>--}}
{{--</div>--}}

<!-- Idproyecto Field -->
<div class="form-group">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <p>{!! $etapa->proyecto->nombre !!}</p>
</div>

<!-- Semana Field -->
<div class="form-group">
    {!! Form::label('semana', 'Semana:') !!}
    <p>{!! $etapa->semana !!}</p>
</div>

<!-- Competencias Field -->
<div class="form-group">
    {!! Form::label('competencias', 'Competencias:') !!}
    <p>{!! $etapa->competencias !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $etapa->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $etapa->updated_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $etapa->deleted_at !!}</p>--}}
{{--</div>--}}

