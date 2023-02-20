<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice POO - exo Hotel</title>
    <h1>Exercice POO - exo Hotel</h1>
</head>
<body>

<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//INITIALISATION DES INSTANCES

// Hotels

$hotel_stras = new Hotel("Hilton **** Strasbourg", "10 route de la gare" , "67100", "Strasbourg" );
$hotel_paris = new Hotel("Regent **** Paris", "61 Rue Dauphine", "75010", "Paris");

// var_dump($hotel_paris);

// Chambres

$chambre_stras_1 = new Chambre(1, 120, true,"2 lit", true);
$chambre_stras_2 = new Chambre(2, 130, false,"2 lit", false);
$chambre_stras_3 = new Chambre(3, 140, true,"2 lit", false);
$chambre_stras_4 = new Chambre(1, 150, false,"2 lit", true);

var_dump($chambre_stras_1)

// Client



// Reservation




// TESTS



?>

</body>
</html>


