<?php

class Hotel
{

    private string $_nom;
    private string $_adresse;
    private array $_chambres;
    private array $_reservations;


    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
        $this->_reservations = [];
    }


// METHODE


//SETTER GETTER


}

?>