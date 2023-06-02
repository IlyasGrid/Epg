<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="/admin/style2.css">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/admin/img/favicon.png" />
    <title>Ecole Polytechnique des Génies</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script defer src="https://kit.fontawesome.com/6f820981e1.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/admin/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script defer src="/admin/main.js"></script>

</head>

<body class="g-sidenav-show bg-gray-100">
    <style>
        .icon-sm i {
            top: 2px;
            font-size: 1.5rem;
        }
        .sidenav-header{
            height: fit-content;
        }

        hr.horizontal.dark {
            background-image: linear-gradient(to right,
                    rgb(1 1 1 / 50%),
                    rgb(1 1 1),
                    rgb(1 1 1 / 30%));
        }

        .navbar-vertical.navbar-expand-xs {
            width: fit-content !important;
        }

        .navbar-vertical .navbar-nav .nav-item .nav-link .icon i {
            color: #000000;
        }

        .nav-link-text,
        .header {
            color: black;
            font-family: inherit;
            font-size: medium;
        }

        .header {
            font-size: larger;
        }

        .sidenav .navbar-brand {
            padding: 2rem 1rem;
        }
    </style>
    <aside style="background-color: #ffffff; margin: 0 ; border-left: black"
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start ps ps--active-y" id="sidenav-main">
        <div class="sidenav-header mb-5">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/" target="_blank">
                <span class="header font-weight-bold text-wrap ">Ecole Polytechnique des Génies
                </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0" />
        @if (
            !in_array(request()->route()->getName(),
                ['register', 'login']))
            <div class="collapse navbar-collapse w-auto" style="height: fit-content" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">
                            <!-- to set active add "active" to class -->
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>dashboard</title>
                                <i class="fas fa-house-user"></i>
                            </div>

                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/langues">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>langue</title>
                                <i class="fa-solid fa-language"></i>
                            </div>
                            <span class="nav-link-text ms-1">langues</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/diplomes">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>diplome</title>
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <span class="nav-link-text ms-1">diplome</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/categories">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>formation</title>
                                <i class="fa-sharp fa-solid fa-spell-check"></i>
                            </div>
                            <span class="nav-link-text ms-1">formation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/soutien">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>soutien</title>

                                <i class="fa-solid fa-handshake-angle"></i>
                            </div>
                            <span class="nav-link-text ms-1">soutien</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/bourse">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>bource</title>

                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <span class="nav-link-text ms-1">bource</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"
                            style="color: rgb(0, 0, 0)">
                            Admin settings
                        </h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/profile.html">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>Profile</title>

                                <i class="fa-solid fa-user"></i>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">

                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <title>logout</title>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                            <span class="nav-link-text ms-1">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </aside>
    <main class="main-content position-relative  border-radius-lg">
        {{ $slot }}
    </main>



    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/admin/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
