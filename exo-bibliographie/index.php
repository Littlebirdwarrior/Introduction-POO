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
    Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.
    </p>
    <h2>Affichage :</h2><br>

    <?php
    //importe mes classe
    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
    });

    
    //Je crée mes auteur
    $auteur1 = new Auteur("Charles", "Dickens");
    echo $auteur1;

    echo '<br>';

    $livre1 = new Livre("Oliver Twist", 358, 1885, 7, $auteur1);

    echo $livre1;


    ?>

</body>

</html>