<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Introduction POO - Exo - Banque - Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
    $compte1 = new Compte("Livret A", 42.666, "euros", $titulaire1);
    $compte2 = new Compte("Livret Epargne", 1500.666, "euros", $titulaire1);
    $compte3 = new Compte("Livret B", 2108.14 ,"euros", $titulaire2);

    //J'affiches mes titulaires et ses comptes (ici, il faut faire une fonction)
    echo "<div>";
    echo $titulaire1->displayTitulaire();
    echo $titulaire1->displayComptesString();
    echo "</div>";

    echo "<hr>";

    echo "<div>";
    echo $titulaire2->displayTitulaire();
    echo $titulaire2->displayComptesString();
    echo "</div>";

    echo "<hr><b>Credit</b><br>";

    echo $compte1->Credit(3);
    echo $compte1;

    echo "<hr><b>Debit</b><br>";

    echo $compte2->Credit(4);
    echo $compte2;

    echo "<hr><b>Transfert</b><br>";


    

    ?>

</body>

</html>