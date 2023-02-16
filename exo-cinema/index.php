<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Introduction POO - Exo - Cinema - Exo 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
</head>

<body>
    <h1>Introduction POO - Exo - Cinema - Exo 3</h1>
    <p> <b>Consignes : </b><br>
    Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
    </p>
    <h2>Affichage :</h2>

    <?php

    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
    });

    $drame = new Genre("drame");

    $realisateur1 = new Realisateur("Punk", "Punkman", "Homme", "1968-10-4");

    $film1 = new Film("Fight Club", "1990-02-14", $realisateur1, 2.5, "Ceci est un résumé de Fight Club, c'est interessant", $drame);

    echo $film1;
    var_dump($film1)

    

    ?>

</body>

</html>