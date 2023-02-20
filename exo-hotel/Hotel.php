<?php

class Hotel
{

    private string $_nom;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    private array $_chambres;
    private array $_reservations;


    public function __construct(string $nom, string $adresse, string $codePostal, string $ville )//array $chambres, array $reservations
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_chambres = [];
        $this->_reservations = [];
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

    //cp

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

    public function setReservations(array $reservations)
    {
        $this->_reservations = $reservations;
    }

    
    //Chambre -> un array d'objet
    public function addChambre(Chambre $chambres)
    {
        $this->_chambres[] = $chambres;
    }


    //Reservation -> un array d'objet
    
    public function addBooking(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }

    // METHODE

    //Afficher Info
    
    public function afficherInfo()
    {
        echo "<h3>" .$this->_nom. "</h3>" ;
        echo $this->_adresse."<br><br>";
    }

    //toString
    public function __toString()
    {
        return $this->_nom . $this->_adresse;
    }


}

?>