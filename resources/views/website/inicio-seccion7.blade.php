    @if ($idioma == 'ES')
        <section class="container mt-5 titulo-seccion-siete">
            <div class="row">
                <div class="container">
                    <h3 class="text-center">Para reclamar tus tips de regalo, da click en el folleto
                        correspondiente al área que te duele</h3>
                </div>
            </div>
        </section>
        <section class="container-fluid seccion-siete">
            <div class="row align-content-center">
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-3-spa.png" class="img-folleto"
                            alt="port-3-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_cuello" class="btn btn-info ">Descargar</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-1-spa.png" class="img-folleto"
                            alt="port-1-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_espalda" class="btn btn-info ">Descargar</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-4-spa.png" class="img-folleto"
                            alt="port-4-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_rodilla" class="btn btn-info ">Descargar</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-2-spa.png" class="img-folleto"
                            alt="port-2-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_deportivas" class="btn btn-info ">Descargar</a>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container mt-5 titulo-seccion-siete">
            <div class="row">
                <div class="container">
                    <h3 class="text-center">
                        To claim your gift tips, click on the brochure
                        corresponding to the area that hurts</h3>
                </div>
            </div>
        </section>
        <section class="container-fluid seccion-siete">
            <div class="row align-content-center">
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-3-eng.png" class="img-folleto"
                            alt="port-3-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_cuello" class="btn btn-info ">Download</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-1-eng.png" class="img-folleto"
                            alt="port-1-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_espalda" class="btn btn-info ">Download</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-4-eng.png" class="img-folleto"
                            alt="port-4-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_rodilla" class="btn btn-info ">Download</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/port-2-eng.png" class="img-folleto"
                            alt="port-2-spa">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/') }}/descargar_deportivas" class="btn btn-info ">Download</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
