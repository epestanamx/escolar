@extends('layouts.datatables')

@section('title')
  Estancias
@endsection

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card-box table-responsive">
              <h4 class="m-t-0 header-title"><b>Listado de estancias</b></h4>
              <p class="text-muted font-13 m-b-30">
              </p>

              @include('estancias.table')
          </div>
      </div>
  </div>
@endsection

@section('boton')
  '<a class="btn btn-labeled btn-primary" href="{{ route('estancias.create') }}"><i class="fa fa-plus"></i> Nuevo</a>'
@endsection
