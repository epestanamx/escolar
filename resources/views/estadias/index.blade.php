@extends('layouts.datatables')

@section('title')
  Estadias
@endsection

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card-box table-responsive">
              <h4 class="m-t-0 header-title"><b>Listado de estadias</b></h4>
              <p class="text-muted font-13 m-b-30">
              </p>

              @include('estadias.table')
          </div>
      </div>
  </div>
@endsection

@section('boton')
  '<a class="btn btn-labeled btn-primary" href="{{ route('estadias.create') }}"><i class="fa fa-plus"></i> Nuevo</a>'
@endsection
