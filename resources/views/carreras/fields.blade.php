<!-- Nombre Field -->
<div class="form-group row col-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordinador Field -->
<div class="form-group row col-6">
    {!! Form::label('coordinador', 'Coordinador:') !!}
    {!! Form::text('coordinador', null, ['class' => 'form-control']) !!}
</div>

<!-- Activa Field -->
<div class="form-group row col-6">
    {!! Form::label('activa', 'Estado:') !!}
    <label class="control-label"></label>
    <select name="activa" id="activa" class="form-control">
        <option value="1" selected>Habilitada</option>
        <option value="0">Deshabilitada</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('carreras.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
