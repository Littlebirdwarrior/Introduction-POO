<?php 

class Casting {

    //- Creer la classe Casting, qui contient Role, Film, Acteur
    ////[16:18] Mickael MURMANN - Elan Formation
    //Dans CASTINGIl y aura juste un getter par propriété : getActeur(), getFilm() et getRole()

    private Acteur $_acteur;
    private Film $_film;

    //private Role $_Role;

    public function __construct(Acteur $acteur, Film $film, ) { //Role $role
        $this -> _acteur = $acteur;
        $this -> _film = $film;
        $this ->_role = $role;

    }

    //** Setter et Getter */

    public function getActeur(){
        return $this ->_acteur;
    }

    public function getFilm(){
        return $this ->_film;
    }

    public function setFilm(Film $film){
        $this ->_film = $film;
    }


    //** Méthodes */

    //Affichage

    public function __toString(){
        return $this->_acteur ." ". $this->_film; // . " ". $this -> _role
    }
  
}


?>