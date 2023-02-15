<?php 
//Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur.

class Livre {
    //**Déclaration propriete */
    private string $_titre;
    private int $_nbPage;
    private DateTime $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct (string $titre, int $nbPage, string $anneeParution, float $prix, Auteur $auteur ){
        $this->_titre = $titre;
        $this->_nbPage = $nbPage;
        $this->_anneeParution = new DateTime($anneeParution);
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }

    //**Setter et Getter */
    //Titre
    public function getTitre(){
        return $this->_titre;
    }

    public function setTitre(){
        $this->_titre = $titre;
    }
    //nbPage

    public function getNbPage(){
        return $this->_nbPage;
    }

    public function setNbPage(){
        $this->_nbPage= $nbPage;
    }

    //anneeParution

    public function getAnneeParution(){
        return $this->_titre;
    }

    public function setAnneeParution(){
        $this->_anneeParution = $anneeParution;
    }

    //prix
    public function getPrix(){
        return $this->_prix;
    }

    public function setPrix(){
        $this->_prix = $prix;
    }

    //auteur
    public function getAuteur(){
        return $this->_auteur;
    }

    public function setAuteur(){
        $this->_auteur = $auteur;
    }

    //**Méthode */

    public function anneeParutionString(){
        $date = $this->_anneeParution;
        $anneeParutionString = $date->format('Y');
        return $anneeParutionString;
    }

    //Je paramètre mes floats (pas plus loin que les centimes)
    public function getPrixFloat() {
    $prixFloat = round($this->_prix, 3);
    return $prixFloat;
    }

    public function __toString(){
        return $this->_titre .", ". $this->_nbPage ." pages, ed: ". $this->anneeParutionString().", ". $this->_prix." euros, Auteur : ".$this->_auteur;

    }




}


?>