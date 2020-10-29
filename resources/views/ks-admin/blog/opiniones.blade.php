@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Opiniones</li>
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
        <div class="col d-flex justify-content-end mt-3">
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="col">
                    <div id="opiniones_es"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="col">
                    <div id="table_tabulator_en"></div>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-3">
            <button id="btnactualizar" class="btn btn-success mr-2">Actualizar</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/') }}/js/GestorOpiniones.js"></script>
@endsection
