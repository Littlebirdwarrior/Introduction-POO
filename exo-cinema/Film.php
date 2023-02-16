<?php 

//Les films seront caractérisés par leur titre, leur date de sortie en France, 
//leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
//Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  
//Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).

class Film {
    private string $_title;
    private DateTime $_dateSortie;
    private int $_duree;//à convertir en DateTime
    private Realisateur $_realisateur;
    private string $_resume;
    private string $genre;
}


?>