@extends('layouts.app')

@section('title', 'Bienvenido')

@section('styles')

@endsection

@section('breadcrumbs')
    <ol class="breadcrumb hide-phone p-0 m-0">
        <li class="breadcrumb-item"><a href="#">Minton</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active">Starter</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
