<?php 

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Genre {
    private string $_genre;
    private array $_films = [];

    public function __construct(string $genre) {
        $this->_genre = $genre;
        $this->_films = [];
    }

    //**Setter / Getter */

    public function getGenre(){
        return $this->_genre;
    }
    public function setGenre(string $genre){
        $this->_genre = $genre;
    }


    //** Methode*/
    //Ajouter des films à mon tableau (cf class livre)

    public function addFilm(Film $film) {
        $this->_films[] = $film;
    }

    public function filmsParGenres(){
        $films = $this->_films;
        foreach ($films as $film){
            $result = $film .'<br>';
        }
        return $result;
    }

    public function __toString(){
        return $this->_genre;
    }


}
?>