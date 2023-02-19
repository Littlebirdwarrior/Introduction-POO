<?php 

 //Creer la classe Role (tableau casting qui renvois acteur et role)
    //Dans ROLE Il y aura un getter qui renvoie le nom du personnage et un getter qui renvoie tous les castings du rôle
    //Une méthode permettra d'afficher tous les acteurs + films qui ont incarnés ce rôle précis

class Role {

    private string $_nomRole;
    private array $_castings;


    public function __construct(string $nomRole){
        $this -> _nomRole = $nomRole;
        $this -> _castings = [];
    }

    // To string

    public function __toString()
    {
        return $this->getNomRole();
    }

    // GETTER & SETTERS

    // Role

    public function getNomRole(): string
    {
        return $this->_nomRole;
    }


    public function setNomRole($nomRole)
    {
        return $this->_nomRole = $nomRole;

    }

    // Casting
    public function getCastings()
    {
        return $this->_castings;
    }


    public function setCastings($castings)
    {
       return $this->_castings = $castings;

    }


    //*Methode*/

    public function addCasting($castings)
    {
       return $this->_castings[] = $castings;

    }


}

?>