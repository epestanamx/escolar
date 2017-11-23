@extends('layouts.app')

@section('title', 'Asesores academicos')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Modificar asesor academico</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                          {!! Form::model($asesorAcademico, ['route' => ['asesores-academicos.update', $asesorAcademico->id], 'method' => 'patch']) !!}

                               @include('asesor_academicos.fields')

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
@endsection
