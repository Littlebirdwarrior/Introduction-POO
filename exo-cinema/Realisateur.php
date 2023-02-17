<?php 

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

     class Realisateur extends Personne {

        private array $_films;

        //recupère les variables du parent "Personne"
        
        public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
            parent::__construct($nom, $prenom, $sexe, $naissance);
            $this-> _films = [];
        }

        //J'ajoute des méthodes propre à Realisateur
        

        //les setter et getter

        public function getFilms(){
            return $this->_films;
        }

        public function setFilms(array $films){
            $this -> _films = $films;
        }

        //to string -> juste le nom et prenom

        public function __toString(){
            return $this->getPrenom() . " " .$this->getNom();
        }

        

        //J'ajoute des films a mes acteurs

        public function addFilm (Film $films) {
            $this->_films[] = $films;//ici, j'ajoute les livres dans mon tableau vide

        }

        //J'affiche les films de chaque acteurs
        public function afficherFilmReal(){
            $result ="<h3> Filmograhie de " . $this->getPrenom(). " " .$this->getNom() ."</h3>";
            $films = $this->_films;
            foreach ($films as $film){
                $result .= $film ."<br>";
            }
            return $result;
        }
     }

?>

