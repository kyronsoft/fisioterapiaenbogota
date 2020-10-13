<footer class="container-fluid bg-dark pie-pagina">
    <div class="row d-flex justify-content-center">
        <div class="col-12 align-self-center text-center">
            <div>
                <img src="{{ url('/') }}/images/logo-fisioterapia-en-bogota.png"
                    alt="logo-fisiotera" />
            </div>
        </div>
        <div class="col-12 align-self-center text-center">
            <div>
                <ul class="list-inline menu-footer">
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
                        <a href="http://localhost/frontend">Shop Online</a>
                    </li>
                </ul>
                <ul class="list-inline social-networks-footer">
                    <li class="list-inline-item">
                        <a href="{{ url($websiteheader[6]->spanish) }}">
                            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url($websiteheader[3]->spanish) }}">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url($websiteheader[4]->spanish) }}">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url($websiteheader[5]->spanish) }}">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 align-self-center text-center creditos">
            <div class="align-self-end text-white">
                <p class="text-center">All rights reserved Fisioterapia Online 2020 - Telerehabilitación en Bogotá -
                    Adriana Lucia Ramírez Bonilla</p>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center developer">
        <div class="col-6 text-center">
            <h6 class="text-white">Developed by <a href="https://www.kyronsoft.com" target="_blank">Kyronsoft</a>
            </h6>
        </div>
    </div>
</footer>
