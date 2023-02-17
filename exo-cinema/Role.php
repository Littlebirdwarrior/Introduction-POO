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

    //**Setter et Getter */

    //Role

    public function getNomRole(){
        return $this ->_nomRole;
    }

    public function setNomRole(Role $role){
        $this ->_nomRole = $role;
    }

    //toString

    public function __toString()
    {
        return $this->_nomRole;
    }

}


?>