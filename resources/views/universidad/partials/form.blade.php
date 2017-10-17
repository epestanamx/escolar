<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{ (Session::has('errors')) ? old('nombre', '') : $universidad->nombre }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="name">Dirección</label>
            <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion" value="{{ (Session::has('errors')) ? old('direccion', '') : $universidad->direccion }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="name">Télefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="Télefono" name="telefono" value="{{ (Session::has('errors')) ? old('telefono', '') : $universidad->telefono }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" value="{{ (Session::has('errors')) ? old('email', '') : $universidad->email }}">
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<h4 class="m-t-0 header-title"><b>Datos del rector</b></h4>

<div class="row">
    <div class="col-2">
        <div class="form-group">
            <label for="rector_titulo">Titulo</label>
            <input type="text" class="form-control" id="rector_titulo" placeholder="Télefono" name="rector_titulo" value="{{ (Session::has('errors')) ? old('rector_titulo', '') : $universidad->rector_titulo }}">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="rector_nombres">Nombres</label>
            <input type="text" class="form-control" id="rector_nombres" placeholder="Télefono" name="rector_nombres" value="{{ (Session::has('errors')) ? old('rector_nombres', '') : $universidad->rector_nombres }}">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="rector_apellidos">Apellidos</label>
            <input type="text" class="form-control" id="rector_apellidos" placeholder="Télefono" name="rector_apellidos" value="{{ (Session::has('errors')) ? old('rector_apellidos', '') : $universidad->rector_apellidos }}">
        </div>
    </div>
</div>
