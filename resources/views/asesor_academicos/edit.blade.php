@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asesor Academico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($asesorAcademico, ['route' => ['asesorAcademicos.update', $asesorAcademico->id], 'method' => 'patch']) !!}

                        @include('asesor_academicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection