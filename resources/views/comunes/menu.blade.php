<nav class="navbar navbar-expand-md navbar-light bg-light">
<a class="navbar-brand pb-2" href="#"><img src="{{url('/')}}/images/logo-fisioterapia-en-bogota.png" alt="logo-menu"
            style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link menu-inicio" href="{{url('/')}}">{{$textos[7]['spanish']}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{$textos[8]['spanish']}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('acerca')}}">{{$textos[9]['spanish']}}</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{url('nace')}}">{{$textos[10]['spanish']}}</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{$textos[11]['spanish']}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('telerehab')}}">{{$textos[12]['spanish']}}</a></li>
                    <div class="dropdown-divider"></div>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{url('fisioterapia')}}">{{$textos[13]['spanish']}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('cuello')}}">{{$textos[14]['spanish']}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('espalda')}}">{{$textos[15]['spanish']}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('rodilla')}}">{{$textos[16]['spanish']}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('deportivas')}}">{{$textos[17]['spanish']}}</a></li>
                        </ul>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('blog')}}">{{$textos[18]['spanish']}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contacto')}}">{{$textos[19]['spanish']}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$textos[20]['spanish']}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('home')}}"><img src="images/united-states-of-america.png" alt=""
                                style="width: 16px;"> English</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{url('/')}}"><img src="images/spain.png" alt="" style="width: 16px;">
                            Español</a></li>
            </li>
        </ul>
    </div>
    <a href="{{url('contactanos')}}" class="btn btn-primary contact-menu btncontact d-none d-sm-block">{{$textos[21]['spanish']}}</a>
    <a href="{{url('tiendaonline')}}" class="btn btn-primary btntienda contact-menu"><i class="fa fa-shopping-cart"
            aria-hidden="true"></i> {{$textos[22]['spanish']}}</a>
</nav>