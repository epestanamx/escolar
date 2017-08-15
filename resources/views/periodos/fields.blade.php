<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fin:') !!}
    {!! Form::text('fecha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Estado:') !!}
    <label class="checkbox-inline">
        <select name="activo" id="activo">
            <option value="1" selected>Activo</option>
            <option value="0">Desactivado</option>
        </select>
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('periodos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
