<?php

class Hotel
{

    private string $_nom;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    private array $_chambres;
    private array $_reservations;


    public function __construct(string $nom, string $adresse, string $codePostal, string $ville)// les array pas dans le construct
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_chambres = [];/////
        $this->_reservations = [];////
    }



    //SETTER GETTER

    // Name

    public function getNom()
    {
        return $this->_nom;
    }


    public function setNom($_nom)
    {
        return $this->_nom = $_nom;
    }

    // Adresse

    public function getAdresse()
    {
        return $this->_adresse;
    }


    public function setAdresse($adresse)
    {
        return $this->_adresse = $adresse;
    }

    //code postal

    public function getCodePostal() 
    {
        return $this -> _codePostal;
    }
    
    public function setCodePostal( string  $codePostal)
    {
        $this -> _codePostal = $codePostal;
    }
    

    //Reservations
    public function getReservations()
    {
        return $this->_reservations;
    }

    public function setReservations(array $reservations) ////
    {
        $this->_reservations = $reservations;
    }


    //Chambre
    public function getChambres(){
        return $this->_chambres;
    }

    public function setChambre( array $chambres){
        return $this -> _chambres[] = $chambres;
    }

    
    //Chambre -> un array d'objet
    public function addChambre(Chambre $chambres)////
    {
        $this->_chambres[] = $chambres;
    }


    //** METHODE Perso*/ 

    //Afficher les reservations d'Hotel par clients

    public function AfficherReservationParClient(){
        $result = '<h3> Réservation de'.$this->getNom(). '</h3>';
        foreach($this-> getReservations() as $reservation){
            return $affichage = $reservation->getClient()->getPrenom(). " " .$reservation->getClient()->getNom(). " ". $reservation->getChambres();
        }
        $result .= $affichage ."<br>";
    }



    //-Information hotel-/
    //calculer le nombre de chambres de l'hotel


    //calculer le nombre de chambre réservée et le nombre de chambre de disponibles


    //Afficher Informations des Hotel
    
    public function afficherInfoHotel()
    {
        echo "<h3>" .$this->_nom. "</h3>" ;
        echo $this->_adresse."<br><br>";
    }

    //-Information statut-/ 

    //** METHODE Fonctionnement*/ 

    //Ajouter les reservations au tableau
    public function addReservation(Reservation $reservation )
    {
        $this->_reservations[] = $reservation;
    }
    

    //**toString/
    public function __toString()
    {
        return $this->_nom . $this->_adresse;
    }

}

?>