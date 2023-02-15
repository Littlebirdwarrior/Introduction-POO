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
            $this ->_titulaire->addCompte($this);//ici, mes titulaire sont dans un tableau resultat de addCompte
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
            $soldeInitFloat = round($this->_soldeInit, 3);
            return $soldeInitFloat;
        }


        //J'affiche mes comptes
        //Mon toString
        public function __toString()
        {
            return $this->_libelle. " " .$this->_soldeInit. " " .$this->_devise. " " .$this->_titulaire;
        }

        //Créditer le compte de X euros

        public function credit(float $credit){
            $this->_soldeInit += $credit;
            echo "Le compte ". $this ->_libelle." de ". $this ->_titulaire ." a été débité de ". $credit . " euros<br>
                Son solde est de ". $this -> _soldeInit. " euros<br>";
            // $this->_soldeInit = $this->_soldeInit + $credit;
        }

        //Débiter le compte de X euros
        public function debit(float $debit){
            $this->_soldeInit -= $debit;
            echo "Le compte ". $this ->_libelle." de ". $this ->_titulaire ." a été débité de ". $debit . " euros<br>
                Son solde est de ". $this -> _soldeInit. " euros<br>";
            // $this->_soldeInit = $this->_soldeInit + $credit;
        }
            
        //Effectuer un virement d'un compte à l'autre.
        public function transfert(Compte $destination, float $transfert){
            $this -> debit($transfert);
            $destination -> credit($transfert);
            echo "La somme de ".$transfert." euros a été transférée du ".$this ->_libelle." de ". $this ->_titulaire ." à ". $destination ->_libelle. " de " . $destination->_titulaire ." <br>";
            
        }
    };

    
?>