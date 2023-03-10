<?php

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Film
{
    private string $_titre;
    private int $_dateSortie;
    private int $_duree;//à convertir en DateTime
    private Realisateur $_realisateur;
    private string $_resume;
    private Genre $_genre;

    private array $_castings;

    public function __construct(string $titre, int $dateSortie, Realisateur $realisateur, int $duree, string $resume, Genre $genre)
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_resume = $resume;
        $this->_realisateur->addFilm($this);//cf class realisateur
        $this->_genre = $genre;
        $this->_genre->addFilm($this);//cf class genre
        $this->_castings = [];
    }

    //**Setter et Getter */
    //Titre

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }

    //date
    public function getDateSortie(): int
    {
        return $this->_dateSortie;
    }

    public function setDateSortie(int $dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }

    //duree
    public function getDuree()
    {
        return $this->_duree;

    }

    public function setDuree(int $duree)
    {
        $this->_duree = $duree;
    }

    //resume
    public function getResume()
    {
        return $this->_resume;
    }

    public function setResume(string $resume)
    {
        $this->_resume = $resume;
    }

    //Realisateur

    //genre
    public function getRealisateur()
    {
        return $this->_realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->_realisateur = $realisateur;
    }

    //genre
    public function getGenre()
    {
        return $this->_genre;
    }

    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
    }

    //role


    //**Méthode */

    //Convertir dateSortie en année
    public function dateSortie()
    {
        $getDate = $this->getDateSortie(); //je récupère ma date au format in
        $dateTimeStamp = mktime(0, 0, 0, 1, 1, $getDate);//je la convertir en Timestamp Unix, la fonction a besoin des arguments suivants "mktime($heure, $minute, $seconde, $mois, $jour, $annee, $est_dst)"
        $dateSortie = date('Y', $dateTimeStamp);//je crée ma date et la formate ma date en année
        return "Année de sortie : " . $dateSortie;
    }

    //Convertir la duree du format int en durée

    public function getDureeTime()
    {
        $getDate = $this->getDuree();//je recupere ma durée en minutes
        $convertSecond = $getDate * 60;//je convertis mes minutes en seconde (le calcul des dates et durées se fait à partir des timestamp unix (en seconde))
        $date = date('H:i', $convertSecond); // Creation et formatage de la date
        return "Durée : " . $date;
    }

    //Le casting

    public function addCasting($_casting)
    {
        $this->_castings[] = $_casting;
    }

    public function afficherCasting()
    {
        $result = "<b> Casting de " . $this->getTitre(). "</b><br>";
        if (count($this->_castings) == 0) {
            // message pas de casting
            $result .= "Pas de casting pour ce film !";
        } else {
            foreach ($this->_castings as $casting) {
                $result .= $casting->getNomRole() . " est joué par " . $casting->getActeur() . "<br>";
            }
        }
        return $result;
    }


    //Affichage
    public function __toString()
    {
        return "<b>" . $this->getTitre() . "</b>
                <br> " . $this->DateSortie() .
            "<br> " . $this->getDureeTime() .
            " <br> Genre : " . $this->getGenre() .
            " <br> Réalisateur : " . $this->getRealisateur() .
            " <br> Synopsys : " . $this->getResume() . ".<br>";
    }


}


?>