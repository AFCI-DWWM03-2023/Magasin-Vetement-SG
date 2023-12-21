<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "Controller/ArticleController.php";
$articleController = new ArticleController;

try{
    if(empty($_GET['page'])){
        require_once "Views/accueil.view.php";
    }else{
        $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
        // echo "<pre>";
        // print_r($url);
        // echo "</pre>";
        switch($url[0]){
            case "accueil" : require_once "Views/accueil.view.php";
            break;
    
            case "crud" : 
                if(empty($url[1])){
                    $ArticleController->afficherArticles();
                }else if($url[1] === "l"){
                    $ArticleController->afficherArticle(intval($url[2]));
                }else if($url[1] === "a"){
                    $ArticleController->ajoutArticle();
                }else if($url[1] === "m"){
                    // echo $url[2];
                    $ArticleController->modificationArticle($url[2]);
                }else if($url[1] === "s"){
                    $ArticleController->suppressionArticle($url[2]);
                }else if($url[1] === "av"){
                    $ArticleController->ajoutArticleValidation();
                }else if($url[1] === "mv"){
                    $ArticleController->modifArticleValidation();
                }else{
                    throw new Exception("La page n'existe pas");
                }
    
            break;
            default: throw new Exception("La page n'existe pas");
    
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    