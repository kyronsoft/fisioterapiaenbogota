<footer class="container-fluid bg-dark pie-pagina">
    <div class="row d-flex justify-content-center">
        <div class="col-12 align-self-center text-center">
            <div>
            <img src="{{url('/')}}/images/logo-fisioterapia-en-bogota.png" alt="logo-fisiotera"/>
            </div>
        </div>
        <div class="col-12 align-self-center text-center">
            <div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{url('/')}}">Inicio</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url('acerca')}}">Quien soy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url('telerehab')}}">Servicios</a>
                    </li>
                    <li class="list-inline-item">
                    <a href="{{url('blog')}}">Blog</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url('contacti')}}">Contacto</a>
                    </li>
                    <li class="list-inline-item">
                    <a href="{{url('tiendaonline')}}}">Tienda</a>
                    </li>
                </ul>
                <ul class="list-inline social-networks-footer">
                    <li class="list-inline-item">
                        <a href="{{url($textos[5]["spanish"])}}">
                            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url($textos[2]["spanish"])}}">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url($textos[3]["spanish"])}}">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url($textos[4]["spanish"])}}">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 align-self-center text-center creditos">
            <div class="align-self-end text-white">
                <h6 class="text-center">@php
                    echo $textos[101]["spanish"];
                @endphp</h6>
                <h6 class="text-center">@php
                    echo $textos[102]["spanish"];
                @endphp</h6>
                <h6 class="text-center">@php
                    echo $textos[103]["spanish"];
                @endphp</h6>
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
    {{-- <div class="text-right">
        <a class="ir-arriba" javascript:void(0) title="Volver arriba">
            <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </div> --}}
</footer>