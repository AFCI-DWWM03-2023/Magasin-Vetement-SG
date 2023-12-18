<?php

require_once "Models/ArticleManager.php";
// require_once "Models/Model.class.php";

class ArticleController{
    
    private $articleManager;
    private $articles;

    public function __construct(){
        require_once "Models/ArticleManager.php";
        $this->articleManager = new ArticleManager;
        $this->articleManager->chargementArticle();

    }

    public function afficherArticle(){
        
        $articles = $this->articleManager->getArticle();
        require_once "Views/accueil.view.php";
    }
}