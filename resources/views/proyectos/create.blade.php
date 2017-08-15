@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proyecto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'proyectos.store']) !!}

                        @include('proyectos.fields')

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
            $('#idAsesorEmpresarial').select2({
                // Activamos la opcion "Tags" del plugin
                tags: false,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("/selects/asesores-empresariales") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term,
                            empresa: $('#idEmpresa').val()
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
            $('#idAsesorAcademico').select2({
                // Activamos la opcion "Tags" del plugin
                tags: false,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("/selects/asesores-academicos") }}',
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
