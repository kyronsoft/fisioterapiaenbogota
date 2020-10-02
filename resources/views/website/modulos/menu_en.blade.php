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
            <a class="nav-link menu-inicio" href="{{url('/init')}}">{{$websitemenu[0]->english}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{$websitemenu[1]->english}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('/about')}}">{{$websitemenu[2]->english}}</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{url('/born')}}">{{$websitemenu[3]->english}}</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{$websitemenu[4]->english}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('telerehab')}}">{{$websitemenu[5]->english}}</a></li>
                    <div class="dropdown-divider"></div>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{url('fisioterapia')}}">{{$websitemenu[6]->english}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('cuello')}}">{{$websitemenu[7]->english}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('espalda')}}">{{$websitemenu[8]->english}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('rodilla')}}">{{$websitemenu[9]->english}}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{url('deportivas')}}">{{$websitemenu[10]->english}}</a></li>
                        </ul>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/blog')}}">{{$websitemenu[11]->english}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">{{$websitemenu[12]->english}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$websitemenu[13]->english}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{url('/init')}}"><img src="images/united-states-of-america.png" alt=""
                                style="width: 16px;"> English</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{url('/')}}"><img src="images/spain.png" alt="" style="width: 16px;">
                            Español</a></li>
            </li>
        </ul>
    </div>
    <a href="{{url('contact_us')}}" class="btn btn-primary contact-menu btncontact d-none d-sm-block">Contact Us</a>
    <a href="{{url('tiendaonline')}}" class="btn btn-primary btntienda contact-menu"><i class="fa fa-shopping-cart"
            aria-hidden="true"></i> Shop Online</a>
</nav>