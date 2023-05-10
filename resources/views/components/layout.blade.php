<!DOCTYPE html>
<html lang="fr-MA">

<head>
    <!-- Titre -->
    <title>Ecole Polytechnique des Génies - EPG ilas</title>
    <!-- Déscription : -->
    <meta name="description"
        content="Notre établissement supérieur offre des formations diplômantes reconnues, en présentiel à Fès ou à distance : Qualification, Technicien, TS, Licence et Master." />
    <script defer src="js/main2.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script defer src="https://kit.fontawesome.com/873e4afb32.js"  crossorigin="anonymous"></script>


    <!-- origin Stylesheet -->
    <link rel="stylesheet" href="/Diplome/metate.css" />
    <link rel="stylesheet" href="/Index/Biblo.css" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('partials._contact-nav')

    @include('partials._social-media')

    <section>
        {{-- <section style="min-height: 100vh"> --}}
        {{ $slot }}
    </section>


    <footer class="contact">
        <div class="xo"></div>
        @include('partials._footer')
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>



</html>
