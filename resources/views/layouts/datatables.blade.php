@extends('layouts.app')

@section('title')
  @yield('title')
@endsection

@section('styles')
  <!-- DataTables -->
  <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Responsive datatable examples -->
  <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  @yield('styles')
@endsection

@section('content')
  @yield('content')
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //Buttons examples
            var table = $('#datatable').DataTable({
                lengthChange: true,
                buttons: ['copy', 'excel', 'pdf', 'print'],
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontro ningun registro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    buttons: {
                        copy: "Copiar",
                        copyTitle: "Copia realizada con exito",
                        copySuccess: "Se copio",
                        excel: "Excel",
                        pdf: "Pdf",
                        print: "Imprimir"
                    }
                }
            });

            table.buttons().container()
                    .appendTo("#datatable_wrapper .col-md-6:eq(0)");

                    $("#datatable_wrapper > div:nth-child(1) > div:nth-child(1) > div.dt-buttons.btn-group").prepend(@yield('boton'));
        } );

    </script>
@endsection
