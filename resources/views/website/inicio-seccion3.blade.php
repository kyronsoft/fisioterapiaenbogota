    @if ($route->uri == '/')
        <section class="container-fluid d-flex justify-content-start seccion-tres">
            <div class="col-xs-5 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div class="text-center">@php echo $textos[7]->spanish; @endphp</div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #ddb2c6; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[8]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-2.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #ddad9f; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[9]->spanish; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-3.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #b4c0ca; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[10]->spanish; @endphp</div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($route->uri == 'en')
        <section class="container-fluid d-flex justify-content-start seccion-tres">
            <div class="col-xs-5 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div class="text-center">@php echo $textos[7]->english; @endphp</div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-1.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #ddb2c6; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[8]->english; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-2.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #ddad9f; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[9]->english; @endphp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 align-self-center">
                        <img src="{{ url('/') }}/storage/icon-decor-3.png" alt="" class="rounded-circle icono-seccion3"
                            style="background-color: #b4c0ca; padding:5px">
                    </div>
                    <div class="col-xs-10 col-md-10">
                        <div class="item-seccion3">@php echo $textos[10]->english; @endphp</div>
                    </div>
                </div>
            </div>
        </section>
    @endif
