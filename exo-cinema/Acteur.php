<?php
     class Acteur extends Personne {

        private array $_castings;

        //recupère les variables du parent "Personne"
        
        public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
            parent::__construct($nom, $prenom, $sexe, $naissance);
            $this-> _castings = [];
        }


        //------les setter et getter
        // Propre à la classe

        //acteur
         public function getActeur(){
             return $this->_acteur;
         }

         public function setActeur( Acteur $acteur): Acteur
         {
             return $this->_acteur = $acteur;
         }

        //Nécessaire au construct
         //casting
        public function getCasting(){
            return $this->_castings;
        }

        //les films
         public function setFilms(array $films){
            $this -> _castings = $films;
        }


        //**************J'ajoute des méthodes propre à Acteur

         public function __toString()
         {
              return $this ->getPrenom(). ' '. $this ->getNom();
         }

         //J'ajoute des films a mes acteurs

        public function addCasting (Casting $casting) {
            $this->_castings[] = $casting;//ici, j'ajoute les casting dans mon tableau vide

        }

        //J'affiche les films de chaque acteurs
        public function afficherFimographie(){
            $result ="<h3> Filmographie de " . $this->getPrenom(). " " .$this->getNom() ."</h3>";
            $castings = $this->_castings;
            foreach ($castings as $casting){
                $result .= $casting."<br>";
            }
            return $result;
        }


     }


?>