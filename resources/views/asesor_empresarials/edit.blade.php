@extends('layouts.app')

@section('title', 'Asesores empresariales')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Modificar asesor empresarial</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                          {!! Form::model($asesorEmpresarial, ['route' => ['asesorEmpresarials.update', $asesorEmpresarial->id], 'method' => 'patch']) !!}

                               @include('asesor_empresarials.fields')

                          {!! Form::close() !!}
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // inicializamos el plugin
            $('#idCarrera').select2({
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
@endsection
