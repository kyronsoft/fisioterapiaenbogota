    @if ($route->uri == '/')
        <section class="container-fluid d-flex justify-content-end seccion-dos">
            <div class="col-xs-12 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div>@php echo $textos[1]->spanish; @endphp</div>
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddb2c6;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[2]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-2.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddad9f;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[3]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-3.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #b4c0ca;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[4]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddb2c6;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[5]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddad9f;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[6]->spanish; @endphp</div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($route->uri == 'en')
        <section class="container-fluid d-flex justify-content-end seccion-dos">
            <div class="col-xs-12 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div>@php echo $textos[1]->english; @endphp</div>
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddb2c6;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[2]->english; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-2.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddad9f;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[3]->english; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-3.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #b4c0ca;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[4]->english; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddb2c6;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[5]->english; @endphp</div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion2"
                            style="background-color: #ddad9f;">
                    </div>
                    <div class="col-xs-10 col-md-10 align-self-center">
                        <div class="item-seccion2">@php echo $textos[6]->english; @endphp</div>
                    </div>
                </div>
            </div>
        </section>
    @endif
