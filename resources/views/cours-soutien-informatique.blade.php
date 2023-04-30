<!DOCTYPE html>
<html lang="fr-MA">

<head>
    <!-- Titre -->
    <title>Cours de soutien Informatique : universitaire, stage ou PFE</title>
    <!-- Déscription : -->
    <meta name="description"
        content="Cours de Soutien en toutes matières informatique, à distance ou présentiel à FES, en groupe ou individuel. Soutien projet(PFE ou stage) et soutien universitaire" />

    <!-- Meta 1 : -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#007bff" />
    <meta charset="UTF-8" />
    <!-- Meta 2 : -->
    <meta name="robots" content="index" />
    <!-- Meta 3 : -->
    <meta property="og:title" content="Cours de soutien Informatique : universitaire, stage ou PFE" />
    <meta property="og:image" content="https://epg.ma/portail/favicon.ico" />
    <meta property="og:url" content="https://epg.ma/cours-soutien-informatique.php" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Cours de Soutien en toutes matières informatique, à distance ou présentiel à FES, en groupe ou individuel. Soutien projet(PFE ou stage) et soutien universitaire" />

    <!-- Link 1 : -->
    <link rel="canonical" href="https://epg.ma/cours-soutien-informatique.php" />

    <!-- Favicon -->
    <link rel="icon" href="/portail/favicon.ico" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/Biblo.css" />

    <!-- Font google -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Amaranth|Baloo+Bhai|Cookie|Yatra+One|Acme|Boogaloo|Lobster&display=swap" />

    <!-- Global site tag (gtag.js) - Google Ads: 740202360 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-740202360"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-740202360');
    </script>
    <script>
        gtag('config', 'AW-740202360/nsKlCL7H_KIBEPiu-uAC', {
            'phone_conversion_number': '0619086666'
        });
    </script>

    <!-- Event snippet for Inscription conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-740202360/aqE7CLDMm4wCEPiu-uAC'
        });
    </script>
    <script>
        gtag('event', 'page_view', {
            'send_to': 'AW-740202360',
            'value': 'replace with value',
            'items': [{
                'id': 'replace with value',
                'location_id': 'replace with value',
                'google_business_vertical': 'education'
            }]
        });
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '688607894649334');
        fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=688607894649334&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>
    <!-- Sliders -->
    <section>
        <div class="gradient"></div>
        <div id="slides">
            <!-- Header -->
            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
                integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
                crossorigin="anonymous" />
            <link rel="stylesheet" href="/Index/Biblo.css" />
            <!-- Nav Bar -->
            <style>
                .clignote {
                    color: #9ac1e3;
                    animation-duration: 2s;
                    animation-name: clignoter;
                    animation-iteration-count: infinite;
                    transition: none;
                    font-weight: bold;
                    font-size: 17px;
                    width: 450px;
                }

                @keyframes clignoter {
                    0% {
                        opacity: 1;
                    }

                    40% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
                }
            </style>
            @include('partials._contact-nav')

            @include('partials._social-media')
            <!-- Images Slides + Content -->
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
        <div class="triangle-up"></div>
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
                    <tr>
                        <th class="inclus" rowspan="3">En groupe</th>
                        <td>4</td>
                        <td rowspan="4">2h par semaine</td>
                        <td>200 Dh</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>300 Dh</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>400 Dh</td>
                    </tr>
                    <tr>
                        <th class="inclus">Individuel</th>
                        <td>1</td>
                        <td>800 Dh</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <section class="blog"></section>



    <footer class="contact">

        <div class="gradient"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="wrap">

                        <img src="Index/Img/border.png" alt="">

                    </div>

                </div>



                <div class="col-12 col-md-4 col-lg-4 test">

                    <h2>Contact info</h2>



                    <h5>Phone <span> : </span></h5>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        Whatsapp :

                        <a href="https://wa.me/+212660777382/">(+212) 06 60 77 73 82</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        Mobile :

                        <a href="tel:+212-660777382">(+212) 06 60 77 73 82</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        Fixe :

                        <a href="tel:+212-535621865">(+212) 05 35 62 18 65</a>

                    </div>



                    <h5>Adress <span> : </span></h5>

                    <div>

                        <a
                            href="https://www.google.com/maps/place/Competence+center/@34.0393799,-4.9997231,19z/data=!4m2!3m1!1s0xd9f8b383417e0f7:0xeb81d4430af1313e">22,
                            Rue Mohammed El Hayani, V.N Fès, 4éme Etage, Appt 20 Imm Hazzaz Fes - Maroc</a>

                    </div>



                    <h5>E-mail <span> : </span></h5>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="mailto:contact@epg.ma">contact@epg.ma</a>

                    </div>

                </div>



                <div class="col-12 col-md-4 col-lg-4 test">

                    <h2>Nos services</h2>

                    <h5>Packs <span> : </span></h5>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/création-sites-web.php">Création web</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/création-application-mobile.php">Création mobile</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/référencement-naturel-seo.php">référencement web</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/Location-de-salle-Fes.php">Location de salle</a>

                    </div>



                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/création-vidéo-motion.php">Création vidéo motion design</a>
                    </div>

                    <h5>Formations <span> : </span></h5>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/Diplome/">Diplômes</a>

                    </div>

                    <div>

                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/cours-soutien-informatique.php">Cours de soutiens</a>

                    </div>

                    <!--<div>

          <i class="fa fa-long-arrow-right"></i>

          <a href="/Certifications/Certificats.php">Certifications</a>

        </div>-->

                    <div>



                        <i class="fa fa-long-arrow-right"></i>

                        <a href="/Formations/formations.php">Formations</a>

                    </div>

                </div>

                <div class="col-12 col-md-4 col-lg-4 test">

                    <h2>A propos</h2>

                    <h5>Ecole polytechnique des génies <span> : </span></h5>

                    <p>

                        <i class="fa fa-quote-left"></i>

                        Nous sommes une société, entreprise et agence de services informatiques. Ainsi que une école,
                        établissement et centre de formations supérieur qui considéré le leader à Fès. En plus,
                        <span>Ecole polytechnique de génie</span> offre des cours de soutiens, des certifications qui
                        couvrent une large panoplie de domaines informatiques...

                        <a href="/A-propos.php"> plus</a>

                    </p>



                    <h5>réseaux sociaux <span> : </span></h5>

                    <div class="hbty" style="text-align: center;">

                        <a href="https://www.instagram.com/explore/locations/867954669911929/competence-center"
                            class="circle_fl fty">

                            <i class="fa fa-instagram"></i>

                        </a>

                        <a href="https://www.facebook.com/competencecenter.ma" class="circle_fl ftf">

                            <i class="fa fa-facebook"></i>

                        </a>

                        <a href="mailto:contact@epg.ma" class="circle_fl ftm">

                            <i class="fa fa-envelope"></i>

                        </a>





                        <a href="https://wa.me/+212660777382" class="circle_fl ftp">

                            <i class="fa fa-whatsapp"></i>

                        </a>



                    </div>

                </div>



                <div class="col-md-12 tert">

                    <img src="Index/Img/border.png" alt="">

                    <p>2013/2022 <span>Ecole polytechnique des génies</span> - Tous droits réservés</p>

                </div>

            </div>

        </div>

    </footer>

    <!-- ./Footer -->



    <!-- Font icon -->

    <script src="https://kit.fontawesome.com/873e4afb32.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>



    <script src="Index/Js.js"></script>
</body>

</html>
