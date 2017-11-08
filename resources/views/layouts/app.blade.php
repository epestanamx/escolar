<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')

        <script src="{{ asset('js/modernizr.min.js') }}"></script>

    </head>

    <body>

        @auth ()
            @include('layouts.partials.navbar')
        @endauth


        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                @yield('breadcrumbs')
                            </div>
                            <h4 class="page-title">@yield('title')</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                        @include('flash::message')
                        @include('adminlte-templates::common.errors')

                @yield('content')
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        @include('layouts.partials.footer')


        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>
        <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        </script>
        @yield('scripts')

    </body>
</html>
