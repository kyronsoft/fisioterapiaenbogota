    @if ($idioma == 'ES')
        <section class="container-fluid d-flex seccion-nueve my-5">
            <div class="row justify-content-around text-center mt-5 fila">
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/telerehabilitacion-pose-bogota-colombia.jpg"
                        alt="telerehabilitacion-pose-bogota-colombia" class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[22]->spanish; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[23]->spanish; @endphp</div>
                    <a href="{{ url('/') }}/telerehabilitacion" class="btn btn-info">Más Información</a>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/fisioterapia-en-bogota-colombia.jpg"
                        alt="fisioterapia-en-bogota-colombia" class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[24]->spanish; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[25]->spanish; @endphp
                    </div>
                    <a href="{{ url('/') }}/fisioterapia" class="btn btn-info">Más Información</a>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/acupuntura-en-bogota-copia.jpg" alt="acupuntura-en-bogota-copia"
                        class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[26]->spanish; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[27]->spanish; @endphp</div>
                    <a href="#" class="btn btn-info">Próximamente</a>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid d-flex seccion-nueve">
            <div class="row justify-content-around text-center mt-5 fila">
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/telerehabilitacion-pose-bogota-colombia.jpg"
                        alt="telerehabilitacion-pose-bogota-colombia" class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[22]->english; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[23]->english; @endphp</div>
                    <a href="{{ url('/') }}/telerehabilitacion" class="btn btn-info">More Information</a>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/fisioterapia-en-bogota-colombia.jpg"
                        alt="fisioterapia-en-bogota-colombia" class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[24]->english; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[25]->english; @endphp
                    </div>
                    <a href="{{ url('/') }}/fisioterapia" class="btn btn-info">More Information</a>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <img src="{{ url('/') }}/storage/acupuntura-en-bogota-copia.jpg" alt="acupuntura-en-bogota-copia"
                        class="img-thumbnail rounded-circle img-services">
                    <h3>@php echo $textos[26]->english; @endphp</h3>
                    <div class="item-seccion9">@php echo $textos[27]->english; @endphp</div>
                    <a href="#" class="btn btn-info">Coming Soon</a>
                </div>
            </div>
        </section>
    @endif
