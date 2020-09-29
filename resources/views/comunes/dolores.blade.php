<section class="container-fluid d-flex justify-content-end seccion-cinco">
    <div class="col-12 align-self-center bg-white">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <a class="nav-link active" id="cuello-tab" data-toggle="tab" href="#cuello" role="tab" aria-controls="home" aria-selected="true">{{$textos['157']['spanish']}}</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="espalda-tab" data-toggle="tab" href="#espalda" role="tab" aria-controls="profile" aria-selected="false">Dolor De Espalda</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="cadera-tab" data-toggle="tab" href="#cadera" role="tab" aria-controls="contact" aria-selected="false">Dolor De Cadera Y Rodilla</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="deportivas-tab" data-toggle="tab" href="#deportivas" role="tab" aria-controls="contact" aria-selected="false">Lesiones Deportivas</a>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="cuello" role="tabpanel" aria-labelledby="cuello-tab">
                <h3 class="text-center">{{$textos['158']['spanish']}}</h3>
                <div class="row d-flex-justify-content-center">
                    <div class="col-xs-12 col-md-6">
                        <p class="text-justify">@php echo $textos['159']['spanish']; @endphp</p>
                            <a href="" class="btn btn-primary">Más Información</a>
                    </div>
                    <div class="d-none d-md-block col-md-6 align-self-center">
                        <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="espalda" role="tabpanel" aria-labelledby="espalda-tab">
                <div class="row d-flex-justify-content-center">
                    <div class="col-xs-12 col-md-6">
                        <p class="text-justify">@php echo $textos['162']['spanish']; @endphp</p>
                        <p class="text-justify">@php echo $textos['163']['spanish']; @endphp</p>
                        <a href="" class="btn btn-primary">Más Información</a>
                    </div>
                    <div class="d-none d-md-block col-md-6 align-self-center">
                        <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cadera" role="tabpanel" aria-labelledby="cadera-tab">
                <div class="row d-flex-justify-content-center">
                    <div class="col-xs-12 col-md-6">
                        <p class="text-justify">@php echo $textos['166']['spanish']; @endphp</p>
                            <a href="" class="btn btn-primary">Más Información</a>
                    </div>
                    <div class="d-none d-md-block col-md-6 align-self-center">
                        <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="deportivas" role="tabpanel" aria-labelledby="deportivas-tab">
                <div class="row d-flex-justify-content-center">
                    <div class="col-xs-12 col-md-6">
                        <p class="text-justify">@php echo $textos['169']['spanish']; @endphp</p>
                    </div>
                    <div class="d-none d-md-block col-md-6 align-self-center">
                        <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>