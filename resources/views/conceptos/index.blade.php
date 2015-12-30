@extends('layouts.app')

@section('page_title', 'Carga de Conceptos')
@section('page_description', 'Listado de Conceptos')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Conceptos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('conceptos.create') !!}">Crear Nuevo</a>
        </div>

        <div class="row">
            @if($conceptos->isEmpty())
                <div class="well text-center">No se encontraron Conceptos.</div>
            @else
                <div class="box box-success">
                    <div class="box-header ">
                         <h3 class="box-title">Registros de conceptos</h3>
                    </div>
                        @include('conceptos.table')
                </div>
            @endif
        </div>

        @include('common.paginate', ['records' => $conceptos])


    </div>
@endsection
@section('script')
    <!-- DataTables -->
    {!! Html::script('assets/DataTables/datatables.min.js') !!}
    <script>
        $(function () {
            var table = $('#Tableconceptos').DataTable({
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
                    title: 'Tabla conceptos'
                }, {
                    extend: 'pdfHtml5',
                    text: 'A PDF',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    title: 'Tabla conceptos'
                }
                ]
            }

            });
        });

    </script>

    @endsection
