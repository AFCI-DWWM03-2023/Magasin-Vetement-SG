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