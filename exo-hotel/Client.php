<?php
class Client
{
    private string $_prenom;
    private string $_nom;
    private array $_reservations;

    public function __construct( string $prenom, string $nom)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_reservations = [];//ici je creer un tableau vide
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
    
    // METHODE

    //Ajouter les reservations au tableau
    public function addReservation(Reservation $reservation )
    {
        $this->_reservations[] = $reservation;
    }
    
    public function __toString()
    {
        return $this -> _prenom. " ". $this->_nom." " ;
    }



}

?>