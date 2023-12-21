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

    public function afficherArticles(){
        
        $articles = $this->articleManager->getArticle();
        require_once "Views/accueil.view.php";
    }
    public function afficherArticle($id){
        $book = $this->articleManager->getArticleById($id);
        // echo $book->getNom();
        require "Views/afficherArticle.view.php";
    }

    public function ajoutArticle(){
        require "Views/ajoutArticle.view.php";
    }

}