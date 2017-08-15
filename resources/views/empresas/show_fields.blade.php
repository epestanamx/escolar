<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $empresa->nombre !!}</p>
</div>

<!-- Giro Comercial Field -->
<div class="form-group">
    {!! Form::label('giro_comercial', 'Giro Comercial:') !!}
    <p>{!! $empresa->giro_comercial !!}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{!! $empresa->tipo !!}</p>
</div>

<!-- Dirección Field -->
<div class="form-group">
    {!! Form::label('dirección', 'Dirección:') !!}
    <p>{!! $empresa->dirección !!}</p>
</div>

<!-- Responsable Rh Field -->
<div class="form-group">
    {!! Form::label('responsable_rh', 'Responsable de RH:') !!}
    <p>{!! $empresa-> titulo . ' ' . $empresa->responsable_rh !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $empresa->telefono !!}</p>
</div>

<!-- Extension Field -->
<div class="form-group">
    {!! Form::label('extension', 'Extension:') !!}
    <p>{!! $empresa->extension !!}</p>
</div>


<input type="hidden" {{ $asesorEmpresarials = $empresa->asesores }}>

<h4>Asesores empresariales</h4>

@include('asesor_empresarials.table')