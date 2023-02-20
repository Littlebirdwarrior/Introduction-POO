<?php
class Chambre
{

    private int $_numero;
    private float $_prix;
    private bool $_wifi;
    private int $_lit;
    private Hotel $_hotel;
    private array $_reservations;
    private bool $_free;
    private bool $_status;

    public function __construct(int $numero, float $prix, bool $wifi, int $lit, Hotel $hotel)//Hotel $hotel, array $reservations
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_lit = $lit;
        $this->_hotel = $hotel;
        $hotel->addChambre($this);// cette méthode ajoute les chambres aux hotel
        $this->_reservations = [];//ici on récupére un tableau de reservations
        $this ->_status = true;
    }

    // METHODE
    //Affichage
    public function __toString(){
        return $this->_numero. " " .$this->_prix. " " .$this->_wifi. " " .$this->_lit. " ". $this->_hotel;
    }

    //Ajouter les chambes au résenvation
    //Reservation -> un array d'objet
    public function addReservation(Reservation $reservation)////
    {
       $this->_reservations[] = $reservation;
    }
     

    //SETTER GETTER

    //numero
    public function getNumero() {
        return $this -> _numero;
    }

    public function setNumero( int $numero){
        $this -> _numero = $numero;
    }

    //prix 

    public function getPrix() {
        return $this -> _prix;
    }

    public function setPrix( float $prix){
        $this -> _prix = $prix;
    }

    //wifi

    public function getWifi() {
        return $this -> _wifi;
    }

    public function setWifi( int $wifi){
        $this -> _wifi = $wifi;
    }

    //lit

    public function getLit() {
        return $this -> _lit;
    }

    public function setLit( int $lit){
        $this -> _lit = $lit;
    }

    //free

    public function getFree() {
        return  $this -> _free;
    }

    public function setFree( bool $free)
    {
        $this -> _free = $free;
    }

}
    
?>