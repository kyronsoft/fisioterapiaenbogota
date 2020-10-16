@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-6 col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista Clientes</li>
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
                            <th>Nombres</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Mensaje</th>
                            <th>Recibido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajes as $item)
                            <tr>
                                <td>{{ $item->nombres }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->mensaje }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row d-flex justify-content-center">
                <div>
                    {{ $mensajes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
