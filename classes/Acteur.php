<?php

class Acteur extends Personne{      //extends permet à Acteur d’hériter de la classe Personne

    //attributs
    private array $castings;

    //constructeur
    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){

        $this->castings = [];

        parent::__construct($prenom, $nom, $genre, $dateNaissance);
    }


    //getter et setter

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
    public function afficherFilmographieActeur (){
        $result = "<h4>Filmographie de $this</h4><ul>";

        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getFilm()->getTitre()."</li>";
        }

        $result .= "</ul>";

        return $result;
    }

}

