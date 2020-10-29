    @if ($idioma == 'ES')
        <section class="container mt-5 titulo-seccion-siete">
            <div class="row">
                <h3 class="text-justify">Para reclamar tus tips de regalo, da click en el folleto
                    correspondiente al área que te duele</h3>
            </div>
        </section>
        <section class="container-fluid d-flex justify-content-between seccion-siete">
            <div class="row align-content-between">
                <div class="col-xs-12 col-md-6">
                    <img src="{{ url('/') }}/storage/port-3-spa.png" class="img-fluid" alt="port-3-spa">
                    <a href="{{ url('/') }}/descargar_cuello" class="btn btn-info">Descargar</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="{{ url('/') }}/storage/port-1-spa.png" class="img-fluid" alt="port-1-spa">
                    <a href="{{ url('/') }}/descargar_espalda" class="btn btn-info">Descargar</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="{{ url('/') }}/storage/port-4-spa.png" class="img-fluid" alt="port-4-spa">
                    <a href="{{ url('/') }}/descargar_rodilla" class="btn btn-info">Descargar</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="{{ url('/') }}/storage/port-2-spa.png" class="img-fluid" alt="port-2-spa">
                    <a href="{{ url('/') }}/descargar_deportivas" class="btn btn-info">Descargar</a>
                </div>
            </div>
        </section>

    @elseif ($idioma == 'EN')
        <section class="container mt-5 titulo-seccion-siete">
            <div class="row">
                <h3 class="text-justify">
                    To claim your gift tips, click on the brochure
                    corresponding to the area that hurts</h3>
            </div>
        </section>
        <section class="container-fluid d-flex justify-content-between seccion-siete">
            <div class="row align-content-between">
                <div class="col-xs-12 col-md-6 text-center">
                    <img src="{{ url('/') }}/storage/port-3-eng.png" class="img-fluid" alt="port-3-eng">
                    <a href="{{ url('/') }}/descargar_cuello" class="btn btn-info">Download</a>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <img src="{{ url('/') }}/storage/port-1-eng.png" class="img-fluid" alt="port-1-eng">
                    <a href="{{ url('/') }}/descargar_espalda" class="btn btn-info">Download</a>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <img src="{{ url('/') }}/storage/port-4-eng.png" class="img-fluid" alt="port-4-eng">
                    <a href="{{ url('/') }}/descargar_rodilla" class="btn btn-info">Download</a>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <img src="{{ url('/') }}/storage/port-2-eng.png" class="img-fluid" alt="port-2-eng">
                    <a href="{{ url('/') }}/descargar_deportivas" class="btn btn-info">Download</a>
                </div>
            </div>
        </section>

    @endif
