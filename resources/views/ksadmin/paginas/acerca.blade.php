@extends('ksadmin.plantilla')
@section('contents')

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/63" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo1_es"
                    rows="10">{{ $textos[0]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/63" method="POST">
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
            <form action="{{ url('/') }}/ks-admin/acerca/64" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo2_es"
                    rows="10">{{ $textos[1]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/64" method="POST">
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
            <form action="{{ url('/') }}/ks-admin/acerca/65" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo3_es"
                    rows="10">{{ $textos[2]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/65" method="POST">
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
            <form action="{{ url('/') }}/ks-admin/acerca/66" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo4_es"
                    rows="10">{{ $textos[3]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/66" method="POST">
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
            <form action="{{ url('/') }}/ks-admin/acerca/67" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo5_es"
                    rows="10">{{ $textos[4]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/acerca/67" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo5_en"
                    rows="10">{{ $textos[4]->english }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
