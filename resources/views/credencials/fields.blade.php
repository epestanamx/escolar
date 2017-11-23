<div class="row">
  <div class="col-6">
    <!-- Idalumno Field -->
    <div class="form-group">
        {!! Form::label('idAlumno', 'Alumno:') !!}
        <select name="idAlumno" id="idAlumno" class="form-control">
          @isset($credencial)
            @if ($credencial->idAlumno != null)
              <option value="{{ $credencial->alumno->id }}">{{ $credencial->alumno->nombres . ' ' . $credencial->alumno->apellidos }}</option>
            @endif
          @endisset
        </select>
    </div>
  </div>
  <div class="col-6">
    <!-- Estado Field -->
    <div class="form-group">
        {!! Form::label('estado', 'Estado:') !!}
        <select name="estado" id="estado" class="form-control">
          <option value="Pendiente">Pendiente</option>
          <option value="Entregada"
          @isset($credencial)
            @if ($credencial->estado == 'Entregada')
              selected
            @endif
          @endisset>Entregada</option>
        </select>
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
    <a class="btn btn-danger" href="{{ route('credenciales.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
</div>
