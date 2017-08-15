@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alumno
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'formatos.presentacion']) !!}

                        <!-- Alumno Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('idAlumno', 'Alumno:') !!}
                            <select name="idAlumno" id="idAlumno" class="form-control">
                            </select>
                        </div>

                        <!-- Empresa Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('idEmpresa', 'Empresa:') !!}
                            <select name="idEmpresa" id="idEmpresa" class="form-control">
                            </select>
                        </div>

                        <!-- Tipo Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('tipo', 'Tipo:') !!}
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="Estancias">Estancia</option>
                                <option value="Estadia">Estadia</option>
                            </select>
                        </div>

                        <!-- Tipo Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('idPeriodo', 'Periodo escolar:') !!}
                            <select name="idPeriodo" id="idPeriodo" class="form-control">
                            </select>
                        </div>

                        <!-- Horas Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('horas', 'Total de horas:') !!}
                            {!! Form::number('horas', 120, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Generar', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('alumnos.index') !!}" class="btn btn-default">Cancelar</a>
                        </div>


                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // inicializamos el plugin
            $('#idEmpresa').select2({
                // Activamos la opcion "Tags" del plugin
                tags: false,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("/selects/empresas") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            // inicializamos el plugin
            $('#idAlumno').select2({
                // Activamos la opcion "Tags" del plugin
                tags: false,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("/selects/alumnos") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            // inicializamos el plugin
            $('#idPeriodo').select2({
                // Activamos la opcion "Tags" del plugin
                tags: false,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("/selects/periodos") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                }
            });
        });
    </script>
@endsection
