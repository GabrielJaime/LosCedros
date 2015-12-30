@extends('layouts.app')

@section('page_title', 'Carga de Ubicaciones')
@section('page_description', 'Listado de Ubicaciones')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Ubicaciones</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ubicaciones.create') !!}">Crear Nuevo</a>
        </div>

        <div class="row">
            @if($ubicaciones->isEmpty())
                <div class="well text-center">No se encontraron Ubicaciones.</div>
            @else
                <div class="box box-success">
                    <div class="box-header ">
                         <h3 class="box-title">Registros de ubicaciones</h3>
                    </div>
                        @include('ubicaciones.table')
                </div>
            @endif
        </div>

        @include('common.paginate', ['records' => $ubicaciones])


    </div>
@endsection
@section('script')
    <!-- DataTables -->
    {!! Html::script('assets/DataTables/datatables.min.js') !!}
    <script>
        $(function () {
            var table = $('#Tableubicaciones').DataTable({
                "autoWidth": true,
                "scrollX" : true,
                "dom": 'frti<"bottom"plB><"clear">',
                "language": {
                    url: "assets/DataTables/Spanish.json",
                    buttons: {
                        copyTitle: "Copiado al Portapapeles",
                        copyKeys: "Gracias"
                    }
                },
                buttons: {
                    dom: {
                        container: {
                            tag: 'ul',
                            className: 'pull-right'
                        },
                        button: {
                            tag: 'a',
                            className: 'btn btn-primary'
                        }
                    },
                buttons:  [{
                    extend: 'colvis',
                    text: 'Ocultar Columnas'
                }, {
                    extend: 'copyHtml5',
                    text: 'Copiar'
                },{
                    extend: 'excelHtml5',
                    text: 'A Excel',
                    title: 'Tabla ubicaciones'
                }, {
                    extend: 'pdfHtml5',
                    text: 'A PDF',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    title: 'Tabla ubicaciones'
                }
                ]
            }

            });
        });

    </script>

    @endsection
