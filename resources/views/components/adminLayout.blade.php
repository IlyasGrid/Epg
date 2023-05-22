{{-- @props(['isAdminAuthenticated']) --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/style.css">
    <script defer src="/admin/main.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  pt-3 pb-3 navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Ecole polytechnique des Genies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (
            !in_array(request()->route()->getName(),
                ['register', 'login']))
            <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNavDropdown">

                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/dashboard">Home <span class="sr-only">(current)</span></a>
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
                        <a class="nav-link dropdown-toggle" href="/admin/diplomes" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Diplomes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/admin/diplomes">show</a>
                            <a class="dropdown-item" href="/admin/diplomes/create">Create</a>
                            <a class="dropdown-item" href="/admin/diplomes/trashed">show deleted</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/admin/categories" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/admin/categories">show</a>
                            <a class="dropdown-item" href="/admin/categories/create">Create</a>
                            <a class="dropdown-item" href="/admin/categories/trashed">show deleted</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/admin/soutien" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Soutien </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/admin/soutien">show</a>
                            <a class="dropdown-item" href="/admin/soutien/create">Create</a>
                            <a class="dropdown-item" href="/admin/soutien/trashed">show deleted</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/admin/bourse"    aria-haspopup="true" aria-expanded="false">Bourse </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/admin/bourse">show</a>
                            <a class="dropdown-item" href="/admin/bourse/create">Create</a>
                            <a class="dropdown-item" href="/admin/bourse/trashed">show deleted</a>
                        </div> --}}
                    </li>
                </ul>

            </div>
            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-light" type="submit">Logout</button>
                </form>
            </div>
        @endif
    </nav>
    <main class="container mt-4 ">

        {{ $slot }}


    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
