<nav class="navbar navbar-expand-md navbar-light bg-white" id="navbar">
    <a class="navbar-brand pb-2" href="{{ url('/') }}"><img
            src="{{ url('/') }}/storage/rsz_logo-fisioterapia-en-bogota.png" alt="logo-menu"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                @if ($idioma == 'ES')
                    <a class="nav-link" href="{{ url('/') }}">{{ $menu[0]->spanish }}</a>
                @elseif ($idioma == 'EN')
                    <a class="nav-link" href="{{ url('/') }}/en">{{ $menu[0]->english }}</a>
                @endif
            </li>
            <li class="nav-item dropdown">
                @if ($idioma == 'ES')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $menu[1]->spanish }}
                    </a>
                @elseif ($idioma == 'EN')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $menu[1]->english }}
                    </a>
                @endif
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    @if ($idioma == 'ES')
                        <a class="dropdown-item" href="{{ url('acerca') }}">{{ $menu[2]->spanish }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('nace') }}">{{ $menu[3]->spanish }}</a>
                    @elseif ($idioma == 'EN')
                        <a class="dropdown-item" href="{{ url('about') }}">{{ $menu[2]->english }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('born') }}">{{ $menu[3]->english }}</a>
                    @endif
                </div>
            </li>
            <li class="nav-item dropdown">
                @if ($idioma == 'ES')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $menu[4]->spanish }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('telerehab') }}">{{ $menu[5]->spanish }}</a></li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                href="{{ url('fisio') }}">{{ $menu[6]->spanish }}</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('cuello') }}">{{ $menu[7]->spanish }}</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="{{ url('espalda') }}">{{ $menu[8]->spanish }}</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="{{ url('rodilla') }}">{{ $menu[9]->spanish }}</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="{{ url('deportivas') }}">{{ $menu[10]->spanish }}</a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('screening_es') }}">{{ $menu[17]->spanish }}</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('acupuntura') }}">{{ $menu[18]->spanish }}</a></li>
                    </ul>
                @elseif ($idioma == 'EN')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $menu[4]->english }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="{{ url('/telerehabilitation') }}">{{ $menu[5]->english }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/physio') }}">{{ $menu[6]->english }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('screening') }}">{{ $menu[17]->english }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('acupuncture') }}">{{ $menu[18]->english }}</a>
                @endif
            </li>
            <li class="nav-item active">
                @if ($idioma == 'ES')
                    <a class="nav-link" href="{{ url('documentos') }}">{{ $menu[16]->spanish }}</a>
                @elseif ($idioma == 'EN')
                    <a class="nav-link" href="{{ url('documents') }}">{{ $menu[16]->english }}</a>
                @endif
            </li>
            @if ($idioma == 'ES')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}/blog">Blog</a>
                </li>
            @elseif ($idioma == 'EN')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}/blog_en">Blog</a>
                </li>
            @endif
            <li class="nav-item active">
                @if ($idioma == 'ES')
                    <a class="nav-link" href="{{ url('/contacto') }}">{{ $menu[12]->spanish }}</a>
                @elseif ($idioma == 'EN')
                    <a class="nav-link" href="{{ url('/contact') }}">{{ $menu[12]->english }}</a>
                @endif
            </li>
            <li class="nav-item dropdown">
                @if ($idioma == 'ES')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $menu[13]->spanish }}
                    </a>
                @elseif ($idioma == 'EN')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $menu[13]->english }}
                    </a>
                @endif
                @if ($idioma == 'ES')
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="{{ url('/') }}"><img src="{{ url('/') }}/storage/spain.png"
                                alt="spain_flag" style="width: 16px">
                            {{ $menu[15]->spanish }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/en') }}"><img
                                src="{{ url('/') }}/storage/united-states-of-america.png" alt="usa_flag"
                                style="width: 16px"> {{ $menu[14]->spanish }}</a>
                    </div>
                @elseif ($idioma == 'EN')
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="{{ url('/') }}"><img src="{{ url('/') }}/storage/spain.png"
                                alt="spain_flag" style="width: 16px">
                            {{ $menu[15]->english }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/en') }}"><img
                                src="{{ url('/') }}/storage/united-states-of-america.png" alt="usa_flag"
                                style="width: 16px"> {{ $menu[14]->english }}</a>
                    </div>
                @endif
            </li>
        </ul>
        <div id="btn-additional">
            @if ($idioma == 'ES')
                <a class="btn btn-primary" href="{{ url('/contactanos') }}" id="btn-contactanos">Contactanos</a>
                <a class="btn btn-primary" href="{{ url('') }}" id="btn-tienda">Tienda Virtual</a>
            @elseif ($idioma == 'EN')
                <a class="btn btn-primary" href="{{ url('contact_us') }}" id="btn-contactanos">Contact us</a>
                <a class="btn btn-primary" href="{{ url('') }}" id="btn-tienda">Shop Online</a>
            @endif
        </div>
    </div>
</nav>
