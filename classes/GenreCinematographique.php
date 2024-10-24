<?php

class GenreCinematographique {

    //attributs
    private string $genreFilm;
    private array $films; 
    

    //constructeur
    public function __construct(string $genreFilm){
        $this->genreFilm = $genreFilm;
        $this->films = []; //tableau vide où l'on va stocker chaque objet FILM créé
    }


    //getter et setter

    public function getGenreFilm() : string
    {
        return $this->genreFilm;
    }

    public function setGenreFilm(string $genreFilm)
    {
        $this->genreFilm = $genreFilm;

        return $this;
    }



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
    public function afficherFilmsParGenre (){
        $result = "<h4>Film(s) de $this</h4><ul>";

        foreach ($this->films as $film) {
            $result .= "<li>$film</li>";
        }

        $result .= "</ul>";

        return $result;
    }


    //toString
    public function __toString(){
        return $this->genreFilm;
    }

}