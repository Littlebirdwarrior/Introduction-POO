<?php 
//Un auteur comporte un nom et un prénom.

class Auteur {

    //**déclaration propriete */
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    //**Mon construct */
    public function __construct( string $nom, string $prenom) {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _livres = []; //pas definie dans le construct
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

    public function setPrenom(string $prenom){
        $this ->_prenom = $prenom;
    }

    //bibliographie

    public function getBibliographie() {
        return $this ->_livres;
    }

    public function setBibliographie(array $livres){
        $this ->_livres = $livres;
    }



    //** Mes methodes*/

    public function __toString(){
        return $this->_prenom . " " .$this->_nom;
    }

    //J'affiche ma bibliographie

    //J'ajoute des livre a ma biblio

    public function addLivre (Livre $livre) {
        $this->_livres[] = $livre;//ici, j'ajoute les livres dans mon tableau vide

    }

    //J'affiche le compte de chaque titulaire
    //convertir mon array en string 
    public function afficherBibliographie(){
        $result = "<h2> Bibliographie de " . $this ."</h2>";
        $livres = $this->_livres;
        foreach ($livres as $livre){
            $result .= $livre."<br>";
        }
        return $result;
    }

}

?>