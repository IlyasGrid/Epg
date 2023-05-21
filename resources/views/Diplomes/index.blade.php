<x-Layout>
    <section>
        <style>
            section>section:after {
                content: "";
                width: 100%;
                height: 99px;
                background: url('/Diplome/Pic/Bottom.png');
                bottom: 0px;
                left: 0;
                padding-bottom: 10%;
                position: absolute;
            }

            div.xe {
                background: url('/Diplome/Pic/bg_car.jpg') center center no-repeat;
                background-size: cover;
                height: 75vh;
            }
        </style>

        <div class="xe"></div>
        <div class="xo"></div>

        <aside>
            <h1 class="des">
                Obtenez Votre Diplôme :<br>
                Qualification, Technicien, Technicien Spécialisé, Technicien supérieur, Licence, Master.. <br>
                <span>🖝</span> à distance ou Présentiel <span>🖜 </span><br>
                <br>
                Faites Votre choix, et créer votre avenir
            </h1>
        </aside>
    </section>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold700 text-primary text-uppercase">Nos Diplômes</h5>

            </div>
            <div class="row g-5">
                <div class=" wow zoomIn d-flex flex-wrap align-items-center justify-content-center  "
                    data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn; width=100%;">

                    @foreach ($diplomes as $diplome)
                        <div class=" col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn; min-width: 10vw;">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon mod">


                                    <img class="w-48 mr-6 mb-6"
                                        src="{{ $diplome->img ? asset('storage/' . $diplome->img) : asset('/Diplome/Pic/mm1.jpg') }}"
                                        alt="" />

                                </div>
                                <h4 class="mb-3" style="text-transform: capitalize">{{ $diplome->Name }}</h4>
                                <p class="m-0">cliquez ici pour voir les diplôme de <span
                                        style="text-transform: capitalize">{{ $diplome->Name }}</span>... <a
                                        class="strong" href="/Diplomes/{{ $diplome->Name }}/">plus details</a></p>
                                <div class="requis">
                                    Pré-requis <span>➨</span> {{ $diplome->Prerequis }}
                                    <br>
                                    Durée <span>➨</span> {{ $diplome->Duree }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 ads">
                    <div id="ads"></div>
                    <img src="../Index/Img/play.png" onclick="play(this)" class="Play">
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
</x-Layout>
