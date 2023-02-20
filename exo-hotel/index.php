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

//var_dump($hotel_paris);

// Chambres

$chambre_stras_1 = new Chambre(1, 120, true, 2 , $hotel_stras);
$chambre_stras_2 = new Chambre(2, 130, false,2 , $hotel_stras);
$chambre_stras_3 = new Chambre(3, 140, true, 2 ,  $hotel_stras);
$chambre_stras_4 = new Chambre(1, 150, false, 2 , $hotel_stras);

//var_dump($chambre_stras_1)

// Client
$client_1 = new Client("Dawn", "Johnson");

//var_dump($client_1)



// Reservation

$reservation_1 = new Reservation("16-02-2023", "17-02-2023", $client_1, $chambre_stras_1);

var_dump($reservation_1)


// TESTS



?>

</body>
</html>


