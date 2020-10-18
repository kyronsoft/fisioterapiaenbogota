<div class="container-fluid bg-info barra-superior">
    <div class="row">
    <div class="col-xs-3 col-sm-3 align-self-center text-white text-center">{{$websiteheader[0]->spanish}}</div>
        <div class="col-xs-9 col-sm-3 align-self-center text-white text-center"><i class="fa fa-phone-square"
                aria-hidden="true"></i>{{$websiteheader[1]->spanish}}
        </div>
        <div class="d-none d-sm-block col-sm-3 d-none d-sm-block align-self-center text-white text-center"><i
                class="fa fa-envelope" aria-hidden="true"></i>{{$websiteheader[2]->spanish}}</div>
        <div class="d-none d-sm-block col-sm-3 text-white text-center pt-3 redes-up">
            <ul class="list-inline">
            <li class="list-inline-item"><a href="{{url($websiteheader[3]->spanish)}}" target="_blank"><i class="fa fa-linkedin-square fa-2x"
                            aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{url($websiteheader[4]->spanish)}}" target="_blank"><i class="fa fa-facebook-square fa-2x"
                            aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{url($websiteheader[5]->spanish)}}" target="_blank"><i class="fa fa-instagram fa-2x"
                            aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{url($websiteheader[6]->spanish)}}" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>