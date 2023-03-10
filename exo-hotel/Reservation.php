<?php
class Reservation
{

    private DateTime $_dateDebut;
    private DateTime $_dateFin;
    private Client $_client;
    private Chambre $_chambre;

    public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre )
    {
        $this->_dateDebut = new DateTime ($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
        $this->_client = $client;
        $client->addReservation($this);
        $this->_chambre = $chambre;
        $chambre->addReservation($this);//cette reservation s'enregiste dans chambre
        $this->_chambre->getHotel()->addReservation($this);
        $this->_chambre->setStatus(false); //Des qu'une reservation est en cours, le status est set à false
    }




// METHODE

    //Date de début
    //Convertir date de début en string pour l'afficher
    public function getDateDebutString(){
        $date = $this->getDateDebut();
        $dateDebutString = $date->format('Y-m-d');
        return $dateDebutString;
    }

    //Convertir date de fin en string pour l'afficher
    public function getDateFinString(){
        $date = $this->getDateFin();
        $dateFinString = $date->format('Y-m-d');
        return $dateFinString;
    }

    //toString
    public function toString(){
        return "Cette reservation : " .$this->_chambre. "du". $this->getDateDebutString() ." au ".$this->getDateFinString(). ": client : " .$this->_client;
    }

    //SETTER GETTER
    //Datedebut
    public function getDateDebut (){
        return $this ->_dateDebut;;
    }

    public function setDateDebut (DateTime $dateDebut) {
        return $this->_dateDebut = $dateDebut;
    }//utiliser getDateDebutString() pour les strings

    //Datefin
    public function getDateFin (){
        return $this ->_dateFin;
    }

    public function setDateFin(DateTime $dateFin) {
        return $this->_dateFin = $dateFin;
    } //utiliser getDateFinString() pour les strings


    //Client
    public function getClient(){
        return $this->_client;
    }

    public function setClient(Client $client){
        $this->_client = $client;
    }

    //Room

    public function getChambre()
    {
        return $this->_chambre;
    }


    public function setChambre(Chambre $chambre)
    {
        return $this->_chambre = $chambre;

    }

}


?>