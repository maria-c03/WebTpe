<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {* si pongo ../css para acceder a la carpeta el base_url me rompe el camino *}
    <link rel="stylesheet" href="css/style.css">
    <title>TPE</title>
</head>

<body>
    <header class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="juegos">Juegos</a>
            <a class="navbar-brand" href="generos">Genero de juegos </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Log out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<main class="container">