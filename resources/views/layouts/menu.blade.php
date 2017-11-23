<li class="treeview
    {{ Request::is('alumnos*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-edit"></i>
        <span>Alumnos</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('alumnos.index') }}"><i class="fa fa-circle-o"></i> Listado de alumnos</a></li>
        <li><a href="{{ route('alumnos.presentacion') }}"><i class="fa fa-circle-o"></i> Generar carta de presentación</a></li>
    </ul>
</li>

<li class="treeview
    {{ Request::is('proyectos*') ? 'active' : '' }}
    {{ Request::is('etapas*') ? 'active' : '' }}
    {{ Request::is('estancias*') ? 'active' : '' }}
    {{ Request::is('estadias*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-edit"></i>
        <span>Proyectos</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('proyectos.index') }}"><i class="fa fa-circle-o"></i> Listado de proyectos</a></li>
        <li><a href="{{ route('etapas.index') }}"><i class="fa fa-circle-o"></i> Etapas de los proyectos</a></li>
        <li><a href="{{ route('estancias.index') }}"><i class="fa fa-circle-o"></i> Estancias</a></li>
        <li><a href="{{ route('estadias.index') }}"><i class="fa fa-circle-o"></i> Estadias</a></li>
    </ul>
</li>

<li class="treeview {{ Request::is('universidad*') ? 'active' : '' }} {{ Request::is('periodos*') ? 'active' : '' }} {{ Request::is('carreras*') ? 'active' : '' }} {{ Request::is('asesorAcademicos*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-edit"></i>
        <span>Universidad</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('universidad.edit', ['id' => 1]) }}"><i class="fa fa-circle-o"></i> Datos de la universidad</a></li>
        <li><a href="{{ route('carreras.index') }}"><i class="fa fa-circle-o"></i> Carreras</a></li>
        <li><a href="{{ route('periodos.index') }}"><i class="fa fa-circle-o"></i> Periodos escolares</a></li>
        <li><a href="{{ route('asesorAcademicos.index') }}"><i class="fa fa-circle-o"></i> Asesores academicos</a></li>
    </ul>
</li>

<li class="treeview {{ Request::is('empresas*') ? 'active' : '' }} {{ Request::is('asesorEmpresarials*') ? 'active' : '' }} {{ Request::is('asesorAcademicos*') ? 'active' : '' }} {{ Request::is('alumnos*') ? 'active' : '' }} {{ Request::is('carreras*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-edit"></i>
        <span>Empresa</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('empresas.index') }}"><i class="fa fa-circle-o"></i> Listado de empresas</a></li>
        <li><a href="{{ route('asesorEmpresarials.index') }}"><i class="fa fa-circle-o"></i> Asesores empresariales</a></li>
    </ul>
</li><li class="{{ Request::is('cartaPresentacions*') ? 'active' : '' }}">
    <a href="{!! route('cartaPresentacions.index') !!}"><i class="fa fa-edit"></i><span>CartaPresentacions</span></a>
</li>

<li class="{{ Request::is('credencials*') ? 'active' : '' }}">
    <a href="{!! route('credencials.index') !!}"><i class="fa fa-edit"></i><span>Credencials</span></a>
</li>

