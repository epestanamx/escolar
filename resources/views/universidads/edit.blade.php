@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Universidad
        </h1>
   </section>
   <div class="content">
       @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($universidad, ['route' => ['universidad.update', $universidad->id], 'method' => 'patch']) !!}

                        @include('universidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection