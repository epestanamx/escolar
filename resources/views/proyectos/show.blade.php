@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proyecto
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('proyectos.show_fields')
                    <a href="{!! route('proyectos.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
