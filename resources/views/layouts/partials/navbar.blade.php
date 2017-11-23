<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <a href="{{ url('/home')}}" class="logo">
                    <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                    <span class="logo-large"><i class="mdi mdi-radar"></i> {{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout"></i> <span>Cerrar sesión</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->



            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{ url('/home') }}"><i class="ti-home"></i>Inicio</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-light-bulb"></i>Credenciales</a>
                        <ul class="submenu">
                          @ability('admin', 'ver_alumnos')
                          <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
                          @endability
                          @ability('admin', 'ver_credenciales')
                          <li><a href="{{ route('credenciales.index') }}">Credenciales</a></li>
                          @endability
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-light-bulb"></i>Servicios escolares</a>
                        <ul class="submenu">
                          @ability('admin', 'ver_alumnos')
                          <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
                          @endability
                          @ability('admin', 'ver_carreras')
                          <li class="has-submenu">
                              <a href="#">Carreras</a>
                              <ul class="submenu">
                                  <li><a href="{{ route('carreras.index') }}">Carreras</a></li>
                                  @ability('admin', 'ver_asesores_academicos')
                                  <li><a href="{{ route('asesores-academicos.index') }}">Asesores academicos</a></li>
                                  @endability
                              </ul>
                          </li>
                          @endability
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-light-bulb"></i>Vinculación</a>
                        <ul class="submenu">
                          @ability('admin', 'ver_alumnos')
                          <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
                          @endability
                          @ability('admin', 'ver_proyectos')
                          <li class="has-submenu">
                              <a href="#">Proyectos</a>
                              <ul class="submenu">
                                  <li><a href="{{ route('proyectos.index') }}">Proyectos</a></li>
                                  @ability('admin', 'ver_etapas_de_proyectos')
                                  <li><a href="{{ route('etapas.index') }}">Etapas</a></li>
                                  @endability
                              </ul>
                          </li>
                          @endability
                          @ability('admin', 'ver_empresas')
                          <li class="has-submenu">
                              <a href="#">Empresas</a>
                              <ul class="submenu">
                                  <li><a href="{{ route('empresas.index') }}">Empresas</a></li>
                                  @ability('admin', 'ver_asesores_empresariales')
                                  <li><a href="{{ route('etapas.index') }}">Asesores empresariales</a></li>
                                  @endability
                              </ul>
                          </li>
                          @endability
                          @ability('admin', 'ver_cartas_de_presentacion')
                          <li><a href="{{ route('cartas-presentacion.index') }}">Cartas de presentación</a></li>
                          @endability
                          @ability('admin', 'ver_estancias')
                          <li><a href="{{ route('estancias.index') }}">Estancias</a></li>
                          @endability
                          @ability('admin', 'ver_estadias')
                          <li><a href="{{ route('estadias.index') }}">Estadias</a></li>
                          @endability
                        </ul>
                    </li>

                    @ability('admin', 'modificar-configuracion')
                    <li class="has-submenu">
                        <a href="#"><i class="ti-settings"></i>Configuración</a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Usuarios y permisos</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('entrust-gui::permissions.index') }}">Permisos</a></li>
                                    <li><a href="{{ route('entrust-gui::roles.index') }}">Perfiles</a></li>
                                    <li><a href="{{ route('entrust-gui::users.index') }}">Usuarios</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('universidad.edit', ['id' => 1]) }}">Datos de la universidad</a></li>
                        </ul>
                    </li>
                    @endability
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
