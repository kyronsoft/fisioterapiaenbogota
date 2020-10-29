    @if ($idioma == 'ES')
        <section class="container-fluid d-flex justify-content-center text-white seccion-once">
            <div class="col-xs-12 col-md-10 align-self-center">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <!-- A C -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[35]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/A-C.png" class="rounded-circle mt-5" alt="A-C">
                            <p>A-C</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Francine R -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[36]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/francie-roy.png" class="rounded-circle mt-5"
                                alt="francie-roy">
                            <p>francie-roy</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Goutham -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[37]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/goutham.png" class="rounded-circle mt-5" alt="goutham">
                            <p>goutham</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Elaine Y. -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[38]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/eliane.png" class="rounded-circle mt-5" alt="eliane">
                            <p>eliane</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Chris D -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[39]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/cris-d.png" class="rounded-circle mt-5" alt="cris-d">
                            <p>cris-d</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Carol Turner -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[40]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/carole.png" class="rounded-circle mt-5" alt="carole">
                            <p>carole</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Gladys A -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[41]->spanish; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/gladis.png" class="rounded-circle mt-5" alt="gladis">
                            <p>gladis</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Ana Mercedes Ibañez -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span>@php echo
                                $textos[42]->spanish;
                                @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/ana-mercedez.png" class="rounded-circle mt-5"
                                alt="ana-mercedez">
                            <p>ana-mercedez</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Carol A Vargas -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span>@php echo
                                $textos[43]->spanish;
                                @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/carlos-A.png" class="rounded-circle mt-5" alt="carlos-A">
                            <p>carlos-A</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-scrollbar"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="row d-flex justify-content-start">
                    <div class="align-self-center">
                        <span id="stars"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="align-self-center ml-3 mt-3">
                        <p>4.9/5 (93 Votos)</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid d-flex justify-content-center text-white seccion-once">
            <div class="col-xs-12 col-md-10 align-self-center">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <!-- A C -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[35]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/A-C.png" class="rounded-circle mt-5" alt="A-C">
                            <p>A-C</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Francine R -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[36]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/francie-roy.png" class="rounded-circle mt-5"
                                alt="francie-roy">
                            <p>francie-roy</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Goutham -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[37]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/goutham.png" class="rounded-circle mt-5" alt="goutham">
                            <p>goutham</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Elaine Y. -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[38]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/eliane.png" class="rounded-circle mt-5" alt="eliane">
                            <p>eliane</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Chris D -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[39]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/cris-d.png" class="rounded-circle mt-5" alt="cris-d">
                            <p>cris-d</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Carol Turner -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[40]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/carole.png" class="rounded-circle mt-5" alt="carole">
                            <p>carole</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Gladys A -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> @php echo
                                $textos[41]->english; @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/gladis.png" class="rounded-circle mt-5" alt="gladis">
                            <p>gladis</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Ana Mercedes Ibañez -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span>@php echo
                                $textos[42]->english;
                                @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/ana-mercedez.png" class="rounded-circle mt-5"
                                alt="ana-mercedez">
                            <p>ana-mercedez</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <!-- Carol A Vargas -->
                            <div><span><i class="fa fa-quote-left" aria-hidden="true"></i></span>@php echo
                                $textos[43]->english;
                                @endphp
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="{{ url('/') }}/storage/carlos-A.png" class="rounded-circle mt-5" alt="carlos-A">
                            <p>carlos-A</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-scrollbar"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="row d-flex justify-content-start">
                    <div class="align-self-center">
                        <span id="stars"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="align-self-center ml-3 mt-3">
                        <p>4.9/5 (93 Votos)</p>
                    </div>
                </div>
            </div>
        </section>
    @endif
