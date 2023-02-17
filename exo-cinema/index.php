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
    
    //Je crée mes objets
    
    //Mes genres
    $drame = new Genre("drame");
    $horreur = new Genre("horreur");
    $comedie = new Genre("comedie");
    $action = new Genre("action");
    $historique = new Genre("historique");
    

    $realisateur1 = new Realisateur("Fincher", "David", "Homme", "1962-09-28");
    $realisateur2 = new Realisateur ("Martinson","Leslie Herbert","Homme","1915-01-16");
    $realisateur3 = new Realisateur ("Nolan","Christopher","Homme", "1970-06-30");
    $realisateur4 = new Realisateur ("George", "Thomas", "Homme", "1972-10-05");


    //film1 et film4, meme acteur + femme
    //film2 et film3, meme role
    //film1 et film5, meme realisateur

    $film1 = new Film("Fight Club", "1999", $realisateur1, 125 , "Ceci est un résumé de Fight Club, c'est interessant", $drame);
    //Acteur:Helena Bonham Carter //Role: Marla

    $film2 = new Film("Batman", "1966", $realisateur2 , 86 , "c'est le 1er Batman et Robin", $comedie);
    //Acteur: Adam West //Role: Batman

    $film3 = new Film("The Dark Night", "2008", $realisateur3 , 106 , "c'est le celebre Batman SANS Robin", $action);
    //Acteur: Christian Bale //Role: Batman

    $film4 = new Film("The King's Speech","2010", $realisateur4, 95 , "C'est l'histoire de George V d'Angleterre", $historique );
    //Acteur:Helena Bonham Carter //Role: Elizabeth Bowes-Lyon

    $film5 = new Film("Alien 3","1992", $realisateur1, 165 , "C'est un film affreux", $horreur);
    //Acteur: Sigourney Weaver //Role: Ellen Ripley

    //**Methode d'affichage */

    //Variables
    $afficherFilms = [
        $film1, $film2, $film3, $film4, $film5
    ];

    //functions
    function afficherTousFilms($afficherFilms) {
        foreach ($afficherFilms as $afficherFilm) {
            echo '<div>'. $afficherFilm. '</div>' ;
        }
    }

    //**Affichage */

    echo '<h3> Tous mes films</h3>';

    afficherTousFilms($afficherFilms);

    

    ?>

</body>

</html>