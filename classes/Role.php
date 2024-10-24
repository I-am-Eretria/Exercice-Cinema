<?php

class Role {

    //attributs
    private string $nomPersonnage;
    private array $castings;
    

    public function __construct(string $nomPersonnage){
        $this->nomPersonnage = $nomPersonnage;
        $this->castings = [];
    }


    //getter et setter

    public function getNomPersonnage() : string
    {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }



    public function getCastings() : array
    {
        return $this->castings;
    }

    public function setCastings(array $castings)
    {
        $this->castings = $castings;

        return $this;
    }



    //tableau
    public function addCasting(Casting $casting){
        $this->castings [] = $casting;
    }



    //fonction
    public function afficherActeurDansRole (){
        $result = "<h4>Acteur(s) ayant incarné le rôle de $this</h4><ul>";

        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getActeur()->getPrenom()." ".$casting->getActeur()->getNom()." dans le film ".$casting->getFilm()->getTitre()."</li><br>";
        }

        $result .= "</ul>";

        return $result;
    }



    //toString
    public function __toString(){
        return $this->nomPersonnage;
    }

}