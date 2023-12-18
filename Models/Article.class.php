<?php 
class Articles{
    private $nomArticle;
    private $description;
    private $ref;
    private $image;
    private $taille;

    public function __construct($nomArticle,$description,$taille,$ref,$image)
    {
        $this->nomArticle = $nomArticle;
        $this->description = $description;
        $this->taille = $taille;
        $this->ref = $ref;
        $this->image = $image; 
    }

    public function getNomArticle(){return $this->nomArticle;}
    public function getDescriptionArticle(){return $this->description;}
    public function getTailleArticle(){return $this->taille;}
    public function getRefArticle(){return $this->ref;}
    public function getImageArticle(){return $this->image;}

    public function setNomArticle($nomArticle){$this->nomArticle = $nomArticle;}
    public function setDescriptionArticle($description){$this->description = $description;}
    public function setNomTaille($taille){$this->taille = $taille;}
    public function setRefArticle($ref){$this->ref = $ref;}
    public function setImageArticle($image){$this->image = $image;}
}