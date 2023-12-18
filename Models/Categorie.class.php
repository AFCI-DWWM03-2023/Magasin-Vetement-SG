<?php

class Categorie{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNomCategorie(){return $this->nom;}

    public function setNomCategorie($nom){$this->nom = $nom;}
}