<?php

class Panier extends Articles{

    public function __construct($nomArticle,$description,$taille,$ref,$image)
    {
        parent::__construct($nomArticle,$description,$taille,$ref,$image);
    }

}