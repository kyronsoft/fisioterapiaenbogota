@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Categorias</li>
            </ol>
        </nav>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Español</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Inglés</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="col">
                    <div id="categorias_es"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="col">
                    <div id="table_tabulator_en"></div>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-3">
            <button id="btnnuevo" class="btn btn-primary mr-2">Nuevo</button>
            <button id="btninsertar" class="btn btn-info mr-2">Insertar</button>
            <button id="btnactualizar" class="btn btn-success mr-2">Actualizar</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/') }}/js/GestorCategorias.js"></script>
@endsection
