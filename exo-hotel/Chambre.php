<?php
class Chambre
{

    private int $_numero;
    private float $_prix;
    private bool $_wifi;
    private string $_lit;
    private Hotel $_hotel;
    private array $_reservations;
    //ajout status bool

    public function __construct(int $numero, float $prix, string $wifi, $lit, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_lit = $lit;
        $this->_reservations = [];
        $this->_hotel = $hotel;
    }

    // METHODE
    //Affichage
    public function __toString(){
        return $this->_numero. " " .$this->_prix. " " .$this->_wifi. " " .$this->_lit;
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

    //Reservations
    public function getReservations(){
        return $this->_reservations;
    }
    
    public function setReservations(array $reservations){
        $this->_reservations = $reservations;
    }

        //Hotel

    public function getHotel() {
        return $this -> _lit;
    }
    
    public function setHotel( Hotel $hotel){
        $this -> _hotel = $hotel;
    }
    

}
?>