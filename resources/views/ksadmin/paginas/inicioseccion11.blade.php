@extends('ksadmin.plantilla')
@section('contents')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Testimonios - Pagina Inicio</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>A C</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/36" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_es"
                            rows="10">{{ $textos[1]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>A C</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/36" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_en"
                            rows="10">{{ $textos[1]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Francine R</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/37" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_es"
                            rows="10">{{ $textos[2]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Francine R</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/37" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_en"
                            rows="10">{{ $textos[2]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Goutham</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/38" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_es"
                            rows="10">{{ $textos[3]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Goutham</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/38" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_en"
                            rows="10">{{ $textos[3]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Elaine Y</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/39" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_es"
                            rows="10">{{ $textos[4]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Elaine Y</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/39" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_en"
                            rows="10">{{ $textos[4]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Chris D</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/40" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_es"
                            rows="10">{{ $textos[5]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Chris D</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/40" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_en"
                            rows="10">{{ $textos[5]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Carole Turner</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/41" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo6_es"
                            rows="10">{{ $textos[6]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Carole Turner</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/41" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo6_en"
                            rows="10">{{ $textos[6]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Gladys A</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/42" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo7_es"
                            rows="10">{{ $textos[7]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Gladys A</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/42" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo7_en"
                            rows="10">{{ $textos[7]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Ana Mercedes Ibañez</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/43" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo8_es"
                            rows="10">{{ $textos[8]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Ana Mercedes Ibañez</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/43" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo8_en"
                            rows="10">{{ $textos[8]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <h4>Carlos E Vargas</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/44" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo9_es"
                            rows="10">{{ $textos[9]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>Carlos E Vargas</h4>
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion11/44" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo9_en"
                            rows="10">{{ $textos[9]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
