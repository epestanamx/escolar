@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asesor Empresarial
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('asesor_empresarials.show_fields')
                    <a href="{!! route('asesorEmpresarials.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
