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
    
    //** METHODE perso/ 

     //Afficher les reservations d'Hotel par clients

     public function AfficherReservationParClient(){  

        echo "<h3> Reservations de ".$this ."</h3> Nombre de réservations : " .count($this->_reservations) ."<br>";

        foreach ($this->_reservations as $reservation)
        {   
            if(count($this->_reservations) == 0)
            {
                echo "Ce client n'a pas de reservation";
            }
            else
            {
                echo $reservation->getChambre()->getHotel()->getNom(). " - Chambre  ".$reservation->getChambre(). " - du " .$reservation->getDateDebutString() . " au ".$reservation->getDateFinString()."<br>";
            }
        }
                  
    }       
    
    //** METHODE construction*/ 

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