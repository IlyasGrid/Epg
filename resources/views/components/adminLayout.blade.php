<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar with Dropdown</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="admin/style.css">
</head>

<body>
    {{-- <style>
        /* style.css */

        /* Body background color */
        body {
            background-color: #f8f9fa;
        }

        /* Navbar styles */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
            background-color: #6c757d;
        }

        .dropdown-menu {
            background-color: #343a40;
        }

        .dropdown-item {
            color: #ffffff;
        }

        .dropdown-item:hover {
            color: #ffffff;
            background-color: #6c757d;
        }

        /* Main container styles */
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        /* Page heading styles */
        h1 {
            color: #343a40;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        /* Form styles */
        .form-group label {
            color: #343a40;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        /* Footer styles */
        footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
        }


        body {
            background-color: #f2f2f2;
        }

        /* Navbar styles */
        .navbar {
            background-color: #333333;
            color: #ffffff;
        }

        /* Form background color */
        .form-container {
            padding: 2em;
            border-radius: 10px;
            width: fit-content;
            min-width: 66%;
            margin-left: 20%;
            margin-bottom: 5em;
            /* background-color: rgba(128, 128, 128, 0.120); */
            background-color: #ffffff;
            padding: 20px;
        }

        /* Card list background color */
        .card-list {
            background-color: #f7f7f7;
            padding: 20px;
        }

        .max-char {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 80%;
            /* Adjust the value as needed */
        }
    </style>

    <style>

        h2 {
            color: rgb(91, 3, 91);
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: xx-large;
            margin-bottom: 0.5em;
            text-align: center;
        }
    </style> --}}
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  pt-3 pb-3 navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Ecole polytechnique des Genies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/admin/langues" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Langues
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/admin/langues">show</a>
                        <a class="dropdown-item" href="/admin/langues/create">Create</a>
                        <a class="dropdown-item" href="/admin/langues/trashed">show deleted</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Diplome
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/admin/diplomes">show</a>
                        <a class="dropdown-item" href="/admin/diplomes/create">Create</a>
                        <a class="dropdown-item" href="/admin/diplomes/trashed">show deleted</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Service 1</a>
                        <a class="dropdown-item" href="#">Service 2</a>
                        <a class="dropdown-item" href="#">Service 3</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container mt-4 ">
        {{ $slot }}
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
