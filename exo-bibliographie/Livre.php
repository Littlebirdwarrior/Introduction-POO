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
        $this->_auteur -> addLivre($this);//ici, mes livre sont dans un tableau resultat de addLivre() dans la classe Livre
    }

    //**Setter et Getter */
    //Titre
    public function getTitre(){
        return $this->_titre;
    }

    public function setTitre( string $titre){
        $this->_titre = $titre;
    }
    //nbPage

    public function getNbPage(){
        return $this->_nbPage;
    }

    public function setNbPage( int $nbPage){
        $this->_nbPage= $nbPage;
    }

    //anneeParution

    public function getAnneeParution(){
        return $this->_titre;
    }

    public function setAnneeParution( DateTime $anneeParution){
        $this->_anneeParution = $anneeParution;
    }

    //prix
    public function getPrix(){
        return $this->_prix;
    }

    public function setPrix( float $prix){
        $this->_prix = $prix;
    }

    //auteur
    public function getAuteur(){
        return $this->_auteur;
    }

    public function setAuteur( Auteur $auteur){
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
        return $this->_titre ." (". $this->anneeParutionString().") : ". $this->_nbPage ." pages / ". $this->_prix." euros";

    }

}


?>