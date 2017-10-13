<!-- Idalumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAlumno', 'Idalumno:') !!}
    {!! Form::text('idAlumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Idempresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEmpresa', 'Idempresa:') !!}
    {!! Form::text('idEmpresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Idperiodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPeriodo', 'Idperiodo:') !!}
    {!! Form::text('idPeriodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Horas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horas', 'Horas:') !!}
    {!! Form::text('horas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cartaPresentacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
