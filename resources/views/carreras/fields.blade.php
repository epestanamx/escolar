<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordinador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordinador', 'Coordinador:') !!}
    {!! Form::text('coordinador', null, ['class' => 'form-control']) !!}
</div>

<!-- Activa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activa', 'Estado:') !!}
    <label class="checkbox-inline">
        <select name="activa" id="activa">
            <option value="1">Habilitada</option>
            <option value="0">Deshabilitada</option>
        </select>
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carreras.index') !!}" class="btn btn-default">Cancelar</a>
</div>
