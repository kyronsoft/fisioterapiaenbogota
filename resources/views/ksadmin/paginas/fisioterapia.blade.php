@extends('ksadmin.plantilla')
@section('contents')

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/83" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo1_es"
                        rows="10">{{ $textos[0]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/83" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/84" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo2_es"
                        rows="10">{{ $textos[1]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/84" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/85" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo3_es"
                        rows="10">{{ $textos[2]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/85" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/86" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo4_es"
                        rows="10">{{ $textos[3]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/86" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/87" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo5_es"
                        rows="10">{{ $textos[4]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/87" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/88" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo6_es"
                        rows="10">{{ $textos[5]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/88" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/89" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo7_es"
                        rows="10">{{ $textos[6]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/89" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/90" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo8_es"
                        rows="10">{{ $textos[7]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/90" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/91" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo9_es"
                        rows="10">{{ $textos[8]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/91" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/92" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo10_es"
                        rows="10">{{ $textos[9]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/92" method="POST">
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
                <form action="{{ url('/') }}/ks-admin/fisioterapia/93" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo10_es"
                        rows="10">{{ $textos[10]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/fisioterapia/93" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo10_en"
                        rows="10">{{ $textos[10]->english }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection