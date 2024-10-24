<?php

class Personne {

    //attributs
    protected string $prenom;
    protected string $nom;
    protected string $genre;
    protected DateTime $dateNaissance;


    //constructeur
    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->genre = $genre;
        $this->dateNaissance = new DateTime ($dateNaissance);
    }

    //getter et setter
    
    public function getPrenom() : string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

   

    public function getNom() : string
    {
        return $this->nom;
    }
 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }



    public function getGenre() : string
    {
        return $this->genre;
    }
 
    public function setGenre(string $genre)
    {
        $this->genre = $genre;

        return $this;
    }



    public function getDateNaissance() : DateTime
    {
        return $this->dateNaissance->format("d/m/Y");
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    //toString
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

}