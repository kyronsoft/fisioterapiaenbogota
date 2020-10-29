    @if ($idioma == 'ES')
        <section class="container-fluid d-flex justify-content-start seccion-seis">
            <div class="col-xs-5 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div class="text-center">@php echo $textos[14]->spanish; @endphp</div>
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-1.png" alt="img"
                                            style="background-color: #ddb2c6"></div>
                                    <div class="info">
                                        <h3>1</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[15]->spanish; @endphp</div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-2.png" alt="img"
                                            style="background-color: #ddad9f"></div>
                                    <div class="info">
                                        <h3>2</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[16]->spanish; @endphp</div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-3.png" alt="img"
                                            style="background-color: #b4c0ca"></div>
                                    <div class="info">
                                        <h3>3</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[17]->spanish; @endphp</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid d-flex justify-content-start seccion-seis">
            <div class="col-xs-5 col-md-8 col-lg-7 align-self-center bg-white columna">
                <div class="text-center">@php echo $textos[14]->english; @endphp</div>
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-1.png" alt="img"
                                            style="background-color: #ddb2c6"></div>
                                    <div class="info">
                                        <h3>1</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[15]->english; @endphp</div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-2.png" alt="img"
                                            style="background-color: #ddad9f"></div>
                                    <div class="info">
                                        <h3>2</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[16]->english; @endphp</div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-1 align-content-center">
                            <div class="ih-item circle effect4 left_to_right"><a href="#">
                                    <div class="img"><img src="{{ url('/') }}/storage/icon-decor-3.png" alt="img"
                                            style="background-color: #b4c0ca"></div>
                                    <div class="info">
                                        <h3>3</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="item-seccion3">@php echo $textos[17]->english; @endphp</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
