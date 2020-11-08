    @if ($idioma == 'ES')
        <section class="container-fluid d-flex seccion-nueve my-5">
            <div class="row justify-content-around text-center mt-5 fila">
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/telerehabilitacion-pose-bogota-colombia.jpg"
                            alt="telerehabilitacion-pose-bogota-colombia"
                            class="img-thumbnail rounded-circle img-services imgA1">
                        <img src="{{ url('/') }}/storage/marcaagua1.jpg" alt=""
                            class="imgB1 rounded-circle img-thumbnail img-services">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[22]->spanish; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[23]->spanish; @endphp</div>
                        <a href="{{ url('/') }}/telerehab" class="btn btn-info">Más Información</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/fisioterapia-en-bogota-colombia.jpg"
                            alt="fisioterapia-en-bogota-colombia"
                            class="img-thumbnail rounded-circle img-services imgA2">
                        <img src="{{ url('/') }}/storage/marcaagua2.jpg" alt=""
                            class="imgB2 rounded-circle img-thumbnail img-services">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[24]->spanish; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[25]->spanish; @endphp
                        </div>
                        <a href="{{ url('/') }}/fisio" class="btn btn-info">Más Información</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/acupuntura-en-bogota-copia.jpg"
                            alt="acupuntura-en-bogota-copia" class="img-thumbnail rounded-circle img-services imgA3">
                        <img src="{{ url('/') }}/storage/marcaagua3.jpg" alt=""
                            class="imgB3 rounded-circle img-thumbnail img-services">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[26]->spanish; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[27]->spanish; @endphp</div>
                        <a href="#" class="btn btn-info">Próximamente</a>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid d-flex seccion-nueve">
            <div class="row justify-content-around text-center mt-5 fila">
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/telerehabilitacion-pose-bogota-colombia.jpg"
                            alt="telerehabilitacion-pose-bogota-colombia"
                            class="img-thumbnail rounded-circle img-services imgA1">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[22]->english; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[23]->english; @endphp</div>
                        <a href="{{ url('/') }}/telerehab" class="btn btn-info">More Information</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/fisioterapia-en-bogota-colombia.jpg"
                            alt="fisioterapia-en-bogota-colombia"
                            class="img-thumbnail rounded-circle img-services imgA1">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[24]->english; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[25]->english; @endphp
                        </div>
                        <a href="{{ url('/') }}/fisio" class="btn btn-info">More Information</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ url('/') }}/storage/acupuntura-en-bogota-copia.jpg"
                            alt="acupuntura-en-bogota-copia" class="img-thumbnail rounded-circle img-services imgA1">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3>@php echo $textos[26]->english; @endphp</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="item-seccion9">@php echo $textos[27]->english; @endphp</div>
                        <a href="#" class="btn btn-info">Coming Soon</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
