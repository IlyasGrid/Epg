<div class="bg-dark text-white py-2" id="hidden-nav" style="z-index: 9; position: absolute; width:100%">
    <div class="container">
        <ul>
            <li>
                <i class="fa fa-phone-alt" style="color: green;padding-right: 10px; font-size: 18px;z-index: 1;"
                    aria-hidden="true"></i>
                <a href="tel:+212535621865" target="blank">(+212) 05 35 62 18 65</a>
            </li>
            <li>
                <i class="fa fa-mobile" style="color: green;padding-right: 10px; font-size: 18px;z-index: 1;"
                    aria-hidden="true"></i>
                <a href="tel:+2126660777382" target="blank">(+212) 06 60 77 73 82</a>
            </li>
            <li>
                <i class="fab fa-whatsapp" style="color: green;padding-right: 6px; font-size: 20px;" aria-hidden="true">
                </i>
                <a href="https://wa.me/+212660777382" target="blank">(+212) 06 60 77 73 82</a>
            </li>
        </ul>
    </div>
</div>
<nav id="nav" class="navbar navbar-expand-lg navbar-light scrolled">
    <a class="navbar-brand bold font-2" style="color: rgb(231 113 35 / 95%); font-size:1.2em;" href="/index.php">
        Ecole Polytechnique des Génies
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="menuList">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item btn-group">


                <a class="nav-link" href="/services.php" id="navbarDropdown" role="button">Services</a>
                <a type="button"
                    class="btn dropdown-toggle dropdown-toggle-split d-flex align-items-center justify-content-center"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="more">Plus </span><span class="sr-only">Toggle Dropdown</span>
                </a>

                <div class="dropdown-menu" id="navDrop" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/création-sites-web.php">Création web</a>
                    <a class="dropdown-item" href="/création-application-mobile.php">Création mobile</a>
                    <a class="dropdown-item" href="/référencement-naturel-seo.php">Référencement web</a>
                    <a class="dropdown-item" href="/création-vidéo-motion.php">Création vidéo motion design</a>
                </div>
            </li>
            <li class="nav-item btn-group">
                <a class="nav-link" href="/Diplomes/" id="navbarDropdown" role="button">Diplôme</a>
                <a type="button"
                    class="btn dropdown-toggle dropdown-toggle-split d-flex align-items-center justify-content-center"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="more">Plus </span><span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu" id="navDrop" aria-labelledby="navbarDropdown">
                    @foreach ($diplomes as $diplome)
                        <a class="dropdown-item text-capitalize"
                            href="/Diplomes/{{ $diplome->Name }}/">{{ $diplome->Name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item btn-group">
                <a class="nav-link" href="/Formations\" id="navbarDropdown" role="button">Formations</a>

                <a type="button"
                    class="btn dropdown-toggle dropdown-toggle-split d-flex align-items-center justify-content-center"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="more">Plus </span><span class="sr-only">Toggle Dropdown</span>

                </a>
                <div class="dropdown-menu" id="navDrop" aria-labelledby="navbarDropdown">

                    @foreach ($categories as $categorie)
                        <a class="dropdown-item text-capitalize"
                            href="/Formations/{{ $categorie->Name }}/">{{ $categorie->Name }}</a>
                    @endforeach

                </div>
            </li>
            <li class="nav-item btn-group">
                <a class="nav-link" href="/Languages/" id="navbarDropdown" role="button">Langues</a>
                <a type="button"
                    class="btn dropdown-toggle dropdown-toggle-split d-flex align-items-center justify-content-center"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="more">Plus </span><span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu" id="navDrop" aria-labelledby="navbarDropdown">
                    @foreach ($langues as $langue)
                        <a class="dropdown-item" href="/Languages/{{ $langue->Name }}"><span
                                style="text-transform: uppercase">{{ $langue->Name }}</span></a>
                    @endforeach
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/cours-soutien-informatique.php">Soutien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/A-propos.php">&#192; propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.php">contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="color:red" href="/Bourse.php">منحة دراسية</a>
            </li>
        </ul>
    </div>
</nav>
