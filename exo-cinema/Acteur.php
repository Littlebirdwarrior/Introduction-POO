<?php
     class Acteur extends Personne {

        private array $_castings;

        //recupère les variables du parent "Personne"
        
        public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
            parent::__construct($nom, $prenom, $sexe, $naissance);
            $this-> _castings = [];
        }

        //J'ajoute des méthodes propre à Acteur
        

        //les setter et getter

        public function getCasting(){
            return $this->_castings;
        }

        public function setFilms(array $films){
            $this -> _castings = $films;
        }

        //to string -> juste le nom et prenom

        public function __toString(){
            return $this->getPrenom() . " " .$this->getNom();
        }

        

        //J'ajoute des films a mes acteurs

        public function addCasting (Casting $casting) {
            $this->_castings[] = $casting;//ici, j'ajoute les livres dans mon tableau vide

        }

        //J'affiche les films de chaque acteurs
        public function afficherCastingActeur(){
            $result ="<h2> Casting de " . $this->getPrenom(). " " .$this->getNom() ."</h2>";
            $castings = $this->_castings;
            foreach ($castings as $casting){
                $result .= $casting."<br>";
            }
            return $result;
        }


     }


?>