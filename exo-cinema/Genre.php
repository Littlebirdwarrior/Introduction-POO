<?php

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Genre
{
    private string $_genre;
    private array $_films;

    public function __construct(string $genre)
    {
        $this->_genre = $genre;
        $this->_films = [];
    }

    //**Setter / Getter */

    // Genre

    public function getGenre()
    {
        return $this->_genre;
    }

    public function setGenre(string $genre)
    {
        $this->_genre = $genre;
    }

    function __toString(): string
    {
        return $this->_genre;
    }

    // Film

    public function getFilms()
    {
        return $this->_films;
    }

    public function setFilms(array $films)
    {
        return $this->_films = $films;
    }



    //** Methode*/
    //Ajouter des films à mon tableau (cf class livre)

    public function addFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    public function filmsParGenres()
    {
        $films = $this->_films;
        foreach ($films as $film) {
            echo $film;
        }
    }


}

?>