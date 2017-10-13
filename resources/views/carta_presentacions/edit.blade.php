@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Carta Presentacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cartaPresentacion, ['route' => ['cartaPresentacions.update', $cartaPresentacion->id], 'method' => 'patch']) !!}

                        @include('carta_presentacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection