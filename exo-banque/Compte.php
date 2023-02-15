<?php
    class Compte {
        //** déclaration propriete */
        private string $_libelle;
        private float $_soldeInit;
        private string $_devise;
        private Titulaire $_titulaire;

        //**Mon construct */
        public function __construct (string $libelle, float $soldeInit, string $devise, Titulaire $titulaire) {
            $this ->_libelle = $libelle;
            $this ->_soldeInit = $soldeInit;
            $this ->_devise = $devise;
            $this ->_titulaire = $titulaire;
            $this ->_titulaire->addCompte($this);
        }

        //**Setter / Getter */

        //titulaire

        public function getLibelle(){
            return $this->_libelle;
        }

        public function setLibelle( string $libelle){
            $this->_libelle = $libelle;
        }

        //solde initial

        public function getSoldeInit(){
            return $this->_soldeInit;
        }

        public function setSoldeInit( float $soldeInit){
            $this->_soldeInit = $soldeInit;
        }        

        //devise

        public function getDevise(){
            return $this->_devise;
        }

        public function setDevise( string $devise){
            $this->_devise = $devise;
        }

        //titulaire

        public function getTitulaire(){
            return $this->_titulaire;
        }

        public function setTitulaire( Titulaire $titulaire){
            $this->_titulaire = $titulaire;
        }

        //**Methode */

        //Je paramètre mes floats (pas plus loin que les centimes)
        public function getSoldeInitFloat() {
            $soldeInitFloat = round($this->getSoldeInit(), 3);
            return $soldeInitFloat;
        }


        //J'affiche mes comptes
        //Mon toString
        public function __toString()
        {
            return $this->getLibelle(). " " .$this->getSoldeInitFloat(). " " .$this->getDevise(). " " .$this->getTitulaire();
        }

    };

?>