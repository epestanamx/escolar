<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Giro Comercial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro_comercial', 'Giro Comercial:') !!}
    {!! Form::text('giro_comercial', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Dirección Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dirección', 'Dirección:') !!}
    {!! Form::text('dirección', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Responsable de RH titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Rh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable_rh', 'Responsable de RH nombre completo:') !!}
    {!! Form::text('responsable_rh', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('extension', 'Extension:') !!}
    {!! Form::text('extension', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empresas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
