<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Titre -->
    <title>Contacter nous | Ecole polytechnique des Génies</title>
    <!-- Déscription : -->
    <meta name="description"
        content="Notre centre de relation clientèle est à votre disposition 24h/24 et 7j/7 et prête pour répondre à toutes vos attentes" />

    <!-- Meta 1 : -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#007bff" />
    <meta charset="UTF-8" />
    <!-- Meta 2 : -->
    <meta name="robots" content="index" />
    <!-- Meta 3 : -->
    <meta property="og:title" content="Contacter nous | Ecole polytechnique des Génies" />
    <meta property="og:image" content="https://epg.ma/portail/favicon.ico" />
    <meta property="og:url" content="https://epg.ma/" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Notre centre de relation clientèle est à votre disposition 24h/24 et 7j/7 et prête pour répondre à toutes vos attentes" />

    <!-- Link 1 : -->
    <link rel="canonical" href="https://epg.ma/contact.php" />

    <!-- Favicon -->
    <link rel="icon" href="/portail/favicon.ico" />


    <!-- origin Stylesheet -->
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/Biblo.css" />


    <!-- Global site tag (gtag.js) - Google Ads: 740202360 -->
   

   
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
            <div class="slide showing"></div>

            <div class="notice">
                <h5>Contactez nous !</h5>
                <h3>Notre équipe est prête à répondre à toutes vos attentes !</h3>
                <div class="discut">
                    <a href="tel:+212660777382" style="color: #fff;">(+212) 06 60 77 73 82 / (+212) 05 35 62 18 65</a>

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
            <h2>Contactez nous</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 coco">
                <img src="Index/Img/form.png" alt="">
                <h5>En ligne</h5>
                <p>Nous vous invitons à remplir notre formulaire si vous avez des questions</p>
                <a href="#zo1">Envoyer un e-mail</a>
            </div>
            <div class="col-lg-4 coco">
                <img src="Index/Img/map.png" alt="">
                <h5>Dans notre agence</h5>
                <p>A tout moment une équipe de professionnels est à votre écoute</p>
                <a
                    href="https://www.google.com/maps/place/Competence+center/@34.0393799,-4.9997231,19z/data=!4m2!3m1!1s0xd9f8b383417e0f7:0xeb81d4430af1313e">Trouver
                    nous</a>
            </div>
            <div class="col-lg-4 coco">
                <img src="Index/Img/phone.png" alt="">
                <h5>Par téléphone</h5>
                <p>Notre centre de relation clientèle est à votre disposition 24h/24 et 7j/7</p>
                <a href="tel:+212-660-777-382">06 60 77 73 82</a>
                <a href="tel:+212-532-100-009">05 35 62 18 65</a>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 coco">
                <img src="Index/Img/mail.png" alt="">
                <h5>Par e-mail</h5>
                <p>Le support technique par e-mail est disponible 24H par jour</p>
                <a href="mailto:contact@epg.ma">contact@epg.ma</a>
            </div>
            <div class="col-lg-4 coco">
                <img src="Index/Img/media.png" alt="">
                <h5>réseaux sociaux</h5>
                <p>Trouvez vos réponses à vos questions sur nos réseaux sociaux</p>
                <a href="https://www.facebook.com/competencecenter.ma" class="fb">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://wa.me/+212619086666/" class="whatsapp">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>
            <div class="col-lg-2"></div>
        </div>

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

            <script>
                var nom = document.getElementById('zo1');
                var mail = document.getElementById('zo2');
                var phone = document.getElementById('zo3');
                var msg = document.getElementById('zo4');


                function myFunc() {
                    var tst = true;
                    if (nom.value == "") {
                        nom.style.border = "1px solid red";
                        document.getElementById('a').style.display = "block";
                        document.getElementById('A').innerHTML = "Veuillez remplir ce champ";
                        tst = false;
                    } else {
                        nom.style.border = "1px solid rgb(255, 102, 0)";
                        document.getElementById('a').style.display = "none";
                        document.getElementById('A').innerHTML = "";
                    }

                    if (mail.value == "") {
                        mail.style.border = "1px solid red";
                        document.getElementById('b').style.display = "block";
                        document.getElementById('B').innerHTML = "Veuillez remplir ce champ";
                        tst = false;
                    } else {
                        mail.style.border = "1px solid rgb(255, 102, 0)";
                        document.getElementById('b').style.display = "none";
                        document.getElementById('B').innerHTML = "";
                    }

                    if (phone.value == "") {
                        phone.style.border = "1px solid red";
                        document.getElementById('c').style.display = "block";
                        document.getElementById('C').innerHTML = "Veuillez remplir ce champ";
                        tst = false;
                    } else {
                        phone.style.border = "1px solid rgb(255, 102, 0)";
                        document.getElementById('c').style.display = "none";
                        document.getElementById('C').innerHTML = "";
                    }

                    if (msg.value == "") {
                        msg.style.border = "1px solid red";
                        document.getElementById('d').style.display = "block";
                        document.getElementById('D').innerHTML = "Veuillez remplir ce champ";
                        tst = false;
                    } else {
                        msg.style.border = "1px solid rgb(255, 102, 0)";
                        document.getElementById('d').style.display = "none";
                        document.getElementById('D').innerHTML = "";
                    }
                    if (tst) {
                        var xmlhttp = new XMLHttpRequest();

                        xmlhttp.onreadystatechange = function() {
                            show();
                        };

                        xmlhttp.open("GET", "Index/send.php?nom=" + nom.value + "&mail=" + mail.value + "&phone=" + phone.value +
                            "&msg=" + msg.value, true);
                        xmlhttp.send();
                    }
                }

                function show() {
                    $('#myModal').modal('show');
                    setTimeout("stop()", 2000);
                }

                function stop() {
                    $('#myModal').modal('hide');

                    nom.value = "";
                    mail.value = "";
                    phone.value = "";
                    msg.value = "";
                }
            </script>
            <!-- Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ecole polytechnique des Génies</h4>
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

    <!-- Footer -->
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

                        <a href="/Formation/formations.php">Formations</a>

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


    <script src="https://kit.fontawesome.com/873e4afb32.js" crossorigin="anonymous"></script>

</body>

</html>
