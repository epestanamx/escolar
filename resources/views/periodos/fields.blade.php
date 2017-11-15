<div class="row">
  <div class="col-6">
    <!-- Fecha Inicio Field -->
    <div class="form-group">
        {!! Form::label('fecha_inicio', 'Inicio:') !!}
        {!! Form::text('fecha_inicio', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Fecha Fin Field -->
    <div class="form-group">
        {!! Form::label('fecha_fin', 'Fin:') !!}
        {!! Form::text('fecha_fin', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Activo Field -->
<div class="form-group row col-6">
    {!! Form::label('activo', 'Estado:') !!}
    <select name="activo" id="activo" class="form-control">
        <option value="1" selected>Activo</option>
        <option value="0">Desactivado</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('periodos.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
