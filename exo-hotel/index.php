<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

$hotel_stras = new Hotel("Hilton **** Strasbourg", "10 route de la gare, 67100 Strasbourg");
$hotel_paris = new Hotel("Regent **** Paris", "61 Rue Dauphine, 75010 Paris");

// Chambres



// Client



// Reservation




// TESTS

$hotel_paris -> afficherInfo();


?>

</body>
</html>