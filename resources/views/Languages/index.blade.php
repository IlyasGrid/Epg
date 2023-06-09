<x-Layoutlangues>
    <style>
        button.btn {
            position: absolute;
            background-color: #97c9bd;
            border-radius: 16px;
            bottom: 1px;
            left: 65%;
            width: 100px;
        }

        .bee {
            position: relative;
            width: 100%;
            border: 2px solid blue;
        }

        .showing {
            background: url('../langues/Img/langues.jpg') no-repeat center;
            background-size: 100% 100%;
        }
    </style>
    <div class="langage showing"></div>

    <div class="notice">
        <h5>Formation professionnelle en communication !</h5>
        <h3>Vous voulez développer et améliorer vos connaissances et vos compétences de communication ?</h3>

        <div class="discut">
            <a href="tel:+212-619-086-666" style="color: #fff;">(+212) 06 19 08 66 66 / (+212) 05 35 62 18
                65</a>
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
                <span>Communication</span>
                en Langues Etrangères
            </h2>
        </div>

        <!-- Info -->
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <h4 class="packs">Maîtrise des langues étrangères</h4>
                    <p>
                        <i class="fa fa-quote-left"></i>
                        Les langues étrangères sont un véritable plus sur votre CV et dans votre vie. Si vous voulez
                        approfondir, développer et améliorer vos compétences et vos connaissances de la langue, de la
                        culture et de la littérature... Ecole Polytechnique des Genies donne à ses élèves la possibilité
                        de s’ouvrir à une diversité de cultures et de langues étrangères avec des prix très convenables,
                        plus avantageux et abordable.
                    </p>
                    @foreach ($langues as $langue)
                        <p>
                            <i class="fa fa-long-arrow-right"></i>
                            <a href="/Languages/{{ $langue->Name }}">langue <span
                                    style="text-transform: uppercase">{{ $langue->Name }}</span></a>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    @foreach ($langues as $langue)
                        <div class="col-sm-4 mt-2 mb-5">
                            <div class="bee">
                                <div class="about-img">
                                    <a href="{{ $langue->Name }}">
                                        <img class="w-48 mr-6 mb-6"
                                            src="{{ $langue->img ? asset('storage/' . $langue->img) : asset('/langues/img/langues.jpg') }}"
                                            alt="" />
                                        <button class="btn">Voir Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>




        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="bee">
                            <div class="about-img">
                                <a href="allemand"><img src="../langues/Img/allemand.jpg" alt="">
                                    <button class="btn">Voir Detail</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bee y">
                            <div class="about-img">
                                <a href="anglais"><img src="../langues/Img/anglais.jpg" alt="">
                                    <button class="btn">Voir Detail</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bee">
                            <div class="about-img">
                                <a href="francais"><img src="../langues/Img/français.jpg" alt="">
                                    <button class="btn">Voir Detail</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


    </div>

    <section class="blog"></section>


</x-Layoutlangues>
