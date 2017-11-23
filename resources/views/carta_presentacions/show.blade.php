@extends('layouts.app')

@section('title', 'Cartas de presentación')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Detalle de la carta de presentación</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                      @include('carta_presentacions.show_fields')
                      <a href="{!! route('cartas-presentacion.index') !!}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Regresar</a>
                    </div>

                </div>
                <!-- end row -->
            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
