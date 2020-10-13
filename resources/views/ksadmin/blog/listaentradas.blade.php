@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-6 col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista Entradas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <div class="col-2"></div>
            <div class="col-10">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Portada</th>
                            <th>Titulo</th>
                            <th>Vistas</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articulos as $item)
                            <tr>
                                <td>{{ $item->id_articulo }}</td>
                                <td>{{ $item->titulo_categoria }}</td>
                                <td><img src="{{ url('/') }}/{{ $item->portada_articulo }}" alt="" style="width: 100px;">
                                </td>
                                <td>{{ $item->titulo_articulo }}</td>
                                <td><i class="fa fa-eye" aria-hidden="true"></i> {{ $item->vistas_articulo }}</td>
                                <td>{{ date_format(date_create($item->fecha_articulo), 'd-m-Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/') }}/ks-admin/blog/entrada/{{ $item->id_articulo }}"
                                            class="btn btn-outline-primary btn-sm mr-2">Ver</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row d-flex justify-content-center">
                <div>
                    {{ $articulos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
