<x-Layout>
    <section>
        <style>
            /* section>section:after {
                content: "";
                width: 100%;
                height: 99px;
                background: url('/Diplome/Pic/Bottom.png');
                bottom: 0px;
                left: 0;
                padding-bottom: 15%;
                position: absolute;
            } */
            section>img {
                position: absolute;
                bottom: -5%;
                left: 0;
                z-index: 2;
            }
        </style>
        <div class="xe xep lpil"></div>
        <img src="/Diplome/Pic/Bottom.png" alt="">
        <div class="xo xop"></div>


        <aside>
            <h1 style="text-transform: uppercase">{{ $branche->Fullname }}</h1>

        </aside>

    </section>

    <div class="item">

        <div class="row mrn">

            <div class="lg-9 clr_Orange">

                <div class="row">

                    <div class="lg-3 cntr">

                        <img src="/Diplome/Pic/Options2.png" alt="">

                    </div>

                    <div class="lg-9">


                        <div class="share clr_Orange">
                            <h5 class="pfp">{{ $branche->Abreviation }}</h5>

                        </div>
                        @if ($branche->Motivation != null)
                            <p> {{ $branche->Motivation }}</p>
                        @endif
                        <span> <a href="#ch" style=" font-weight: 900;">
                                &#9886; Pré-inscription en ligne &#9887;</a>
                        </span>

                    </div>

                </div>



                <div class="share ntr clr_Orange">
                    <h5>Tarification</h5>
                </div>
                <p class="tarifs">L'école Polytechnique des génies vous propose des cours en <span
                        class="clr_Orange">présentiel</span> ainsi des cours <span class="clr_Orange">à
                        distance</span> à des tarifs trés encourageants</p>
                <p class="tarifs"><span class="clr_Orange">Frais d'inscription: </span> {{ $branche->Price_month }}
                </p>
                <table class="tarifs">

                    <tr class="clr">
                        <td>Cours de jour <span class="clr_Orange">➨</span> {{ $branche->Price_month }} DH / Mois
                            OU {{ $branche->Price_year }} Dhs/l'année si c'est
                            payé en avance</td>
                    </tr>
                    <tr class="clr">
                        <td>Cours du soir <span class="clr_Orange">➨</span> {{ $branche->Price_month }} DH / Mois
                            OU {{ $branche->Price_year }} Dhs/l'année si c'est
                            payé en avance</td>
                    </tr>
                </table>
                <p class="tarifs"><span class="clr_Orange">L'inscription est ouverte.</span>

                </p>
                <div class="share clr_Orange">

                    <h5 class="pfp">PRÉ-REQUIS</h5>

                </div>


                @php
                    $prerequis = explode(';', $branche->Prerequis);
                @endphp
                @unless (count($prerequis) <= 0)
                    @if (count($prerequis) > 1)
                        <p>Les personnes intéressées à s‘inscrire à ce programme devront avoir complété un diplôme d’études
                            secondaires ou professionnelles ou posséder une formation jugée suffisante par le lycée. Les
                            candidats devront également satisfaire à l’une des conditions suivantes :</p>
                    @endif
                    <ul>
                        @foreach ($prerequis as $prerequi)
                            <li><span>✦</span> {{ $prerequi }}
                            </li>
                        @endforeach
                    </ul>
                @endunless


                <div class="share clr_Orange">
                    <h5 class="pfp">Objectif:</h5>
                    @php
                        $objectifs = explode(';', $branche->Objectifs);
                    @endphp
                    @unless (count($objectifs) <= 0)
                        <ul>
                            @foreach ($objectifs as $objectif)
                                <li><span>✦</span> {{ $objectif }}
                                </li>
                            @endforeach
                        </ul>
                    @endunless

                    {{-- <p>{{ $branche->Objectifs }}</p> --}}
                </div>


                @unless (count($branche->programs) <= 0)
                    {{-- Programme --}}
                    <div class="share clr_Orange ntr">

                        <h5>Programme</h5>

                    </div>
                    @foreach ($branche->programs->groupBy('Annee') as $annee => $programs)
                        <h5 class="trtd">{{ $annee }} année</h5>
                        <table>
                            @foreach ($programs as $key => $program)
                                @php
                                    $key += 1;
                                    $numModule = $key;
                                @endphp
                                <tr class="item{{ $key % 2 === 0 ? ' clr' : '' }}">

                                    <td class="mdl"> Module {{ $numModule }}</td>
                                    <td>{{ $program->Name_module }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endforeach
                    {{-- End Programme --}}
                @endunless
                @if (count($branche->programs) <= 0)
                    <div class="share clr_Orange ntr">

                        <h5>Programme</h5>
                        <p>no programme yet</p>

                    </div>
                @endif
                {{-- Programme --}}
                {{-- <div class="share clr_Orange ntr">

                    <h5>Programme</h5>

                </div>

                <table>

                    <tr>

                        <td class="mdl">TDI 01</td>

                        <td>Métier et formation</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 02</td>

                        <td>L’entreprise et son Environnement</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 03</td>

                        <td>Notions de Mathématiques Appliquées à l'informatique</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 04</td>

                        <td>Gestion du Temps</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 05</td>

                        <td>Veille Technologique</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 06</td>

                        <td>Production de Documents</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 07</td>

                        <td>Communication Interpersonnelle</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 08</td>

                        <td>Logiciels d’Application</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 09</td>

                        <td>Programmation Événementielle</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 10</td>

                        <td>Techniques de Programmation Structurée</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 11</td>

                        <td>Langage de Programmation Structurée</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 12</td>

                        <td>Programmation Orientée Objet</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 13</td>

                        <td>Conception et Modélisation d’un Système d’Information</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 14</td>

                        <td>Installation d’un Poste Informatique</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 15</td>

                        <td>Communication en Anglais dans un Contexte de Travail</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 16</td>

                        <td>Assistance Technique à la Clientèle</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 17</td>

                        <td>Soutien Technique en Milieu de Travail (Stage I)</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 18</td>

                        <td>Système de Gestion de Base de Données I</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 19</td>

                        <td>Analyse et Conception Orientée Objet</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 20</td>

                        <td>Programmation Client-Serveur</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 21</td>

                        <td>Déploiement d’Application</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 22</td>

                        <td>Introduction aux Réseaux Informatiques</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 23</td>

                        <td>Système de Gestion de base de Données II</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 24</td>

                        <td>Applications Hypermédias</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 25</td>

                        <td>Programmation de Sites Web Dynamiques</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 26</td>

                        <td>Initiation à la Gestion de Projets Informatiques</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 27</td>

                        <td>Projet de Conception de Fin d’Études</td>

                    </tr>

                    <tr class="clr">

                        <td class="mdl">TDI 28</td>

                        <td>Recherche d’Emploi</td>

                    </tr>

                    <tr>

                        <td class="mdl">TDI 29</td>

                        <td>Intégration au Milieu de Travail (Stage II)</td>

                    </tr>

                </table> --}}

                {{--  End Programme --}}

                @unless ($branche->Prespective_professionel == null)
                    <div class="share clr_Orange">
                        <h5 class="pfp">Perspectives Professionnelles</h5>
                        <ul>
                            @php
                                $perspectives = explode(';', $branche->Prespective_professionel);
                            @endphp
                            @foreach ($perspectives as $perspective)
                                <li><span>✦</span> {{ $perspective }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endunless


                <div class="share clr_Orange">

                    <h5 class="pfp">Pièces à Fournir</h5>
                </div>

                <ul>

                    <li><span>&#10022;</span> 01 Copies CIN Légalisées</li>

                    <li><span>&#10022;</span> 02 Copies d'attestation du baccalaureat Légalisées</li>

                    <li><span>&#10022;</span> 03 Extrait d'Acte de Naissance</li>

                    <li><span>&#10022;</span> 04 Photos</li>

                    <li><span>&#10022;</span> 05 Enveloppe a4.</li>

                    <li><span>&#10022;</span> 06 Enveloppes Timbrées.</li>

                    <li><span>&#10022;</span> 07 Réglement Intérieur légalisée <a
                            href="../../Documentations/Réglement-Intérieur.pdf" target="_blank">Télécharger ICI</a>
                    </li>
                </ul>

                {{-- stop  --}}
                <div class="share ntr clr_Orange">
                    <h5 id="ch">Procédure d'inscription pour les étrangères</h5>
                </div>
                <ul>
                    <li><span>&#10022;</span> les document à fournir pour les étrangères <a
                            href="../../Documentations/Pieces à Fournire(Etr).pdf" target="_blank">Télécharger ICI</a>
                    </li>
                    <li><span>&#10022;</span> les document à fournir pour les étrangères resident au Maroc(1er année) <a
                            href="../../Documentations/Pieces à Fournire(Etr au maroc-1er année).pdf"
                            target="_blank">Télécharger ICI</a></li>
                    <li><span>&#10022;</span> les document à fournir pour les étrangères resident au Maroc(2éme année)
                        <a href="../../Documentations/Pieces à Fournire(Etr au maroc-2em année).pdf"
                            target="_blank">Télécharger ICI</a>
                    </li>
                </ul>
                <div class="share ntr clr_Orange">
                    <h5 id="ch">Form d'Inscription</h5>
                </div>
                <form>
                    <div class="row" id="hidden">
                        <div class="lg-6 sm-6">
                            <input type="text" name="nom" placeholder="Nom" />
                            <span id="e1"></span>
                        </div>
                        <div class="lg-6 sm-6">
                            <input name="pre" placeholder="Prenom" />
                            <span id="e2"></span>
                        </div>
                        <div class="lg-6">
                            <input name="mail" placeholder="Email" />
                            <span id="e3"></span>
                        </div>
                        <div class="lg-3 sm-6">
                            <div class="sex" onClick=eSex('H')>
                                <label>Homme</label>
                                <input type="radio" name="sex" value="H" id="H" checked />
                            </div>
                        </div>
                        <div class="lg-3 sm-6">
                            <div class="sex" onClick=eSex('F')>
                                <label>Femme</label>
                                <input type="radio" name="sex" value="F" id="F" />
                            </div>
                        </div>
                        <div class="lg-6 sm-6">
                            <select name="type">
                                <option value="0">##Choisir le type de Parcours##</option>
                                <option value="1">Parcours présentielle</option>
                                <option value="2">Parcours à distance</option>
                            </select>
                            <span id="e4"></span>
                        </div>
                        <div class="lg-6 sm-6">
                            <input name="phone" placeholder="Tél ou Whatsapp 0660777382" />
                            <span id="e5"></span>
                        </div>
                        <div class="lg-3 mrgin"></div>
                        <div class="lg-3 mrgin"></div>
                        <div class="lg-3 mrgin"></div>
                        <div class="lg-3 btn">
                            <input type="button" onClick="eSend(this.form)" value="Inscrire" />
                        </div>
                    </div>
                    <div class="lg-12" id="display">
                        <h6>Paiment des frais d'inscription</h6>
                        <p>l'Ecole Polytechnique des génies met à votre disposition des méthodes de paiement flexibles
                            et en toute sécurité</p>
                        <p>
                            <span>&#10022;</span>
                            Paiement par <a>virement bancaire</a>
                            <span>➨</span>
                            <span id="Bnk">RIB : 127 270 2121190220820004 14</span>
                        </p>
                        <p>
                            <span>&#10022;</span>
                            Paiement en espèce chez <a>Ecole Polytechnique des génies</a>
                            <span>➨</span>
                            <span id="Lct">À côté de la pharmacie Bahja sur l'avenue Mhd 5, au-dessus du café El
                                Mamouniya <a
                                    href="https://www.google.com/maps/place/Competence+center/@34.0393799,-4.9997231,19z/data=!4m2!3m1!1s0xd9f8b383417e0f7:0xeb81d4430af1313e"
                                    target="_blank">Notre école sur Google Maps</a></span>
                        </p>
                    </div>
                </form>
            </div>

            <div class="lg-3 hide">
                <div class="sticky">
                    <div class="share clr_Orange">
                        <h5>Partager cet article</h5>
                    </div>
                    <div class="social">
                        <a
                            href="https://www.facebook.com/sharer.php?u=https://epg.ma/Diplome/technicienSpecialise/Technicien-Sp%C3%A9cialis%C3%A9-D%C3%A9veloppement-Informatique.php">
                            <img src="/Diplome/Pic/facebook.png" alt="" />
                        </a>
                        <a
                            href="https://api.whatsapp.com/send?text=https://epg.ma/Diplome/technicienSpecialise/Technicien-Sp%C3%A9cialis%C3%A9-D%C3%A9veloppement-Informatique.php">
                            <img src="/Diplome/Pic/whatsapp.png" alt="" />
                        </a>
                        <a
                            href="https://www.linkedin.com/shareArticle?url=https://epg.ma/Diplome/technicienSpecialise/Technicien-Sp%C3%A9cialis%C3%A9-D%C3%A9veloppement-Informatique.php">
                            <img src="/Diplome/Pic/linkedin.png" alt="" />
                        </a>
                        <a
                            href="https://twitter.com/share?url=https://epg.ma/Diplome/technicienSpecialise/Technicien-Sp%C3%A9cialis%C3%A9-D%C3%A9veloppement-Informatique.php">
                            <img src="/Diplome/Pic/twitter.png" alt="" />
                        </a>
                    </div>

                    <div class="share clr_Orange">
                        <h5>formations diplômantes</h5>
                    </div>
                    <div class="row">
                        <p class="ll2"><a class="ff1" href="/Diplome/technicien/">&#1421; Technicien
                                &#1421;</a></p>
                        <div class="lg-12 lg">
                            <a href="/Diplome/technicien/Technicien-Informatique.php" class="upd" target="_blank">
                                <div class="x_1 TLM tsd">
                                    <img src="/Diplome/Pic/no_Bac.png" alt="TECHNICIEN INFORMATIQUE (TI No BAC)" />

                                </div>
                                <h4 class="org tsd">&nbsp;TI&nbsp;</h4>
                            </a>
                        </div>
                        <p class="ll2"><a class="ff2"
                                href="/Diplome/technicienSpecialise/Technicien-Spécialisé-Développement-Informatique.php">&#1421;
                                Technicien Spécialisé &#1421;</a></p>
                        <div class="lg-12 lg">
                            <a href="/Diplome/technicienSpecialise/Technicien-Spécialisé-Développement-Informatique.php"
                                class="upd" target="_blank">
                                <div class="x_1 TLM tsd">
                                    <img src="/Diplome/Pic/bac_2.png"
                                        alt="Techniciens Spécialisés en Développement Informatique (TSDI BAC+2)" />
                                </div>
                                <h4 class="org tsd">TSDI</h4>
                            </a>
                        </div>
                        <p class="ll2"><a class="ff3" href="/Diplome/technicienSuperieur/">&#1421; Technicien
                                Superieur &#1421;</a></p>
                        <div class="lg-4 lg" id="f1">
                            <a href="/Diplome/technicienSuperieur/TECHNICIEN-SUPERIEUR-RESEAU-INFORMATIQUE.php"
                                target="_blank">
                                <div class="x_1 TLM cl_prl" id="nn">
                                    <img src="/Diplome/Pic/bac_2.png"
                                        alt="TECHNICIEN SUPÉRIEUR EN RESEAU INFORMATIQUE (TSRI)" />

                                </div>
                                <div class="x_2 SPP cl_prl" id="mm2"></div>
                                <h4 class="prp" id="m22">TSRI</h4>
                                <div class="x_2 ls SPP cl_prl" id="mm2"></div>
                            </a>
                        </div>

                        <div class="lg-4 lg">
                            <a href="/Diplome/technicienSuperieur/Technicien-Superieur-Développement-Informatique.php"
                                target="_blank">
                                <div class="x_1 TLM cl_prl" id="nn">
                                    <img src="/Diplome/Pic/bac_2.png"
                                        alt="TECHNICIEN SUPÉRIEUR EN DEVELOPPEMENT INFORMATIQUE (TSDI)" />
                                </div>
                                <div class="x_2 SPP cl_prl" id="mm2"></div>
                                <h4 class="prp" id="m22">TSDI</h4>
                                <div class="x_2 ls SPP cl_prl" id="mm2"></div>
                            </a>
                        </div>

                        <p class="ll2"><a class="ff4" href="/Diplome/licenceProfessionel/">&#1421; Licence
                                Professionel &#1421;</a></p>
                        <div class="lg-4 lg">
                            <a href="/Diplome/licenceProfessionel/Licence-Professionnelle-Ingenierie-Logiciels.php"
                                target="_blank">
                                <div class="x_1 TLM cl_prl">
                                    <img src="/Diplome/Pic/bac_3.png"
                                        alt="Licence Professionnelle Ingénierie Logiciels (LPIL)" />
                                </div>
                                <div class="x_2 SPP cl_prl"></div>
                                <h4 class="prp">LPIL</h4>
                                <div class="x_2 ls SPP cl_prl"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/licenceProfessionel/LICENCE-PROFESSIONNELLE-ADMINISTRATION-BASE-DONNEE-TECHNOLOGIES-WEB.php"
                                target="_blank">
                                <div class="x_1 TLM cl_prl">
                                    <img src="/Diplome/Pic/bac_3.png"
                                        alt="Licence Professionnelle Méthodes Informatiques Appliquées a la Gestion Des Entreprises (LPMIAGE)" />
                                </div>
                                <div class="x_2 SPP cl_prl"></div>
                                <h4 class="prp">LPABDTW</h4>
                                <div class="x_2 ls SPP cl_prl"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/licenceProfessionel/Licence-Professionnelle-Ingenierie-Systemes-Reseaux-et-Securite.php"
                                target="_blank">
                                <div class="x_1 TLM cl_prl">
                                    <img src="/Diplome/Pic/bac_3.png"
                                        alt="Licence Professionnelle Méthodes Informatiques Appliquées a la Gestion Des Entreprises (LPMIAGE)" />
                                </div>
                                <div class="x_2 SPP cl_prl"></div>
                                <h4 class="prp">LPISRS</h4>
                                <div class="x_2 ls SPP cl_prl"></div>
                            </a>
                        </div>
                        <p class="ll2"><a class="ff5" href="/Diplome/masterProfessionel/">&#1421; Master
                                Professionel &#1421;</a></p>

                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/Master-Professionnelle-Ingénierie-de-Conception-et-de-Développement-d'Applications.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="Master Professionnelle Ingénierie de Conception et de Développement d'Applications (MPICDA)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPICDA</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/Master-Professionnelle-Ingénierie-Systèmes-Réseaux-et-Sécurité.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="Master Professionnelle Ingénierie-Systèmes Réseaux et Sécurité (MPISRS)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPISRS</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/Master-Professionnelle-Méthodes-Informatiques-Appliquées-a-la-Gestion-des-Entreprises.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="Master Professionnelle Méthodes Informatiques Appliquées a la Gestion Des Entreprises (MPMIAGE)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPMIAGE</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/MASTER-PROFESSIONNEL-INFORMATIQUE-ET-INGENIERIE-DES-SYSTEMES-COMPLEXES-PARCOURS-INTELLIGENCE-ARTIFICIELLE-ET-ROBOTIQUE.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="MASTER PROFESSIONNEL INFORMATIQUE ET INGÉNIERIE DES SYSTÈMES COMPLEXES PARCOURS INTELLIGENCE ARTIFICIELLE ET ROBOTIQUE (MPISCPAR)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPISCPAR</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/MASTER-PROFESSIONNEL-INFORMATIQUE-INGÉNIERIE-SYSTÈMES-COMPLEXES-PARCOURS-DATA-SCIENCE-M-L.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="MASTER PROFESSIONNEL INFORMATIQUE ET INGÉNIERIE DES SYSTÈMES COMPLEXES PARCOURS DATA SCIENCE & MACHINE LEARNING (MPIISCPDSML)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPIISCPDSML</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                        <div class="lg-4 lg">
                            <a href="/Diplome/masterProfessionel/MASTER-PROFESSIONNEL-INFORMATIQUE-ET-INGENIERIE-DES-SYSTEMES-COMPLEXES-PARCOURS-DATA-SCIENCE-&-MACHINE-LEARNING.php"
                                target="_blank">
                                <div class="x_1 TLM cl_ble">
                                    <img src="/Diplome/Pic/bac_5.png"
                                        alt="MASTER PROFESSIONNEL INFORMATIQUE ET INGÉNIERIE DES SYSTÈMES COMPLEXES PARCOURS DATA SCIENCE & MACHINE LEARNING (MPISCPDSML)" />
                                </div>
                                <div class="x_2 SPP cl_ble"></div>
                                <h4 class="pik">MPISCPDSML</h4>
                                <div class="x_2 ls SPP cl_ble"></div>
                            </a>
                        </div>
                    </div>
                    <div class="share clr_Orange">
                        <h5>fiche d'établissement</h5>
                    </div>
                    <table>
                        <tr class="clr">
                            <td class="tab">École :</td>
                            <td>Ecole Plytechnique des Génies</td>
                        </tr>
                        <tr>
                            <td>Ville :</td>
                            <td>Fès</td>
                        </tr>
                        <tr class="clr">
                            <td>Tél :</td>
                            <td>06 60 77 73 82</td>
                        </tr>
                        <tr class="clr">
                            <td>Whatsapp</td>
                            <td>06 60 77 73 82</td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>contact@epg.ma</td>
                        </tr>
                        <tr class="clr">
                            <td>Adr :</td>
                            <td>
                                <a href="https://www.google.com/maps/place/Competence+center/@34.0393799,-4.9997231,19z/data=!4m2!3m1!1s0xd9f8b383417e0f7:0xeb81d4430af1313e"
                                    class="clr_Orange" target="_blank">
                                    (Notre école sur Google Maps)
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-Layout>
