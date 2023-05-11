<x-layout>
    <link rel="stylesheet" href="../Index/service.css" />
    <section class="background-image">
        <style>
            .background-image {
                background-image: url('/langues/Img/langues.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <div class="gradient"></div>
        <div id="slides">

            <div class="notice">
                <h5>Formation En Langue <span style="text-transform:capitalize">{{ $langue->Name }}e </span>!</h5>
                <h3>Vous voulez développer et améliorer vos connaissances et vos compétences en Langues <span
                        style="text-transform:capitalize">{{ $langue->Name }}e </span> ?</h3>

                <div class="discut">
                    <a href="tel:+212-619-086-666" style="color: #fff;">(+212) 06 19 08 66 66 / (+212) 05 35 62 18 65</a>
                    <span> | </span>
                    <a href="#">Plus d'info</a>
                </div>
            </div>

            <div class="social">
                <span class="fa fa-dot-circle-o fo" aria-hidden="true">
                    <span class="text">22, Rue Mohammed El Hayani, V.N Fès, 4éme Etage, Appt 20 Imm Hazzaz Fes -
                        Maroc</span>
                </span>
                <span class="fa fa-dot-circle-o ft" aria-hidden="true">
                    <span class="text">contact@epg.ma</span>
                </span>
            </div>
        </div>
        <div class="triangle-up"></div>
    </section>
    <!-- Content -->
    <div class="container">
        <div class="content">
            <h2>
                Apprendre la langue <span style="text-transform:capitalize">{{ $langue->Name }}e </span>
            </h2>
        </div>

        <!-- Info -->
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bee">
                            <div class="about-img">
                                <img src='../langues/Img/{{ $langue->Name }}.jpg'
                                    onerror="this.src='../langues/Img/langues.jpg';" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h4 class="packs">{{ $langue->Subtitle }}</h4>
                    <p>
                        <i class="fa fa-quote-left"></i>
                        {{ $langue->Motivation }}
                    </p>

                    @unless ($langue->Raisons == null)
                        <p>
                            LES BONNES RAISONS D’APPRENDRE LA
                            <b style="text-transform:uppercase">{{ $langue->Name }}e</b>
                        </p>

                        @php
                            $reasons = explode('&', $langue->Raisons);
                        @endphp
                        @unless (count($reasons) < 1)
                            @foreach ($reasons as $reason)
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    Le <span style="text-transform:lowercase">{{ $langue->Name }}</span>, {{ $reason }}
                                </p>
                            @endforeach
                        @endunless
                    @endunless
                    @unless ($courses == null)
                        <h4 class="packs">Tarification</h4>
                        <p>Les prix des cours du <span style="text-transform:capitalize">{{ $langue->Name }}</span> sont
                            très convenables : </p>
                    @endunless
                </div>
            </div>
        </div>

        @unless ($courses == null)
            <!-- Packs -->
            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <th class="hide"></th>
                            <th class="inclus">Temps</th>
                            <th class="inclus">Volume horaire</th>
                            <th class="inclus">Prix / mois</th>
                        </tr>
                        @foreach ($courses as $cours)
                            <tr>
                                <th class="inclus">{{ $cours->Type }}</th>
                                <td>{{ $cours->Volume_Horraire }} Séance(s) par semaine</td>
                                <td>{{ $cours->Temps }}</td>
                                <td>{{ $cours->Price }} DH</td>
                            </tr>
                        @endforeach


                    </table>
                </div>

                @if ($niveaux != null)
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="hide"></th>
                                        <th class="inclus">Cours Normale</th>
                                        <th class="inclus">Cours du Soir</th>
                                        <th class="inclus">Cours Accéléré</th>
                                        <th class="inclus">Cours Accéléré et Rapide</th>
                                    </tr>
                                    @foreach ($niveaux as $niv)
                                        <tr>
                                            <th class="inclus"> {{ $niv->Niveau }}</th>
                                            <td>{{ $niv->Duree_Cours_Normal }}</td>
                                            <td>{{ $niv->Duree_Cours_Soir }}</td>
                                            <td>{{ $niv->Duree_Cours_Accelerer }}</td>
                                            <td>{{ $niv->Duree_Cours_Rapide }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container" style="position: relative;">
                        <style>
                            .content h6 {
                                font-weight: bold;
                                color: #a73705;
                                text-decoration: underline;
                                font-size: 20px;
                                margin-top: 20px;

                            }

                            .content p {
                                font: 18px Bold;
                                font-family: Arial, Helvetica, sans-serif;
                                line-height: 24px;
                                text-align: justify;
                                margin-bottom: .5rem !important;
                            }
                        </style>
                    </div>
                @endif
                @if ($langue->Conditions_Etudes != null)
                    <div class="row d">
                        <div class="col-lg-12">
                            <div class="content">
                                <h4 class="packs">Pièces et Frais à Fournir</h4>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    Copies CIN
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    2 Photos
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    50Dh pour chaque livre
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    100Dh frais de copie
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <h4 class="packs">Conditions d'obtention d'un visa</h4>
                                <h6 class="">Etudes</h6>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Baccalauréat ou plus
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Diplôme d'allemand B1
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Inscription dans une université ou une école
                                    supérieure
                                    en Allemagne
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>Un document prouvant la capacité de l'étudiant
                                    à
                                    financer
                                    ses études, avec:
                                <ul>
                                    <li>Garantie financière d'une personne résidant en Allemagne</li>
                                    <li>Un compte bancaire fermé ouvert dans une banque allemande pour 10 236 euros</li>
                                </ul>
                                </p>
                                <h6 class="">formation professionnelle</h6>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Baccalauréat ou diplôme de formation
                                    professionnelle
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Diplôme d'allemand B1
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Un contrat de professionnalisation, que
                                    l'étudiant
                                    obtient après avoir contacté les entreprises allemandes
                                </p>
                                <h6 class="">Recherche d'Emploi</h6>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Diplômes académiques (licence ou Master)
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Qualifications professionnelles (Diplôme de
                                    formation
                                    professionnelle)
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Expériences professionnelles
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Compte bancaire fermé
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Diplôme d'allemand B1
                                </p>
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> Adresse initiale (réservation d'hôtel)
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endunless
    </div>

</x-layout>
