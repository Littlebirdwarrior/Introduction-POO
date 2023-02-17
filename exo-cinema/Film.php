<?php 

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Film {
    private string $_titre;
    private int $_dateSortie;
    private int $_duree;//à convertir en DateTime
    private Realisateur $_realisateur;
    private string $_resume;
    private Genre $_genre;

    public function __construct( string $titre, int $dateSortie, Realisateur $realisateur, int $duree, string $resume, Genre $genre){
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_resume = $resume;
        $this->_genre = $genre;
        $this-> _genre -> addFilm($this);//cf class genre
        
    }

    //**Setter et Getter */
    //Titre

    public function getTitre(){
        return $this->_titre;
    }

    public function setTitre(string $titre){
        $this->_titre = $titre;
    }

    //date
    public function getDateSortie(){
        return $this->_dateSortie;
    }

    public function setDateSortie( int $dateSortie){
        $this->_dateSortie = $dateSortie;
    }

    //duree
    public function getDuree(){
        return $this ->_duree;

    }

    public function setDuree(int $duree) {
        $this->_duree = $duree;
    }

    //resume
    public function getResume(){
        return $this -> _resume;
    }

    public function setResume(string $resume){
        $this->_resume = $resume;
    }

    //genre
    public function getGenre(){
        return $this -> _genre;
    }

    public function setGenre( Genre $genre){
        $this -> _genre = $genre;
    }

    //**Méthode */

    //Convertir dateSortie en année
    public function dateSortie(){
        $getDate = $this->getDateSortie(); //je récupère ma date au format in
        $dateTimeStamp = mktime(0, 0, 0, 1, 1, $getDate);//je la convertir en Timestamp Unix, la fonction a besoin des arguments suivants "mktime($heure, $minute, $seconde, $mois, $jour, $annee, $est_dst)"
        $dateSortie = date('Y', $dateTimeStamp);//je formate ma date en année
        return "Année de sortie : ".$dateSortie;
    }

    //Convertir la duree du format int en durée

    public function getDureeTime(){
        $getDate = $this ->getDuree();//je recupere ma durée en minutes
        $convertSecond = $getDate *60;//je convertis mes minutes en seconde (le calcul des durée ce fait à partir des timestamp unix (en seconde))
        $date = date('H:i', $convertSecond); // Formatage de la date
        return "Durée : ". $date;
    }


    //Affichage
    public function __toString(){
       return   "<b>" . $this ->getTitre() . "</b> 
                <br> " . $this-> DateSortie() . 
                "<br> " . $this -> getDureeTime() . 
                " <br> Genre : ". $this -> getGenre() . 
                " <br> Synopsys : " . $this->getResume() . ".<hr>";
    }

}


?>