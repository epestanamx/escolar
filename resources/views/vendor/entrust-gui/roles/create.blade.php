@extends(Config::get('entrust-gui.layout'))

@section('heading', 'Perfiles de usuario')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Crear nuevo perfil</b></h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-horizontal" action="{{ route('entrust-gui::roles.store') }}" method="post" role="form">
                                @include('entrust-gui::roles.partials.form')
                                <button type="submit" id="create" class="btn btn-labeled btn-primary"><i class="fa fa-plus"></i> Guardar</button>
                                <a class="btn btn-danger" href="{{ route('entrust-gui::roles.index') }}"><i class="fa fa-chevron-left"></i> Cancelar</a>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
