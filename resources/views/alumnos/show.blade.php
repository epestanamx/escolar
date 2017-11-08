@extends('layouts.app')

@section('title', 'Alumnos')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>({{ $alumno->matricula }}) - {{ $alumno->nombres . ' ' . $alumno->apellidos}}</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h5 class="m-b-5">{{ $alumno->nombres }}</h5>
                                </div>

                                <div class="text-left m-t-40">
                                    <p class="text-muted font-13"><strong>Matricula:</strong> <span class="m-l-15">{{ $alumno->matricula }}</span></p>
                                    <p class="text-muted font-13"><strong>Nombres:</strong> <span class="m-l-15">{{ $alumno->nombres }}</span></p>
                                    <p class="text-muted font-13"><strong>Apellidos:</strong> <span class="m-l-15">{{ $alumno->apellidos }}</span></p>
                                    <p class="text-muted font-13"><strong>Carrera :</strong> <span class="m-l-15">{{ $alumno->carrera->nombre }}</span></p>
                                    <p class="text-muted font-13"><strong>Télefono:</strong><span class="m-l-15">{{ $alumno->telefono }}</span></p>
                                    <p class="text-muted font-13"><strong>Email:</strong> <span class="m-l-15">{{ $alumno->email }}</span></p>
                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->


                    <div class="col-lg-8 col-xl-9">
                        <div class="">
                            <div class="card-box">
                                <ul class="nav nav-tabs tabs-bordered">
                                    <li class="nav-item">
                                        <a href="#general" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Información general
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#proyectos" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Proyectos
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="general">
                                        @include('alumnos.show_fields')
                                    </div>
                                    <div class="tab-pane" id="proyectos">
                                      <input type="hidden" {{ $proyectos = $alumno->proyectos }}>

                                      @include('proyectos.table')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                {{-- <div class="row">
                    <div class="col-12">
                        <div class="p-20">

                          @include('alumnos.show_fields')

                          <a href="{!! route('alumnos.index') !!}" class="btn btn-default">Regresar</a>
                        </div>
                    </div>

                </div> --}}
                <!-- end row -->
            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
