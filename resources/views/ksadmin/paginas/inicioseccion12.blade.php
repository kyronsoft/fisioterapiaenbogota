@extends('ksadmin.plantilla')
@section('contents')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">FAQ - Pagina Inicio</h1>
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
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/45" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_es"
                            rows="10">{{ $textos[0]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/45" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_en"
                            rows="10">{{ $textos[0]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/46" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_es"
                            rows="10">{{ $textos[1]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/46" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_en"
                            rows="10">{{ $textos[1]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/47" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_es"
                            rows="10">{{ $textos[2]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/47" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_en"
                            rows="10">{{ $textos[2]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/48" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_es"
                            rows="10">{{ $textos[3]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/48" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_en"
                            rows="10">{{ $textos[3]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/49" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_es"
                            rows="10">{{ $textos[4]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/49" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_en"
                            rows="10">{{ $textos[4]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/50" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo6_es"
                            rows="10">{{ $textos[5]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/50" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo6_en"
                            rows="10">{{ $textos[5]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/51" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo7_es"
                            rows="10">{{ $textos[6]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/51" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo7_en"
                            rows="10">{{ $textos[6]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/52" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo8_es"
                            rows="10">{{ $textos[7]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/52" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo8_en"
                            rows="10">{{ $textos[7]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/53" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo9_es"
                            rows="10">{{ $textos[8]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/53" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo9_en"
                            rows="10">{{ $textos[8]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/54" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo10_es"
                            rows="10">{{ $textos[9]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/54" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo10_en"
                            rows="10">{{ $textos[9]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/55" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo11_es"
                            rows="10">{{ $textos[10]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/55" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo11_en"
                            rows="10">{{ $textos[10]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/56" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo12_es"
                            rows="10">{{ $textos[11]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/56" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo12_en"
                            rows="10">{{ $textos[11]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/57" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo13_es"
                            rows="10">{{ $textos[12]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/57" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo13_en"
                            rows="10">{{ $textos[12]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/58" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo14_es"
                            rows="10">{{ $textos[13]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/58" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo14_en"
                            rows="10">{{ $textos[13]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/59" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo15_es"
                            rows="10">{{ $textos[14]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/59" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo15_en"
                            rows="10">{{ $textos[14]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/60" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo16_es"
                            rows="10">{{ $textos[15]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/60" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo16_en"
                            rows="10">{{ $textos[15]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/61" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo17_es"
                            rows="10">{{ $textos[16]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/61" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo17_en"
                            rows="10">{{ $textos[16]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/62" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo18_es"
                            rows="10">{{ $textos[17]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion12/62" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo18_en"
                            rows="10">{{ $textos[17]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
