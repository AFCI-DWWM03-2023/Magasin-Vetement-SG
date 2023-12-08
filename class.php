<?php

class Clients {
    private $nom;
    private $prenom;
    private $email;
    private $adresse;
    private $tel;
    private $pwd;

    public function __construct($nom,$prenom,$email,$adresse,$tel,$pwd)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->tel = $tel;
        $this->pwd = $pwd;
    }

    public function getNomClient(){return $this->nom;}
    public function getPrenomClient(){return $this->prenom;}
    public function getEmailClient(){return $this->email;}
    public function getAdresseClient(){return $this->adresse;}
    public function getTelClient(){return $this->tel;}
    public function getPwdClient(){return $this->pwd;}

    public function setNomClient($nom){$this->nom = $nom;}
    public function setPrenomClient($prenom){$this->prenom = $prenom;}
    public function setEmailClient($email){$this->email = $email;}
    public function setAdresseClient($adresse){$this->adresse = $adresse;}
    public function setTelClient($tel){$this->tel = $tel;}
    public function setPwdClient($pwd){$this->pwd = $pwd;}
}

class Articles{
    private $nomArticle;
    private $description;
    private $ref;
    // private $image;

    public function __construct($nomArticle,$description,$ref)
    {
        $this->nomArticle = $nomArticle;
        $this->description = $description;
        $this->ref = $ref;
        // $this->image = $image; 
    }

    public function getNomArticle(){return $this->nomArticle;}
    public function getDescriptionArticle(){return $this->description;}
    public function getRefArticle(){return $this->ref;}
    // public function getImageArticle(){return $this->image;}

    public function setNomArticle($nomArticle){$this->nomArticle = $nomArticle;}
    public function setDescriptionArticle($description){$this->description = $description;}
    public function setRefArticle($ref){$this->ref = $ref;}
    // public function setImageArticle($image){$this->image = $image;}
}

class Categorie{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNomCategorie(){return $this->nom;}

    public function setNomCategorie($nom){$this->nom = $nom;}
}

class Panier extends Articles{

    public function __construct($nomArticle,$description,$ref)
    {
        parent::__construct($nomArticle,$description,$ref);
    }

}

class Commande extends Panier{

    public function __construct($nomArticle,$description,$ref)
    {
        parent::__construct($nomArticle,$description,$ref);
    }
}