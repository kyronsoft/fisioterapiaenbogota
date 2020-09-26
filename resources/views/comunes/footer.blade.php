<footer class="container-fluid bg-dark pie-pagina">
    <div class="row d-flex justify-content-center">
        <div class="col-12 align-self-center text-center">
            <div>
            <img src="{{url('/')}}/images/logo-fisioterapia-en-bogota.png" alt="logo-fisiotera" />
            </div>
        </div>
        <div class="col-12 align-self-center text-center">
            <div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="index.html">Inicio</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="acerca.html">Quien soy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="telerehabilitacion.html">Servicios</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Blog</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="contacto.html">Contacto</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="tienda/index.html">Tienda</a>
                    </li>
                </ul>
                <ul class="list-inline social-networks-footer">
                    <li class="list-inline-item">
                        <a v-bind:href="linkedin">
                            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a v-bind:href="facebook">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a v-bind:href="instagram">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a v-bind:href="youtube">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 align-self-center text-center creditos">
            <div class="align-self-end text-white">
                <h6 v-html="titulo1"></h6>
                <h6 v-html="titulo2"></h6>
                <h6 v-html="titulo3"></h6>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center developer">
        <div class="col-6 text-center">
            <h6 class="text-white">
                Construido por
                <a href="https://www.kyronsoft.com">Kyronsoft</a>
            </h6>
        </div>
    </div>
    <div class="text-right">
        <a class="ir-arriba" javascript:void(0) title="Volver arriba">
            <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </div>
</footer>