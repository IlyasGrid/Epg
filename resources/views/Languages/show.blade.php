<x-Layout>
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
                                {{-- <img src='../langues/Img/{{ $langue->Name }}.jpg'
                                    onerror="this.src='../langues/Img/langues.jpg';" alt=""> --}}

                                    <img class="w-48 mr-6 mb-6"
                                    src="{{$langue->img ? asset('storage/' . $langue->img) : asset('/langues/img/langues.jpg')}}" alt="" />
                                
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
                            $reasons = explode(';', $langue->Raisons);
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
            @endunless
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
                                        <th class="inclus"> {{ $niv->Niveau }} </th>
                                        <td>{{ $niv->Duree_Cours_Normal }} Mois</td>
                                        <td>{{ $niv->Duree_Cours_Soir }} Mois</td>
                                        <td>{{ $niv->Duree_Cours_Accelerer }} Mois</td>
                                        <td>{{ $niv->Duree_Cours_Rapide }} Mois</td>
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
            @if ($langue->Piece_frais != null)
                <div class="row d">
                    <div class="col-lg-12">
                        <div class="content">
                            <h4 class="packs">Pièces et Frais à Fournir</h4>

                            @php
                                $pieces = explode(';', $langue->Piece_frais);
                            @endphp
                            @foreach ($pieces as $piece)
                                <p>
                                    <i class="fa fa-long-arrow-right"></i>
                                    {{ $piece }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            @if (
                $langue->Conditions_Etudes != null &&
                    $langue->Conditions_Formations != null &&
                    $langue->Conditions_Cherche_Emploi != null)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content">
                            <h4 class="packs">Conditions d'obtention d'un visa</h4>
                            <h6 class="">Etudes</h6>
                            @php
                                $etudes = explode(';', $langue->Conditions_Etudes);
                            @endphp
                            @foreach ($etudes as $etude)
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> {{ $etude }}
                                </p>
                            @endforeach

                            <h6 class="">formation professionnelle</h6>
                            @php
                                $formations = explode(';', $langue->Conditions_Formations);
                            @endphp
                            @foreach ($formations as $formation)
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> {{ $formation }}
                                </p>
                            @endforeach
                            <h6 class="">Recherche d'Emploi</h6>
                            @php
                                $cherche_emplois = explode(';', $langue->Conditions_Cherche_Emploi);
                            @endphp
                            @foreach ($cherche_emplois as $cherche_emploi)
                                <p>
                                    <i class="fa fa-long-arrow-right"></i> {{ $cherche_emploi }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>

</x-Layout>
