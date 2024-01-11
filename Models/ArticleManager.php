<?php
require_once "./Models/Model.class.php";
require_once "./Models/Article.class.php";

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

    public function getArticleById($id){
        for($i=0;$i<count($this->articles);$i++){
            if($this->articles[$i]->getIdArticle() == $id){
                return $this->articles[$i];
            }
        }
    }
    
    public function ajoutArticleBD($nom,$desc,$taille,$ref,$image){

        $req ="INSERT INTO articles(nomArticle_Articles,description_Articles,taille_Articles,ref_Articles,image_Articles)
        values (:nomArticle_Articles,:description_Articles,:taille_Articles,:ref_Articles,:image_Articles)";

        $stmt =$this->getBDD()->prepare($req);
        $stmt->bindValue(":nomArticle_Articles",$nom,PDO::PARAM_STR);
        $stmt->bindValue(":description_Articles",$desc,PDO::PARAM_STR);
        $stmt->bindValue(":taille_Articles",$taille,PDO::PARAM_INT);
        $stmt->bindValue(":ref_Articles",$ref,PDO::PARAM_INT);
        $stmt->bindValue(":image_Articles",$image,PDO::PARAM_STR);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $article = new Articles($this->getBDD()->lastInsertId(),$nom,$desc,$taille,$ref,$image);
            $this->ajoutArticle($article);
        }

    }

    public function suppressionArticleBD($id){
        $req = "DELETE FROM articles WHERE idArticles_Articles = :idArticles_Articles";
        $stmt = $this->getBDD()->prepare($req);
        $stmt->bindValue(":idArticles_Articles",$id,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat>0){
        $article=$this->getArticleById($id);
        unset($article);
        }
    }

    public function modifArticleBD($id,$nom,$desc,$taille,$ref,$image){
        $req = "UPDATE articles SET article = :nomArticle_Articles, nbPages = :description_Articles,taille = :taille_Articles,ref = ref_Articles,image = image_Articles WHERE idArticles_Articles = :idArticles_Articles";
        $stmt = $this->getBDD()->prepare($req);
        $stmt->bindValue(":idArticles_Articles",$id,PDO::PARAM_INT);
        $stmt->bindValue(":nomArticle_Articles",$nom,PDO::PARAM_STR);
        $stmt->bindValue(":description_Articles",$desc,PDO::PARAM_INT);
        $stmt->bindValue(":taille_Articles",$taille,PDO::PARAM_STR);
        $stmt->bindValue(":ref_Articles",$ref,PDO::PARAM_STR);
        $stmt->bindValue(":image_Articles",$image,PDO::PARAM_STR);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $this->getArticleById($id)->setNom($nom);
            $this->getArticleById($id)->setDescription($nom);
            $this->getArticleById($id)->setTaille($nom);
        }
    }

}