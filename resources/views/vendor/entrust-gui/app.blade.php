@extends('layouts.app')

@section('title')
  @yield('heading')
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css">
    <style>
      form {
        margin-bottom: 0;
      }
      .models--actions {
        margin-bottom: 15px;
      }
    </style>
    @yield('styles2')
@endsection

@section('scripts')
    @yield('scripts2')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>
    <script>
    (function() {
      $('select').select2();
    })();
    </script>
@endsection
