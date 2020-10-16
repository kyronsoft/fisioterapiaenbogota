@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Talleres</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <hr>
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 col-md-8">
                    <form action="{{ url('/') }}/ks-admin/talleres/{{ $talleres[0]->id }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="file" name="img_taller" class="mb-5">
                        <p>La imagen se presenta de la misma manera en que se verá en la página de inicio. La medida debe
                            ser de 1024 x 768</p>
                        <img src="{{ url('/') }}/{{ $talleres[0]->imagen }}" alt="" class="img-fluid"
                            style="width: 1024px; height:300px;">
                        <div class="form-group mt-5">
                            <label for="taller">Incluir Segmento Talleres en la página de Inicio?</label>
                            <input type="checkbox" class="form-control" id="taller" name="taller" @php echo
                                $contaller[0]->talleres == 1
                            ? ' checked' : ''; @endphp>
                        </div>
                        <div class=" form-group">
                            <div class="text-center">
                                <button class="btn btn-primary mt-5" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
