@extends('layouts.app')

@section('title', 'Asesores empresariales')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Detalle del asesor empresarial</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                      @include('asesor_empresarials.show_fields')
                      <a href="{!! route('asesorEmpresarials.index') !!}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Regresar</a>
                    </div>

                </div>
                <!-- end row -->
            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
