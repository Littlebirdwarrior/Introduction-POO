<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Introduction POO - Exo - Banque - Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .grey {
            background: #ddd;
            width: 500px;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Introduction POO - Exo - Banque - Exo 1</h1>
    <p> <b>Consignes : </b><br>
        Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.
    </p>
    <h2>Affichage :</h2>

    <?php

    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
    });

    //Je crée mes titulaires
    $titulaire1 = new Titulaire("Onfrey", "Michel", "01/01/1985", "Paris");
    $titulaire2 = new Titulaire("Dahl", "Roal", "01/01/1956", "Londres");

    // echo $titulaire1;


    //Je crée mes comptes
    $compte1 = new Compte("livret A", 42.666, "£", $titulaire1);
    $compte2 = new Compte("livret Epargne", 1500.666, "£", $titulaire1);

    echo $titulaire1->getComptesString();


    ?>

</body>

</html>