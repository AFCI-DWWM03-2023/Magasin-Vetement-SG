<?php

class Panier extends Articles{

    public function __construct($nomArticle,$description,$ref,$image)
    {
        parent::__construct($nomArticle,$description,$ref,$image);
    }

}