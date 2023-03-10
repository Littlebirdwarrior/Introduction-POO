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
    
    //Mes réalisateurs
    $realisateur1 = new Realisateur("Fincher", "David", "Homme", "1962-09-28");
    $realisateur2 = new Realisateur ("Martinson","Leslie Herbert","Homme","1915-01-16");
    $realisateur3 = new Realisateur ("Nolan","Christopher","Homme", "1970-06-30");
    $realisateur4 = new Realisateur ("George", "Thomas", "Homme", "1972-10-05");
    $realisateur5 = new Realisateur ("Scott", "Ridley", "Homme", "1937-11-30");

    //Mes acteurs
    $acteur1 = new Acteur("Bonham Carter", "Helena", "Femme", "1966-05-26");
    $acteur2 = new Acteur ("West","Adam","Homme","1926-09-19");
    $acteur3 = new Acteur ("Bale","Christian","Homme", "1974-01-30");
    $acteur4 = new Acteur ("Weaver", "Sigourney ", "Homme", "1949-10-08");

    //Mes role
    $role1= new Role("Batman");
    $role2 = new Role ("Sigourney Weaver");
    $role3 = new Role ("Elizabeth Bowes-Lyon");
    $role4 = new Role ("Marla");


    //Mes films

    $film1 = new Film("Fight Club", "1999", $realisateur1, 125 , "Ceci est un résumé de Fight Club, c'est interessant", $drame);
    //Acteur:Helena Bonham Carter //Role: Marla

    $film2 = new Film("Batman", "1966", $realisateur2 , 86 , "c'est le 1er Batman et Robin", $comedie);
    //Acteur: Adam West //Role: Batman

    $film3 = new Film("The Dark Night", "2008", $realisateur3 , 106 , "c'est le celebre Batman SANS Robin", $action);
    //Acteur: Christian Bale //Role: Batman

    $film4 = new Film("The King's Speech", "2010", $realisateur4, 95 , "C'est l'histoire de George V d'Angleterre", $historique );
    //Acteur:Helena Bonham Carter //Role: Elizabeth Bowes-Lyon

    $film5 = new Film("Alien","1979", $realisateur5, 68 , "C'est la suide d' autre un film affreusement chouette", $horreur);
    //Acteur: Sigourney Weaver //Role: Ellen Ripley

    $film6 = new Film("Alien-3","1992", $realisateur1, 95 , "C'est un film affreusement chouette", $horreur);
    //Acteur: Sigourney Weaver //Role: Ellen Ripley

    //Casting

    $casting1 = new Casting ($acteur2, $film2, $role1);
    $casting2 = new Casting ($acteur3, $film3, $role1);
    $casting4 = new Casting ($acteur1, $film1, $role4);
    $casting3 = new Casting ($acteur1, $film4, $role3);
    $casting5 = new Casting ($acteur4, $film5, $role2);
    $casting6 = new Casting ($acteur4, $film6, $role2);

    //Mes resultat de test
    //film1 et film4, meme acteur + femme
    //film2 et film3, meme role
    //film1 et film5, meme realisateur
    //film5 et film6, meme genre, meme acteur, meme role


    //**Methode d'affichage */

    //Variables
    $afficherFilms = [ $film1, $film2, $film3, $film4, $film5, $film6 ];

    //functions
    function afficherTousFilms($afficherFilms) {
        foreach ($afficherFilms as $afficherFilm) {
            echo '<div>'. $afficherFilm. '<hr></div>' ;
        }
    }

    //**Affichage */

    echo '<h2> Tous mes films</h2>';
    afficherTousFilms($afficherFilms);
    //Lister la filmographie d'un réalisateur
    echo '<h2> Les films par réalisateurs</h2>';
    echo $realisateur1 -> afficherFilmReal();

    //Lister les films par genre
    echo '<h2> Les films par genres</h2>';
    echo $horreur -> filmsParGenres();

    //Lister le casting d'un film
    echo '<h2> Casting par films</h2>';
    echo $film1-> afficherCasting();

    //Lister la filmographie d'un acteur
    echo '<h2> Films par acteurs</h2>';
    echo $acteur1 ->afficherFimographie();

    //Lister la liste des acteurs ayant incarné un rôle précis
    echo '<h2> Acteurs par roles</h2>';


    ?>

</body>

</html>