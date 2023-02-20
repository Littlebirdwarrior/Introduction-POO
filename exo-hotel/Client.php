<?php
class Client
{
    private string $_prenom;
    private string $_nom;
    private array $_reservations;

    public function __construct($prenom, string $nom)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_reservations = [];
    }

// METHODE

public function __toString()
{
    return $this -> _prenom. " ". $this->_nom." " ;
}


//SETTER GETTER

//Prenom
public function getPrenom(){
    return $this->_prenom;
}

public function setPrenom(string $prenom){
    $this->_prenom = $prenom;
}

//Prenom
public function getNom(){
    return $this->_nom;
}

public function setNom(string $nom){
    $this->_nom = $nom;
}

//Reservations
public function addBooking(Reservation $reservation )
{
    $this->_reservations[] = $reservation;
}


}

?>