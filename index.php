<?php

require_once "Controller/ArticleController.php";
$articleController = new ArticleController;


if(empty($_GET['page'])){
    // require_once "Views/accueil.view.php";
    $articleController->afficherArticle();
}else{
    switch($_GET['page']){
        case "accueil" : $articleController->afficherArticle();

        break;

    }
}