@extends('ksadmin.plantilla')
@section('contents')

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/deportivas/97" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo1_es"
                        rows="10">{{ $textos[0]->spanish }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/') }}/ks-admin/deportivas/97" method="POST">
                    @method('PUT')
                    @csrf
                    <textarea class="form-control summernote-sm" name="parrafo1_en"
                        rows="10">{{ $textos[0]->english }}</textarea>
                    <hr>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
