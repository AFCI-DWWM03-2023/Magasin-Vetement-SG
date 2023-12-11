<?php

class ArticleManager{
    private $article;

    public function ajoutArticle($article){
        $this->article[] = $article;
    }

    public function getArticle(){return $this->article;}
}