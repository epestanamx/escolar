<div class="row">
  <div class="col-6">
    <!-- Nombre Field -->
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Giro Comercial Field -->
    <div class="form-group">
        {!! Form::label('giro_comercial', 'Giro Comercial:') !!}
        {!! Form::text('giro_comercial', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-3">
    <!-- Tipo Field -->
    <div class="form-group">
        {!! Form::label('tipo', 'Tipo:') !!}
        {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Dirección Field -->
    <div class="form-group">
        {!! Form::label('dirección', 'Dirección:') !!}
        {!! Form::text('dirección', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-3">
    <!-- Telefono Field -->
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <h4>Responsable de Recursos Humnanos</h4>
  </div>
  <div class="col-2">
    <!-- Titulo Field -->
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-6">
    <!-- Responsable Rh Field -->
    <div class="form-group">
        {!! Form::label('responsable_rh', 'Nombre completo:') !!}
        {!! Form::text('responsable_rh', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-4">
    <!-- Extension Field -->
    <div class="form-group">
        {!! Form::label('extension', 'Extension:') !!}
        {!! Form::text('extension', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('empresas.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
