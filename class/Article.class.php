<?php 
class Articles{
    private $nomArticle;
    private $description;
    private $ref;
    private $image;

    public function __construct($nomArticle,$description,$ref,$image)
    {
        $this->nomArticle = $nomArticle;
        $this->description = $description;
        $this->ref = $ref;
        $this->image = $image; 
    }

    public function getNomArticle(){return $this->nomArticle;}
    public function getDescriptionArticle(){return $this->description;}
    public function getRefArticle(){return $this->ref;}
    public function getImageArticle(){return $this->image;}

    public function setNomArticle($nomArticle){$this->nomArticle = $nomArticle;}
    public function setDescriptionArticle($description){$this->description = $description;}
    public function setRefArticle($ref){$this->ref = $ref;}
    public function setImageArticle($image){$this->image = $image;}
}