<?php 

class Commande extends Panier{

    public function __construct($nomArticle,$description,$taille,$ref,$image)
    {
        parent::__construct($nomArticle,$description,$taille,$ref,$image);
    }
}