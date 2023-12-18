<?php
require_once "Models/Model.class.php";
require_once "Models/Article.class.php";

class ArticleManager extends BDConnexion{
    private $articles;

    public function ajoutArticle($article){
        $this->articles[] = $article;
    }

    public function getArticle(){return $this->articles;}
    
    public function chargementArticle(){
        $req = $this->getBDD()->prepare('SELECT * FROM articles');
        $req->execute();
        $mesArticles = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesArticles as $value){
            $art = new Articles($value['nomArticle_Articles'],$value['description_Articles'],$value['taille_Articles'],$value['ref_Articles'],$value['image_Articles']);
            $this->ajoutArticle($art);

        }
    }
}