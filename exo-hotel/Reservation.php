<?php
class Reservation
{

    private string $_dateDebut;
    private string $_dateFin;
    private Client $_client;
    private Chambre $_chambre;

    public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre)
    {
        $this->_dateDebut = $dateDebut;
        $this->_dateFin = $dateFin;
        $this->_client = $client;
        $this->_chambre = $chambre;
    }

// METHODE


//SETTER GETTER


}


?>