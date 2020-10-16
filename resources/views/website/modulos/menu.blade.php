<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand pb-2" href="{{ url('/') }}"><img src="{{ url('/') }}/images/logo-fisioterapia-en-bogota.png"
            alt="logo-menu" style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link menu-inicio" href="{{ url('/') }}">{{ $websitemenu[0]->spanish }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ $websitemenu[1]->spanish }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('acerca') }}">{{ $websitemenu[2]->spanish }}</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{ url('nace') }}">{{ $websitemenu[3]->spanish }}</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ $websitemenu[4]->spanish }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item"
                            href="{{ url('telerehabilitacion') }}">{{ $websitemenu[5]->spanish }}</a></li>
                    <div class="dropdown-divider"></div>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                            href="{{ url('fisioterapia') }}">{{ $websitemenu[6]->spanish }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('cuello') }}">{{ $websitemenu[7]->spanish }}</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('espalda') }}">{{ $websitemenu[8]->spanish }}</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('rodilla') }}">{{ $websitemenu[9]->spanish }}</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item"
                                    href="{{ url('deportivas') }}">{{ $websitemenu[10]->spanish }}</a></li>
                        </ul>
                        <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{ url('screening') }}">Screening Prevención de Lesiones</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{ url('acupuntura') }}">Acupuntura (próximamente)</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('documentos') }}">Documentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">{{ $websitemenu[11]->spanish }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contacto') }}">{{ $websitemenu[12]->spanish }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ $websitemenu[13]->spanish }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('init') }}"><img
                                src="{{ url('/') }}/images/united-states-of-america.png" alt="" style="width: 16px;">
                            English</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{ url('/') }}"><img src="{{ url('/') }}/images/spain.png" alt=""
                                style="width: 16px;">
                            Español</a></li>
            </li>
        </ul>
    </div>
    <a href="{{ url('contactanos') }}" class="btn btn-primary contact-menu btncontact d-none d-sm-block">Contactanos</a>
    <a href="http://localhost:8000/frontend" class="btn btn-primary btntienda contact-menu"><i class="fa fa-shopping-cart"
            aria-hidden="true"></i> Tienda</a>
</nav>
