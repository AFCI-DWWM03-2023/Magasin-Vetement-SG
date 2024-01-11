<?php
require_once "./Model.class.php";
require_once "./Article.class.php";

class ArticleManager extends BDConnexion{
    private $article;

    public function ajoutArticle($article){
        $this->article[] = $article;
    }

    public function getArticle(){return $this->article;}
    
    public function chargementArticle(){
        $req = $this->getBDD()->prepare('SELECT * FROM articles');
        $req->execute();
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $value){
            $art = new Articles($value['nomArticle_Articles'],$value['description_Articles'],$value['taille_Articles'],$value['ref_Articles'],$value['image_Articles']);
            $this->ajoutArticle($art);

        }
    }
}