<x-Layout>
    <link rel="stylesheet" href="/Formation/formStyle.css">
    <link rel="stylesheet" href="/formation/style.css">

    <section id="zhr" class="mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 zit">
                    <h2>FORMATION "{{ $formation->Name }}" <h4> {{ $formation->MotivaionName }} : </h4>
                    </h2>

                    <p>{{ $formation->MotivaionBody }}</p>

                    @unless ($formation->objectifs == null)


                        <h4>Objectifs pédagogiques :</h4>
                        @php
                            $objectifs = explode(';', $formation->objectifs);
                        @endphp
                        <ul>
                            @foreach ($objectifs as $objectif)
                                <li>
                                    <i class="fa fa-chevron-circle-right"></i>
                                    {{ $objectif }}
                                </li>
                            @endforeach

                            @unless ($formation->tp == null)
                                <p><span>Tp :</span> {{ $formation->tp }} </p>
                            @endunless
                        </ul>
                    @endunless
                </div>

                <div class="col-lg-6 sora">
                    <img class="w-48 mr-6 mb-6"
                    src="{{$formation->logo ? asset('storage/' . $formation->logo) : asset('/formation/img/default2.png')}}" alt="" />
                </div>

            </div>
        </div>
    </section>

    @unless (count($formation->tarifs) < 1)
        <div class="sam">
            <h1>Tarification et déroulement</h1>
            <div class="popi " style="margin: 0 15%;">
                @foreach ($formation->tarifs as $tarif)
                    <div class="yaya oma" style="margin: 3em;">
                        <h3 id="pack0">{{ $tarif->Name }}</h3>
                        <p class="money">
                            <span id="prix0" class="ntr_spn mad">{{ $tarif->Price }}</span> DH &#x2248;
                            <span id="prix00" class="ntr_spn euro"></span> €
                        </p>
                        <ul class="mb-5">
                            <li>
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="khz">Type de formation <span>:</span> </span>
                                <span id="type0" class="ntr_hr">{{ $tarif->Type }}</span>
                            </li>
                            <li>
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="khz">Volume horaire <span>:</span> </span>
                                <span id="heur" class="ntr_hr">{{ $tarif->Volume_Horraire }}</span> heures
                            </li>
                            @unless ($tarif->Duree_formation == null)
                                <li>
                                    <i class="fa fa-chevron-circle-right"></i>
                                    <span class="khz">Duree de la formation <span>:</span> </span>
                                    <span id="heur" class="ntr_hr">{{ $tarif->Duree_formation }}</span>
                                </li>
                            @endunless

                            <li>
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="khz">Début de la formation <span>:</span> </span>
                                {{ $tarif->Debut_formation }}
                            </li>
                            @unless ($tarif->Deroulement == null)
                                <li>
                                    <i class="fa fa-chevron-circle-right"></i>
                                    <span class="khz">Deroulement <span>:</span> </span>
                                    <span id="heur" class="ntr_hr">{{ $tarif->Deroulement }}</span>
                                </li>
                            @endunless

                            <li>
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="khz">Horaire <span>:</span> </span>
                                {{ $tarif->Horraire }}
                            </li>

                            @unless ($tarif->Dernier_Delais_Inscription == null)
                                <li>
                                    <i class="fa fa-chevron-circle-right"></i>
                                    <span class="khz">Dernier delais d'inscription <span>:</span> </span>
                                    <span id="heur" class="ntr_hr">{{ $tarif->Dernier_Delais_Inscription }}</span>
                                </li>
                            @endunless

                            @unless ($tarif->repartition_heures == null)
                                <li class="mg_btm">
                                    <i class="fa fa-chevron-circle-right"></i>
                                    <span class="khz">Répartition des heures de la formation <span>:</span> </span>
                                    {{ $tarif->repartition_heures }}
                                </li>
                            @endunless
                        </ul>
                        <div class="dIns mt-3">
                            <button type="button" onClick=eInscrire(0) class="Ins">
                                <i class="fa fa-sign-in"></i>Inscrire
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    @endunless

    <section class="md_modal" id="myModal">
        <div class="container md_cotn">
            <div class="row md_cnt">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 Quiz">
                    <div class="md-close">
                        <span class="close" onClick=eClose()>&times;</span>
                    </div>
                    <form id="hidden">
                        <h3>Formulaire d'inscription au Ecole Polytechnique des Génies</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="nom" placeholder="Votre nom" />
                                <span id="e1"></span>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="prenom" placeholder="Votre prenom" />
                                <span id="e2"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="mail" placeholder="Votre e-mail" />
                                <span id="e3"></span>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="phone" placeholder="Numéro de tél ou whatsapp" />
                                <span id="e5"></span>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="sex" onClick="eSex('H')">
                                    <label>Homme</label>
                                    <input type="radio" name="sex" value="H" id="H" checked />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sx">
                                <div class="sex" onClick="eSex('F')">
                                    <label>Femme</label>
                                    <input type="radio" name="sex" value="F" id="F" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <select name="type">
                                    <option value="0">##Choisir le type de formation##</option>
                                    <option value="1">Formation présentielle</option>
                                    <option value="2">Formation à distance</option>
                                </select>
                                <span id="e6"></span>
                            </div>
                            <div class="col-lg-3">
                                <button type="button" onClick="funcInsc(this.form)">
                                    <i class="fa fa-sign-in"></i>Inscrire
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="row display" id="display">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 pdn_nw">
                            <div class="row mg">
                                <div class="col-lg-6 ctr paye">
                                    <div class="brd_btn ylw_btn" onClick=eShow()>
                                        <img src="/Formation/Pic/pay.png" alt="" />
                                        <span>Virement Bancaire</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 ctr paye">
                                    <a href="https://www.google.com/maps/place/Competence+center/@34.0393799,-4.9997231,19z/data=!4m2!3m1!1s0xd9f8b383417e0f7:0xeb81d4430af1313e"
                                        target="_blank">
                                        <div class="brd_btn gren_btn">
                                            <img src="/Formation/Pic/travel.png" alt="" />
                                            <span>En espèce</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <h3>Comment dois-je faire pour payer les frais d'inscription</h3>
                            <p>Competence Center met à votre disposition des méthodes de paiement flexibles et en toute
                                sécurité</p>

                            <p><span class="mrg">➨ </span>Paiement par <span>virement bancaire</span> <span
                                    id="rib">(RIB : 127270212119022082000414)</span>.</p>
                            <p><span class="mrg">➨ </span>Paiement en <span>cash </span>chez notre centre<span
                                    color="green"> (À côté de la pharmacie Bahja sur l'avenue Mhd 5, au-dessus du café
                                    El Mamouniya)</span>.</p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    @unless (count($formation->programmes) < 1)
        <section id="zin">
            <div class="container">

                <div>
                    <h2 class="khalil">Programme de formation</h2>
                </div>

                <div class="row">

                    @foreach ($formation->programmes as $programme)
                        <div class="col-lg-6">
                            <div class="box">
                                <h4><span class="dec">1</span> {{ $programme->ModuleName }} :</h4>
                                @php
                                    $chapitres = explode(';', $programme->ModuleChapitre);
                                @endphp
                                <ul>
                                    @foreach ($chapitres as $chapitre)
                                        <li><i class="fa fa-chevron-circle-right"></i>{{ $chapitre }}</li>
                                    @endforeach


                                </ul>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endunless
    <section class="bgc">
        <div class="comp">

            <div>
                <h2 class="khalil">Notre priorité</h2>
            </div>

            <div class="zid">

                <!-- FORMATION FLEXIBLE -->
                <div class="col-sm-6 col-lg-3 pik">
                    <div class="ikh">
                        <div class="mok">
                            <div class="tfo">
                                <div class="rsm"><i class="fa fa-star" aria-hidden="true"></i></div>
                            </div>
                            <h4 class="nss1">Formation flexible</h4>
                            <p class="nss2">Vous souhaitez actualiser vos connaissances ou acquérir un diplôme ?
                                Choisissez parmi les différentes formations en informatique le cours qui vous convient,
                                à vos rythme, tout au long de vos formation.</p>
                        </div>
                    </div>
                </div>

                <!-- QUALITÉS REQUISES -->
                <div class="col-sm-6 col-lg-3 pik">
                    <div class="ikh">
                        <div class="mok">
                            <div class="tfo">
                                <div class="rsm"><i class="fa fa-certificate" aria-hidden="true"></i></div>
                            </div>
                            <h4 class="nss1">Qualités requises</h4>
                            <p class="nss2">L’informatique est un outil majeur de stratégie et de compétitivité. Il
                                est devenu indispensable aux entreprises et au grand public... Profitez des conseils
                                avec nous pour bien maîtriser l’informatique.</p>
                        </div>
                    </div>
                </div>

                <!-- FORMATION À DISTANCE -->
                <div class="col-sm-6 col-lg-3 pik">
                    <div class="ikh">
                        <div class="mok">
                            <div class="tfo">
                                <div class="rsm"><i class="fa fa-weixin" aria-hidden="true"></i></div>
                            </div>
                            <h4 class="nss1">Formation à distance</h4>
                            <p class="nss2">Il est possible de devenir webmaster, webdesigner ou référenceur...
                                Profitez avec notre centre des formations diplômantes et certifiantes à distance pour
                                s’orienter aux métiers du web.</p>
                        </div>
                    </div>
                </div>

                <!-- PRIX COMPÉTITIFS -->
                <div class="col-sm-6 col-lg-3 pik">
                    <div class="ikh">
                        <div class="mok">
                            <div class="tfo">
                                <div class="rsm"><i class="fa fa-money " aria-hidden="true"></i></div>
                            </div>
                            <h4 class="nss1">prix compétitifs</h4>
                            <p class="nss2">Depuis la création de notre centre, nous ne cessons de développer nos
                                connaissances pour assurer de formation performante avec un prix abordable, raisonnable
                                et particulièrement avantageux.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form name="send" method="GET" margin="25px 0">
                    <div>
                        <input class="input" type="text" name="nom" placeholder="Votre nom"
                            id="zo1" />
                        <div class="tret">
                            <i class="fa fa-exclamation" id="a"></i>
                            <span class="A" id="A"></span>
                        </div>
                    </div>
                    <div>
                        <input class="input" type="text" name="mail" placeholder="Adresse mail"
                            id="zo2" />
                        <div class="tret">
                            <i class="fa fa-exclamation" id="b"></i>
                            <span class="B" id="B"></span>
                        </div>
                    </div>
                    <div>
                        <input class="input" type="text" name="phone" placeholder="Numéro de téléphone"
                            id="zo3" />
                        <div class="tret">
                            <i class="fa fa-exclamation" id="c"></i>
                            <span class="C" id="C"></span>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <textarea class="textarea" name="msg" placeholder="Tapez votre message ici..." id="zo4"></textarea>
                <div class="tret">
                    <i class="fa fa-exclamation" id="d"></i>
                    <span class="D" id="D"></span>
                </div>
            </div>
            <div class="col-lg-5"></div>
            <div class="col-lg-5"></div>
            <div class="col-lg-2">
                <input class="input" type="button" value="Envoyer" onclick="myFunc()" />
            </div>


            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ecole Polytechnique des Génies</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <p>Votre message a été envoyé avec succès</p>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <section class="blog"></section>



</x-Layout>
