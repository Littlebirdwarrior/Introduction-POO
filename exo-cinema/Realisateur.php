<?php 

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Realisateur {
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;

    //**Construct */

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this ->_sexe = $sexe;
        $this -> _dateNaissance = new DateTime($dateNaissance);
    }

    //** Setter Getter */

    //Nom
    public function getNom(){
        return $this ->_nom;

    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

     //Prenom
    public function getPrenom(){
        return $this ->_prenom;
    
    }
    
    public function setPrenom(string $prenom){
        $this->_prenom = $prenom;
    }

    //Sexe

    public function getSexe(){
        return $this -> _sexe;
    }

    public function setSexe(string $sexe){
        $this->_sexe = $sexe;
    }

    //dateNaissance

    public function getDateNaissance(){
        return $this ->_dateNaissance;
    }

    public function setDateNaissance( DateTime $dateNaissance){
        $this->_dateNaissance -> $dateNaissance;
    }

    //*Modele*/

    public function __toString()
    {
        return $this->_nom . $this->_prenom . $this->_sexe . $this->_dateNaissance;
    }


}


?>