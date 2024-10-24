<?php

class Film {

    //attributs
    private string $titre;
    private DateTime $dateSortie;
    private string $synopsis;
    private int $duree;

    private GenreCinematographique $genreFilm; //objet GENRE car un FILM n'a qu'un seul genre (GENRE peut avoir plusieurs films donc il aura un tableau de films)
    private Realisateur $realisateur; //idem

    private array $castings;
    

    //constructeur
    public function __construct(string $titre, string $dateSortie, string $synopsis, int $duree, GenreCinematographique $genreFilm, Realisateur $realisateur){
        $this->titre = $titre;
        $this->dateSortie = new DateTime ($dateSortie);
        $this->synopsis = $synopsis;
        $this->duree = $duree;

        $this->genreFilm = $genreFilm;
        $this->genreFilm->addFilm($this); //chaque objet FILM sera rangé dans un tableau de films dans GENRE

        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this); //idem

        $this->castings = [];
    }


    //getter et setter
    
    public function getTitre() : string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    

    public function getDateSortie() : DateTime
    {
        return $this->dateSortie->format("d/m/Y");
    }

    public function setDateSortie(DateTime $dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    

    public function getSynopsis() : string
    {
        return $this->synopsis;
    }
 
    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

   

    public function getDuree() : int
    {
        return $this->duree;
    }

    public function setDuree(int $duree)
    {
        $this->duree = $duree;

        return $this;
    }


 
    public function getGenreFilm() : GenreCinematographique
    {
        return $this->genreFilm;
    }

    public function setGenreFilm(GenreCinematographique $genreFilm)
    {
        $this->genreFilm = $genreFilm;

        return $this;
    }



    public function getRealisateur() : Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;

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
    public function afficherCastingFilm (){
        $result = "<h4>Casting du film $this</h4><ul>";

        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getRole()->getNomPersonnage()." interprété.e par ".$casting->getActeur()->getPrenom()." ".$casting->getActeur()->getNom()."</li><br>";
        }

        $result .= "</ul>";

        return $result;
    }



    //toString
    public function __toString(){
        return $this->titre;
    }

}
