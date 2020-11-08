<footer class="main-footer">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 align-self-center text-center">
                <div class="mb-1">
                    <img src="{{ url('/') }}/storage/footer-logo-fisioterapia-en-bogota.png" alt="logo-footer" />
                </div>
            </div>
            <div class="col-12 align-self-center text-center">
                <div>
                    @if ($idioma == 'ES')
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('acerca') }}">Quien soy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('telerehab') }}">Servicios</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('contacto') }}">Contacto</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.kyronsoft.com/tiendavirtual">Tienda</a>
                            </li>
                        </ul>
                    @elseif ($idioma == 'EN')
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('acerca') }}">Who Am I</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('telerehab') }}">Services</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('contacto') }}">Contact</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.kyronsoft.com/shoponline">Shop OnLine</a>
                            </li>
                        </ul>
                    @endif
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ url($websiteheader[3]->spanish) }}">
                                <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ url($websiteheader[4]->spanish) }}">
                                <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ url($websiteheader[5]->spanish) }}">
                                <i class="fab fa-instagram fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ url($websiteheader[6]->spanish) }}">
                                <i class="fab fa-youtube fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 align-self-center text-center creditos">
                <div class="align-self-end text-white">
                    @if ($idioma == 'ES')
                        <p class="text-center">Derechos reservados Fisioterapia Online 2020 - Telerehabilitación en
                            Bogotá -
                            Adriana Lucia Ramírez Bonilla</p>
                    @elseif ($idioma == 'EN')
                        <p class="text-center">All rights reserved Physioterapia Online 2020 - Telerehabilitation in
                            Bogota -
                            Adriana Lucia Ramírez Bonilla</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center developer">
            <div class="col-6 text-center">
                @if ($idioma == 'ES')
                    <h6 class="text-white">Desarrollado por <a href="https://www.kyronsoft.com"
                            target="_blank">Kyronsoft</a>
                    </h6>
                @elseif ($idioma == 'EN')
                    <h6 class="text-white">Developed by <a href="https://www.kyronsoft.com"
                            target="_blank">Kyronsoft</a>
                    </h6>
                @endif
            </div>
        </div>
    </div>
</footer>
