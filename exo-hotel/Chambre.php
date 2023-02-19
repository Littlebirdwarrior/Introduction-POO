<?php
class Chambre
{

    private int $_numero;
    private float $_prix;
    private bool $_wifi;
    private string $_lit;
    private Hotel $_hotel;
    private array $_reservations;

    public function __construct(int $numero, int $prix, string $wifi, $lit, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_lit = $lit;
        $this->_reservations = [];
        $this->_hotel = $hotel;
    }

    // METHODE


    //SETTER GETTER

}
?>