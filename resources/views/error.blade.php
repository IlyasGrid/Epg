<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Not Found</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/error404/style.css">

</head>

<body class="antialiased">
    <div class="ml-4  text-lg text-gray-500 uppercase tracking-wider">

        <button class="btn btn-outline-dark ">
            <a href="{{ URL::previous() }}" class="text-gray-500 text-decoration-none text-reset">Go Back</a>
        </button>
    </div>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">404 </div>
                <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">Not Found </div>

            </div>
        </div>
    </div>
</body>

</html>
