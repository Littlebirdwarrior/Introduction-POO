<?php 

class Titulaire {
    //** déclaration propriete/
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptes;

    //**Construct */

    public function __construct (string $nom, string $prenom, string $dateNaissance, string $ville) {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = new DateTime($dateNaissance);
        $this -> _ville = $ville;
        $this -> _comptes = [];//ici, on crée un tableau vide
    }

    //**Setter/Getter */

    //nom
    public function getNom(){
        return $this->_nom;
    }

    public function setNom (string $nom) {
        $this->_nom = $nom;
    }


    //prenom

    public function getPrenom() {
        return $this->_prenom;
    }

    public function setPrenom( string $prenom) {
        return $this->_prenom = $prenom;
    }


    //date de naissance

    public function getDateNaissance (){
        return $this ->_dateNaissance;
    }

    public function setDateNaissance (DateTime $dateNaissance) {
        return $this->_dateNaissance = $dateNaissance;
    }

    //ville

    public function getVille (){
        return $this -> _ville;
    }

    public function setVille (string $ville){
        return $this -> _ville = $ville;
    }

    //comptes

    public function getComptes(){
        return $this -> _comptes;
    }

    public function setComptes( array $comptes){
        return $this -> _comptes = $comptes;
    }

    //**Mes méthodes */


    //Date de naissances des Titulaire
    //Convertir date de naissance en string pour l'afficher
    public function dateNaissanceString(){
        $date = $this->getDateNaissance();
        $dateString = $date->format('Y-m-d');
        return $dateString;
    }

    //Comptes des titulaires
    //Ajouter un comptes
    
    public function addCompte (Compte $compte) {
        $this->_comptes[] = $compte;//ici, j'ajoute les comptes créé dans mon tableau vide, on lie les 2 classe
    }
    
    
    //Affichage
    //J'affiche les infos des titulaires pour les mettre dans mes infos sur les comptes
    public function __toString()
    {
        return $this->getPrenom()." ".$this->getNom() ;
    }

    //J'affiche les infos du titulaire

    public function displayTitulaire() {
        $result = "<b>Mes titulaires</b><br>";
        $titulaires = $this->getPrenom()." ".$this->getNom(). " ". $this->dateNaissanceString() . " " . $this -> getVille(). "<br>";
        $result .= $titulaires;
        return $result;
    }

    //J'affiche le compte de chaque titulaire
    //convertir mon array en string 
    public function displayComptesString(){
        $result = "<b>Comptes de $this</b><br>"; //le $this renvois au name de l'objet de classe Titulaire traité
        $comptes = $this->getComptes();//ici, le $this renvois à l'arrey du titulaire traité
        foreach ($comptes as $compte){
            $result .= $compte."<br>";//Ici, je concaténe gràce à un operateur d'affectation .= equivaut à A= "b" . "c"), de mes element arrey, je récupére une string
        }
        return $result;
    }

    

    
}


?>