<?php
class Chambre
{

    private int $_numero;
    private float $_prix;
    private bool $_wifi;
    private int $_lit;
    private Hotel $_hotel;
    private array $_reservations;
    private bool $_status;

    public function __construct(int $numero, float $prix, bool $wifi, int $lit, Hotel $hotel)
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

    //Hotel
        
    public function getHotel()
    {
        return $this->_hotel;
    }

    public function setHotel(Hotel $hotel)
    {
        return $this->_hotel = $hotel;

     }

    // Reservation

    public function getReservations()
    {
        return $this->_reservations;
    }

    public function seReservations($reservations)
    {
        return  $this->_reservations = $reservations;
    }

    //free

    public function getStatus() {
        return  $this -> _status;
    }

    public function setStatus( bool $status)
    {
        $this -> _status = $status;
    }

    //**METHODE perso*/

    //**METHODE Construction*/
    //Affichage
    public function __toString(){
        return " n°: ". $this->_numero. "/ prix : " .$this->_prix. " euros / Wifi : " .$this->afficherWifi(). " /(nombre de lit :" .$this->_lit. ")";
    }

    //Ajouter les chambes au résenvation
    //Reservation -> un array d'objet
    public function addReservation(Reservation $reservation)////
    {
       $this->_reservations[] = $reservation;
    }

    //afficher le wifi
    public function afficherWifi(){
    
        if ($this->getWifi() == True)
        {
            return $wifistatus = "Oui";
                        
        }
        else 
        {
        return $wifistatus = "Non";
        } 
    }
                

}
    
?>