<x-layout>
    <section id="zhr">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 zit">
                    <h2>FORMATION LES TECHNOLOGIES DU WEB <h4> SYNTHÈSE : </h4>
                    </h2>

                    <p>Vous découvrirez d'une manière simple et concrète les infrastructures et les technologies Web,
                        les standards et les outils disponibles pour développer des applications efficaces et
                        sécurisées. Vous comprendrez l'impact de l'introduction des nouvelles technologies telles que la
                        mobilité ou le commerce électronique.</p>

                    <h4>Objectifs pédagogiques :</h4>

                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i>Comprendre les concepts des technologies du Web
                        </li>
                        <li><i class="fa fa-chevron-circle-right"></i>Connaître les infrastructures et les services de
                            base d'Internet</li>
                        <li><i class="fa fa-chevron-circle-right"></i>Découvrir les nouvelles technologies côté client et
                            côté serveur</li>
                        <li><i class="fa fa-chevron-circle-right"></i>Connaître les nouvelles architectures et leur
                            sécurité</li>

                    </ul>
                </div>

                <div class="col-lg-6 sora">
                    <img src="../../../Pic/T5.png">
                </div>

            </div>
        </div>
    </section>

    <head>

        <script>
            function eInscrire(n) {
                mdl.style.display = "block";
                var dbut = document.getElementById('date_debut1').textContent,
                    dure = document.getElementById('dure' + n).textContent,
                    dt_us = new Date(Intl.DateTimeFormat('en-GB').format(new Date(dbut)));

                if (!dure.includes('jour')) {
                    dfin = Intl.DateTimeFormat('en-GB').format(new Date(dt_us.getFullYear(), dt_us.getMonth() + dure.substring(
                        0, 1) * 1));
                } else {
                    dfin = 'à déterminer';
                    dbut = 'à déterminer';
                }

                if (document.URL.includes("/Formation/")) {
                    nomformation = document.getElementById('zhr').children[0].children[0].children[0].children[0].textContent;
                } else nomformation = document.getElementById('zhr').children[0].children[0].children[1].children[0]
                .textContent;

                var data = {
                    fortn: nomformation,
                    price: document.getElementById('prix' + n).textContent,
                    dt_db: dbut,
                    types: document.getElementById('type' + n).textContent,
                    duree: dure,
                    packs: document.getElementById('pack' + n).textContent,
                    dt_fn: dfin,
                };
                sessionStorage.setItem('data', JSON.stringify(data));
                sessionStorage.setItem('prix', document.getElementById('prix0' + n).textContent);
            }
        </script>
    </head>
    <div class="sam">
        <h1>Tarification et déroulement</h1>
        <div class="popi">
            <div class="yaya oma">
                <h3 id="pack0">Formation Accélérée</h3>
                <p class="money">
                    <span id="prix0" class="ntr_spn mad">3000</span> DH &#x2248;
                    <span id="prix00" class="ntr_spn euro"></span> €
                </p>
                <ul>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Type de formation <span>:</span> </span>
                        <span id="type0" class="ntr_hr">Individuel</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Volume horaire <span>:</span> </span>
                        <span id="heur" class="ntr_hr">24</span> heures
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Début de la formation <span>:</span> </span>
                        Dans un délais de 24 h aprés la validation de votre inscription
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Horaire <span>:</span> </span>
                        Flexible selon votre disponibilité et la disponibilité de l'enseignant
                    </li>
                    <li class="mg_btm">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Répartition des heures de la formation <span>:</span> </span>
                        vous pouvez terminer dans un délais de <span id="dure0" class="ntr_hr">3 jour</span>s ou
                        bien répartir votre heures selon votre rythme, votre engagement
                    </li>
                </ul>
                <div class="dIns">
                    <button type="button" onClick=eInscrire('0') class="Ins">
                        <i class="fa fa-sign-in"></i>Inscrire
                    </button>
                </div>
            </div>



            <div class="yaya oma">
                <h3 id="pack2">Formation continue</h3>
                <p class="money">
                    <span id="prix2" class="ntr_spn mad">1000</span> DH/Mois &#x2248;
                    <span id="prix02" class="ntr_spn euro"></span> €
                </p>
                <ul>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Type de formation <span>:</span> </span>
                        <span id="type2" class="ntr_hr">Individuel</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Volume horaire <span>:</span> </span>
                        24 heures
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Durée de la formation <span>:</span> </span>
                        <span id="dure2" class="ntr_hr">3 mois</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Début de la formation <span>:</span></span>
                        Dans un délais de 24 h aprés la validation de votre inscription
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Déroulement <span>:</span> </span>Une séance de 2h par semaine
                    </li>
                    <li class="mg_btm">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Horaire <span>:</span> </span>À déterminer après la fin de votre
                        inscription
                    </li>
                </ul>
                <div class="dIns">
                    <button type="button" onClick=eInscrire('2') class="Ins">
                        <i class="fa fa-sign-in"></i>Inscrire
                    </button>
                </div>
            </div>
        </div>

        <div class="popi">
            <div class="yaya oma">
                <h3 id="pack3">Formation continue</h3>
                <p class="money">
                    <span id="prix3" class="ntr_spn mad">400</span> DH/Mois &#x2248;
                    <span id="prix03" class="ntr_spn euro"></span> €
                </p>
                <ul>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Type de formation <span>:</span> </span>
                        <span id="type3" class="ntr_hr">En groupe</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Volume horaire <span>:</span> </span>
                        24 heures
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Durée de la formation <span>:</span> </span>
                        <span id="dure3" class="ntr_hr">3 mois</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Début de la formation <span>:</span> </span>Le <span id="date_debut1"
                            class="ntr_hr"></span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Dernier délais d'inscription <span>:</span> </span>Le <span id="date_fin1"
                            class="ntr_hr"></span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Déroulement <span>:</span> </span>Une séance de 2h par semaine
                    </li>
                    <li class="mg_btm">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Horaire <span>:</span> </span>À déterminer après la fin de votre
                        inscription pour s'adapter aux emplois de temps des inscrits
                    </li>
                </ul>
                <div class="dIns">
                    <button type="button" onClick=eInscrire('3') class="Ins">
                        <i class="fa fa-sign-in"></i>Inscrire
                    </button>
                </div>
            </div>

            <div class="yaya oma">
                <h3 id="pack4">Formation continue Accélérée</h3>
                <p class="money">
                    <span id="prix4" class="ntr_spn mad">1000</span> DH/Mois &#x2248;
                    <span id="prix04" class="ntr_spn euro"></span> €
                </p>
                <ul>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Type de formation <span>:</span> </span>
                        <span id="type4" class="ntr_hr">En groupe</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Volume horaire <span>:</span> </span>
                        24 heures
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Durée de la formation <span>:</span> </span>
                        <span id="dure4" class="ntr_hr">1 mois</span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Début de la formation <span>:</span> </span>Le <span id="date_debut2"
                            class="ntr_hr"></span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Dernier délais d'inscription <span>:</span> </span>Le <span
                            id="date_fin2" class="ntr_hr"></span>
                    </li>
                    <li>
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Déroulement <span>:</span> </span>3 séances de 2h par semaine
                    </li>
                    <li class="mg_btm">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span class="khz">Horaire <span>:</span> </span>À déterminer après la fin de votre
                        inscription pour s'adapter aux emplois de temps des inscrits
                    </li>
                </ul>
                <div class="dIns">
                    <button type="button" onClick=eInscrire('4') class="Ins">
                        <i class="fa fa-sign-in"></i>Inscrire
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--page non inclus-->
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
                                <!--div class="col-lg-4 pdn ctr paye">
    <div id="paypal-button" class="brd_btn"></div>
   </div-->
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

    <section id="zin">
        <div class="container">

            <div>
                <h2 class="khalil">Programme de formation</h2>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="box">
                        <h4><span class="dec">1</span> LE SYSTÈME D'INFORMATION :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Rôle des applications intranet, Internet,
                                extranet dans le SI.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Nouvelle infrastructure. Evolution vers les
                                architectures n-tiers.</li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Evolution vers le Cloud
                                Computing.
                            </li>

                        </ul>
                    </div>

                    <div class="box">
                        <h4><span class="dec">2</span> FONCTIONNEMENT D'UNE INFRASTRUCTURE INTERNET : </h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Architecture. Protocoles IP, IPv6, GeoIP.
                                Adressage, ports applicatifs, DNS, routage. Qualité de service MPLS.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Impact du réseau sur les performances Web.
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Topologie du réseau :
                                fournisseurs d'accès. Opérateurs. Evolution vers les hauts débits : fibre optique FTTH.
                            </li>
                        </ul>
                    </div>

                    <div class="box">
                        <h4><span class="dec">3</span> LES SERVICES DE BASE :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Messagerie : MIME. Les protocoles (POP3,
                                IMAP4, SMTP). Le spam. Clients et serveurs de messagerie.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Annuaires : concept. Gestion des
                                utilisateurs, Whois, X.500. Protocole LDAP. LDIF. OpenLDAP, Domino. Critères de choix.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Moteurs de recherche : indexation,
                                référencement, analyse du trafic, liens sponsorisés (Criteo, AdWords).</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Outils collaboratifs : quels outils pour
                                quels besoins ? Portail, blog, wiki, bureautique en ligne...</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Réseaux sociaux d'entreprise, les espaces
                                collaboratifs, les CMS (SharePoint, Joomla, Drupal...).</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Multimédia sur IP : image, son, vidéo à la
                                demande, streaming. Diffusion multicast. IPTV. Protocole SIP, VoIP, H323.</li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Le commerce électronique :
                                principe. Les plateformes (Prestashop...). L’e-paiement.</li>

                        </ul>
                    </div>

                    <div class="box">
                        <h4><span class="dec">4</span> LA SÉCURITÉ :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les types d'attaques sur TCP/IP.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Services de sécurité : confidentialité,
                                authentification, intégrité, refus de service, non-répudiation.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Authentification : OAuth, Active Card, Secure
                                ID, biométrie... SSO, authentification Kerberos...</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Sécurité d'accès : le firewall, le proxy.
                                Architecture, la DMZ. Le filtrage de paquets, les routeurs filtrants, ACL.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Réseau privé virtuel : VPN. Fonctionnement
                                IPSEC, les protocoles sécurisés L2F, PPTP. Tunnel de sécurité, SSH.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Cryptographie : législation. Clé publique
                                (PKI/EGC), certificat, signature électronique, SSL. Le tiers de confiance.
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Obligations légales : CNIL,
                                normes ISO 2700x.
                            </li>
                        </ul>
                    </div>


                    <div class="box">
                        <h4><span class="dec">5</span> COMPRENDRE LE DIGITAL
                            :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Différence entre numérique et digital.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>e-réputation et publication Web.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Enjeux des données privées, règlementation
                                européenne.
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Impact du Time to Market sur
                                les risques pour l'entreprise.
                            </li>
                        </ul>
                    </div>



                </div>

                <div class="col-lg-6">
                    <div class="box">
                        <h4><span class="dec">6</span>TECHNOLOGIES CÔTÉ SERVEUR
                            :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les architectures n-tiers. Les approches
                                orientées composants.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>L'architecture Java EE (JSF, JPA, EJB,
                                JAX-RS...). Le framework Spring.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Le framework .NET et les frameworks associés
                                (NHibernate...).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>PHP, Zend Framework 2, Symfony 2.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Genèse du JavaScript côté serveur et de
                                Node.js. Le moteur Google V8.
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>L'accès aux données.
                            </li>

                        </ul>
                    </div>
                    <div class="box">
                        <h4><span class="dec">7</span> LES SERVEURS WEB ET LES SERVEURS D'APPLICATIONS
                            :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les serveurs : bases de données,
                                applications, Web. Leur positionnement par rapport à Internet.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>La répartition de charge et la haute
                                disponibilité, NginX. L'approche cluster.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les serveurs Web (Apache, IIS...). Serveurs
                                JavaScript NodeJS. Hébergeurs.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les serveurs d'applications. Service de
                                présentation, d'objets distribués, d'administration...
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>L'offre commerciale : IBM WebSphere, Oracle
                                Application Server...
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>L'offre Open Source : Tomcat,
                                JBoss WildFly, GlassFish...
                            </li>

                        </ul>
                    </div>
                    <div class="box">
                        <h4><span class="dec">8</span>LES ARCHITECTURES DISTRIBUÉES ET LES WEB SERVICES
                            :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les standards (SOAP, WSDL, UDDI, BPML, BPEL),
                                mise en œuvre.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les services Web SOAP et REST. La connexion
                                des Web Services aux applications existantes.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les architectures SOA. Spécificités. Panorama
                                des autres technologies.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les plateformes de Cloud Computing : IaaS,
                                PASS, SaaS (Amazon Web Services, Azure...).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Le Big Data et le NoSQL (Hadoop, Cloudera,
                                MongoDB, Cassandra).
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>La virtualisation des
                                ressources.
                            </li>

                        </ul>
                    </div>
                    <div class="box">
                        <h4><span class="dec">9</span>MOBILITÉ :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les PAN et les normes WI-FI, Wimax,
                                Bluetooth. Réseaux LAN, Wireless Wan, boucle radio.</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Technologies en environnement cellulaire :
                                réseaux haut débit. 3G, 4G. La VoIP sur LTE (VoLTE).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Réseaux haut débit. Réseaux privés sans fil.
                                IP en environnement mobile. Terminaux nomades. La sécurité.
                            </li>
                            </li>
                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Les objets connectés. Les
                                réseaux bas débit de l'IoT : SigFox, LoRa...</li>
                        </ul>
                    </div>

                    <div class="box">
                        <h4><span class="dec">10</span> TECHNOLOGIES CÔTÉ CLIENT
                            :</h4>
                        <ul>
                            <li><i class="fa fa-chevron-circle-right"></i>Les navigateurs, leurs impacts. Les plug-ins.
                                Les URI, le protocole HTTP.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les langages HTML5, CSS3 et JavaScript. Les
                                apports d'EcmaScript 6.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les API JavaScript HTML 5 (gestion de la
                                persistance, accès aux ressources des terminaux...).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les frameworks JavaScript (AngularJS,
                                jQuery...).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les spécificités des terminaux mobiles et des
                                tablettes : taille écran, capacité mémoire, OS...
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Impact des terminaux mobiles, tablettes,
                                ordinateurs sur les interfaces Web : le Responsive et le Material Design.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les technologies d'industrialisation du Front
                                End (Grunt, Bower, Yeoman, Jasmine...).
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Le langage XML, les XML Schema. Les parseurs.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les interfaces graphiques XML : SVG, XAML.
                                Définition des interfaces Android via XML.
                            </li>
                            <li><i class="fa fa-chevron-circle-right"></i>Les interfaces riches et leur ergonomie :
                                Java FX8, QT, Flash.
                            </li>

                            <li class="hbt"><i class="fa fa-chevron-circle-right"></i>Les traitements XSLT. La
                                publication avec XSL-FO. Les services Web.
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- -------------------------------------- NIHAYA DYAL CONTENT -------------------------------------- -->

    <!-- -------------------------------------- BIDAYA DYAL DECORE -------------------------------------- -->

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

    <!-- -------------------------------------- NIHAYA DYAL DECORE -------------------------------------- -->



    <!-- -------------------------------------- BIDAYA DYAL CONTACT -------------------------------------- -->
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
    <!-- -------------------------------------- NIHAYA DYAL CONTACT -------------------------------------- -->

    <!-- -------------------------------------- BIDAYA DYAL FOOTER -------------------------------------- -->

    <section class="blog"></section>



</x-layout>
