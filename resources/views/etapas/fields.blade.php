<!-- Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <select name="idProyecto" id="idProyecto" class="form-control">
    </select>
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Semana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semana', 'Semana:') !!}
    {!! Form::text('semana', null, ['class' => 'form-control']) !!}
</div>

<!-- Semana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horas', 'Horas:') !!}
    {!! Form::number('horas', null, ['class' => 'form-control']) !!}
</div>

<!-- Competencias Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('competencias', 'Competencias:') !!}
    {!! Form::textarea('competencias', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('etapas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
