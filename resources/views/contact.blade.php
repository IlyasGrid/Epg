<x-layout>
    <link rel="stylesheet" href="Index/service.css" />
    <link rel="stylesheet" href="Index/Biblo.css" />
    <section class="background-image">

        <style>
            .background-image {
                background-image: url('/Index/Img/Optimisation.jpg');
                background-repeat: no-repeat;
                background-size: cover;

            }

        </style>
        <div class="gradient"></div>
        <div id="slides">
            <div class="slide showing"></div>

            <div class="notice">
                <h5>Contactez nous !</h5>
                <h3>Notre équipe est prête à répondre à toutes vos attentes !</h3>
                <div class="discut">
                    <a href="tel:+212660777382" style="color: #fff;">(+212) 06 60 77 73 82 / (+212) 05 35 62 18
                        65</a>

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

    </section>

    <!-- Content -->
    <div class="container mt-5">
        <div class="content">
            <h2>Contactez nous </h2>
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
                        <input class="input" type="text" name="nom" placeholder="Votre nom" id="zo1" />
                        <div class="tret">
                            <i class="fa fa-exclamation" id="a"></i>
                            <span class="A" id="A"></span>
                        </div>
                    </div>
                    <div>
                        <input class="input" type="text" name="mail" placeholder="Adresse mail" id="zo2" />
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

    <section class="blog"></section>
    <script defer src="js/main2.js"></script>

</x-layout>
