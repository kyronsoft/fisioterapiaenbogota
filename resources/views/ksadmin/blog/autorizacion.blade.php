@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-6 col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista Opiniones</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div id="app">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-2"></div>
                <div class="col-10">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID Articulo</th>
                                <th>Titulo Artículo</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Mensaje</th>
                                <th>Respuesta</th>
                                <th>Aprobación</th>
                                <th>Fecha Mensaje</th>
                                <th>Fecha Respuesta</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($opiniones as $item)
                                <tr>
                                    <td>{{ $item->id_art }}</td>
                                    <td>{{ $item->titulo_articulo }}</td>
                                    <td>{{ $item->nombre_opinion }}</td>
                                    <td>{{ $item->correo_opinion }}</td>
                                    <td>{{ $item->contenido_opinion }}</td>
                                    <td>{{ $item->respuesta_opinion }}</td>
                                    <td class="text-center">
                                        @php
                                        if ($item->aprobacion_opinion == 1) {
                                        $accion = 'Desaprobar';
                                        @endphp
                                        <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                        @php
                                        } else {
                                        $accion = 'Aprobar';
                                        @endphp
                                        <i class="fa fa-window-close text-danger" aria-hidden="true"></i>
                                        @php
                                        }
                                        @endphp
                                    </td>
                                    <td>{{ date_format(date_create($item->fecha_opinion), 'd-m-Y') }}</td>
                                    <td>{{ date_format(date_create($item->fecha_respuesta), 'd-m-Y') }}</td>
                                    <td>
                                        <aprobar-component id="{{ $item->id_opinion }}" estado="{{ $accion }}">
                                        </aprobar-component>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-center">
                    <div>
                        {{ $opiniones->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
