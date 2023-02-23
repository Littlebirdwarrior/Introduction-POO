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
        
    //-Information hotel-/

    public function AfficherReservation()
    { 
        if (count($this->_reservations) == 0)
        {   
            echo "<h3> Reservations de ".$this->_nom. "</h3>" ;
            echo "Cet hotel n'a aucune reservation pour le moment. ";
        }
        
        else
        {   
            echo "<h3> Reservations de ".$this->_nom. "</h3>" ;
            echo "Adresse : ". $this->_adresse. " " .$this->_codePostal . " " .$this->_ville."<br>  
                Nombre de chambres : " .count ($this->_chambres) ."<br>
                Nombre de réservations : " .count($this->_reservations) ."<br>
                Nombre de chambre libre : ". (count ($this->_chambres)-count($this->_reservations))."<br>";
        }
    }

    public function AfficherReservationParHotel(){  

        echo "<h3> Reservations de ". $this->_nom. "euros".//ici, reservations est un array, a convertir en string, sans foreach
            "</h3> Nombre de réservations : " .count($this->_reservations) ."<br>";

        foreach ($this->_reservations as $reservation)
        {   
            if(count($this->_reservations) == 0)
            {
                echo "Cet Hotel n'a pas de reservation";
            }
            else
            {
                echo $reservation->getClient(). " - Chambre  ".$reservation->getChambre(). " - du " .$reservation->getDateDebutString() . " au ".$reservation->getDateFinString()."<br>";
            }
        }
                  
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