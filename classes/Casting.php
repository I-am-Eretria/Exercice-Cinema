<?php

class Casting {

    //attributs
    private Film $film;
    private Acteur $acteur;
    private Role $role;


    //constructeur
    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->film = $film;
        $this->film->addCasting($this);

        $this->acteur = $acteur;
        $this->acteur->addCasting($this);

        $this->role = $role;
        $this->role->addCasting($this);
    }


    //getter et setter
    
    public function getFilm() : Film
    {
        return $this->film;
    }

    public function setFilm(Film $film)
    {
        $this->film = $film;

        return $this;
    }

   
    
    public function getActeur() : Acteur
    {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }


    
    public function getRole() : Role
    {
        return $this->role;
    }

    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }
    
}