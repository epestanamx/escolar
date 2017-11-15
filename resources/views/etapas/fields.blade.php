<!-- Proyecto Field -->
<div class="form-group row col-12">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    <select name="idProyecto" id="idProyecto" class="form-control">
      @isset($etapa)
        @if ($etapa->idProyecto != null)
          <option value="{{ $etapa->proyecto->id }}">{{ $etapa->proyecto->nombre }}</option>
        @endif
      @endisset
    </select>
</div>

<!-- Descripcion Field -->
<div class="form-group row col-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
  <div class="col-6">
    <!-- Semana Field -->
    <div class="form-group">
        {!! Form::label('semana', 'Semana:') !!}
        {!! Form::text('semana', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Semana Field -->
    <div class="form-group">
        {!! Form::label('horas', 'Horas:') !!}
        {!! Form::number('horas', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Competencias Field -->
<div class="form-group col-12">
    {!! Form::label('competencias', 'Competencias:') !!}
    {!! Form::textarea('competencias', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('etapas.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
