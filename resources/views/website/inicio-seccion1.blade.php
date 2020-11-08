    @if ($route->uri == '/')
        <section class="container-fluid d-flex justify-content-center seccion-uno">
            <div class="col-xs-12 col-md-6 align-self-center bg-white columna">
                <div class="texto-seccionuno">
                    @php
                    echo $textos[0]->spanish
                    @endphp
                </div>
            </div>
        </section>
    @elseif ($route->uri == 'en')
        <section class="container-fluid d-flex justify-content-center seccion-uno">
            <div class="col-xs-12 col-md-6 align-self-center bg-white columna">
                <div class="texto-seccionuno">
                    @php
                    echo $textos[0]->english
                    @endphp
                </div>
            </div>
        </section>
    @endif
