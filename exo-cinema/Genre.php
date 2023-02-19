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

    public function getGenre(): string
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

    public function getFilms(): array
    {
        return $this->_films;
    }

    public function setFilms(array $films)
    {
        return $this->_films = $films;
    }



    //**------------ Methode*/
    //Ajouter des films à mon tableau

    public function addFilm(Film $film)
    {
        $this->_films[] = $film;
    }


    //Afficher les film par genre
    public function filmsParGenres()
    {   $films = $this->getFilms();
        foreach ($films as $film) {
            echo "<b> Films de genre ". $this->getGenre()."</b><br>". $film . "<br>";
        }
    }


}

?>