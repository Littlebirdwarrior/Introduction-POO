<?php 
//Un auteur comporte un nom et un prénom.

class Auteur {

    //**déclaration propriete */
    private string $_nom;
    private string $_prenom;

    //**Mon construct */
    public function __construct( string $nom, string $prenom) {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
    }

    //** Mes setter et getter */

    //nom

    public function getNom(){
        return $this ->_nom;
    }

    public function setNom (string $nom) {
        $this->_nom = $nom;
    }

    //prenom

    public function getPrenom() {
        return $this ->_prenom;
    }

    public function setPrenom(){
        return $this ->_prenom;
    }

    //** Mes methodes*/

    public function __toString(){
        return $this->_prenom . " " .$this->_nom;
    }


}

?>