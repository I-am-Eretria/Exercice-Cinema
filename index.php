<h1>Exerices POO PHP</h1>
<h2>Partie III: Cinéma</h2>

<h3>Consignes:</h3>
<p>Vous  avez  en  charge  de  gérer  différentes  entités  autour  de  la  thématique  du cinéma.</p>

<p>
Les  films  seront  caractérisés  par  leur titre,  leur date de  sortie en  France, leur durée  (en  minutes) 
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film 
(synopsis)  pourra  éventuellement  être  renseigné.  Chaque  film  est  caractérisé  par  un  seul  genre 
cinématographique (science-fiction, aventure, action, ...). 
</p>

<p>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le 
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) 
joué par l’acteur dans le(s) film(s) concerné(s).
</p>

<p>Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre 
en place correctement !</p>

<p>Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure 
où ce rôle a été incarné par plusieurs acteurs.)</p>

<h4>On doit pouvoir :</h4>
<ul>
    <li>Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de 
    Batman : Michael Keaton, Val Kilmer, George Clooney, ...)</li>
    <li>Lister  le  casting  d'un  film  (dans  le  film  Star  Wars  Episode  IV,  Han  Solo  a  été  incarné  par 
    Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...) </li>
    <li>Lister  les  films  par  genre  (exemple  :  le  genre  SF  est  associé  à  X  films  :  Star  Wars,  Blade 
    Runner, ...) </li>
    <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?) </li>
    <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
</ul>

<h3>Résultats:</h3>

<?php

//autochargement de classes php
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



//GENRE CINÉMATOGRAPHIQUE
$sf = new GenreCinematographique ("Science-Fiction");
$fantasy = new GenreCinematographique ("Fantasy");


//RÉALISATEURS
$jamesCameron = new Realisateur ("James", "Cameron", "masculin", "1954-08-16");
$stefenFangmeier = new Realisateur ("Stefen", "Fangmeier", "masculin", "1960-12-08");


//FILMS
$avatar1 = new Film ("Avatar", "2011-11-02", "synopsissssss", 162, $sf, $jamesCameron);
$avatar2 = new Film ("Avatar : La Voie de l'Eau", "2022-12-14", "synopsissssss", 192, $sf, $jamesCameron);
$eragonFilm = new Film ("Eragon", "2006-12-20", "synopsissssss", 104, $fantasy, $stefenFangmeier);


//ACTEURS
$samWorthington = new Acteur ("Sam", "Worthington", "masculin", "1976-08-02");
$zoeSaldana = new Acteur ("Zoe", "Saldaña", "féminin", "1978-06-19");
$edwardSpeleers = new Acteur ("Edward", "Speleers", "masculin", "1988-11-07");
$jeremyIrons = new Acteur ("Jeremy", "John Irons", "masculin", "1948-09-19");


//RÔLES
$jakeSully = new Role ("Jake Sully");
$neytiri = new Role ("Ney'tiri");
$eragonRole = new Role ("Eragon");
$brom = new Role ("Brom");


//CASTING
$castingAvatar = new Casting ($avatar1, $samWorthington, $jakeSully);
$castingAvatar = new Casting ($avatar1, $zoeSaldana, $neytiri);
$castingAvatar2 = new Casting ($avatar2, $samWorthington, $jakeSully);
$castingAvatar2 = new Casting ($avatar2, $zoeSaldana, $neytiri);
$castingEragon = new Casting ($eragonFilm, $edwardSpeleers, $eragonRole);
$castingEragon = new Casting ($eragonFilm, $jeremyIrons, $brom);




//ACTEURS AYANT JOUÉ DANS LE RÔLE DE
echo "<h2>Lister la liste des acteurs ayant incarné un rôle précis</h2>";
echo $jakeSully->afficherActeurDansRole();
echo $neytiri->afficherActeurDansRole();
echo $eragonRole->afficherActeurDansRole();
echo $brom->afficherActeurDansRole();


//CASTING FILMS
echo "<h2>Lister  le  casting  d'un  film</h2>";
echo $avatar1->afficherCastingFilm();
echo $avatar2->afficherCastingFilm();
echo $eragonFilm->afficherCastingFilm();


//FILMS PAR GENRE
echo "<h2>Lister  les  films  par  genre</h2>";
echo $sf->afficherFilmsParGenre();
echo $fantasy->afficherFilmsParGenre();


//FILMOGRAPHIE ACTEUR
echo "<h2>Lister la filmographie d'un acteur </h2>";
echo $samWorthington->afficherFilmographieActeur();
echo $zoeSaldana->afficherFilmographieActeur();
echo $edwardSpeleers->afficherFilmographieActeur();
echo $jeremyIrons->afficherFilmographieActeur();


//FILMOGRAPHIE RÉALISATEUR
echo "<h2>Lister la filmographie d'un réalisateur </h2>";
echo $jamesCameron->afficherFilmographieRealisateur();
echo $stefenFangmeier->afficherFilmographieRealisateur();


