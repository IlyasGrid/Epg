<x-Layout>
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/Biblo.css" />
    <section style="min-height: 100vh ; " class="background-image">
        <div class="gray-overlay">

            <style>
                .background-image {
                    background-image: url('/Index/Img/Its.jpg');
                    position: relative;
                    width: 100%;
                    height: 500px;

                }

                .gray-overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    /* Adjust opacity here */
                }
            </style>
            <div class="soutien showing"></div>

            <div class="notice">
                <h5>Cours de soutien en informatique !</h5>
                <h3>Vous voulez réussir vos examens, vos projets informatique de stage ou de fin d’étude ?</h3>

                <div class="discut">
                    <a href="tel:+212660777382" style="color: #fff;">(+212) 06 60 77 73 82 / (+212) 05 35 62 18 65</a>
                    <span> | </span>
                    <a href="#">Plus d'info</a>
                </div>
            </div>

            <div class="social">
                <span class="fa fa-dot-circle-o fo">
                    <span class="text">22, Rue Mohammed El Hayani, V.N Fès, 4éme Etage, Appt 20 Imm Hazzaz Fes -
                        Maroc</span>
                </span>
                <span class="fa fa-dot-circle-o ft">
                    <span class="text">contact@epg.ma</span>
                </span>
            </div>
        </div>
        </div>
    </section>


    <!-- Content -->
    <div class="container">
        <div class="content">
            <h2>
                <span>Soutien </span>
                en tout matière
                <span>Informatique</span>
            </h2>
        </div>
        <!-- Info -->
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="bee">
                            <div class="about-img">
                                <img src="Index/Img/tutoriel.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bee y">
                            <div class="about-img">
                                <img src="Index/Img/informatique.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content">
                    <p>
                        <i class="fa fa-quote-left"></i>
                        Vous voulez réussir vos examens, vos projets informatique (de stage ou de fin d’étude), l'Ecole
                        polytechnique des Génies vous propose des formules de soutien en tout matière Informatique avec
                        des prix très convenables, plus avantageux et abordable.
                    </p>
                    <p>
                        <i class="fa fa-long-arrow-right"></i>
                        Projet de fin d'étude (PFE)
                    </p>
                    <p>
                        <i class="fa fa-long-arrow-right"></i>
                        Préparation d'examens
                    </p>
                    <p>
                        <i class="fa fa-long-arrow-right"></i>
                        Préparer un doctorat
                    </p>
                    <h4 class="packs">Tarification</h4>
                    <p>
                        <i class="fa fa-quote-left"></i>
                        Trouver des personnes qui seront intéressées pour démarrer un groupe de 2, 3 ou 4 personnes avec
                        vous, afin que le soutien soit orienté vers vos besoins spécifiques.
                    </p>
                </div>
            </div>
        </div>

        <!-- Packs -->
        <div class="row">
            <div class="col-lg-12">
                <table>
                    <tr>
                        <th class="hide"></th>
                        <th class="inclus">Nombre de personne</th>
                        <th class="inclus">Volume horaire</th>
                        <th class="inclus">Prix / mois</th>
                    </tr>
                    {{-- @foreach ($soutiens as $soutien)
                        <tr>
                            <th class="inclus" >{{$soutien->type}}</th>
                            <td>{{$soutien->nbr_personne}}</td>
                            <td >{{$soutien->volume_horraire}} par semaine</td>
                            <td>{{$soutien->price}} Dh</td>
                        </tr>
                    @endforeach --}}
                    @foreach ($soutiens->groupBy('type') as $type => $soutien)
                        @foreach ($soutien as $tarif)
                            <tr>

                                <th class="inclus">{{ $type }}
                                </th>
                                <td>{{ $tarif->nbr_personne }}</td>
                                <td>{{ $tarif->volume_horraire }} par semaine</td>
                                <td>{{ $tarif->price }} Dh</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <section class="blog"></section>


    <script src="Index/Js.js"></script>
</x-Layout>
