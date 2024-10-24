<?php

class Realisateur extends Personne{      //extends permet à Realisateur d’hériter de la classe Personne

    //attributs
    private array $films;

    //constructeur
    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){

        $this->films = []; //tableau vide où l'on va stocker chaque objet FILM créé
        
        parent::__construct($prenom, $nom, $genre, $dateNaissance);
    }


    //getter et setter
    
    public function getFilms() : array
    {
        return $this->films;
    }

    public function setFilms(array $films)
    {
        $this->films = $films;

        return $this;
    }


    //tableau
    public function addFilm (Film $film){
        $this->films[] = $film; //chaque object FILM sera ajouté dans ce tableau 
    }


    //fonction
    public function afficherFilmographieRealisateur (){
        $result = "<h4>Film(s) réalisé(s) par $this</h4><ul>";

        foreach ($this->films as $film) {
            $result .= "<li>$film</li>";
        }

        $result .= "</ul>";

        return $result;
    }

}