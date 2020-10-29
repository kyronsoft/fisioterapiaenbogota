    @if ($idioma == 'ES')
        <section class="container-fluid d-flex justify-content-center seccion-ocho">
            <div class="col-xs-12 col-md-10 align-self-center columna">
                <div class="texto-seccion8">@php echo $textos[18]->spanish; @endphp</div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid d-flex justify-content-center seccion-ocho">
            <div class="col-xs-12 col-md-10 align-self-center columna">
                <div class="texto-seccion8">@php echo $textos[18]->english; @endphp</div>
            </div>
        </section>
    @endif
