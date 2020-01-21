<?php

class Utilisateur {

    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $contact;
    private $motsDePasse;
    private $dateCreation;

    public function setId($id){$this->id=$id;}
    public function setNom($nom){$this->nom=$nom;}
    public function setPrenom($prenom){$this->prenom=$prenom;}
    public function setMail($mail){$this->mail=$mail;}
    public function setContact($contact){$this->contact=$contact;}
    public function setMotsDePasse($mots_de_passe){$this->motsDePasse=$mots_de_passe;}
    public function setDateCreation($date){$this->dateCreation=$date;}

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getMail(){return $this->mail;}
    public function getContact(){return $this->contact;}
    public function getMotsDePasse(){return $this->motsDePasse;}

   
    public function __construct($donnees) {
        $this->hydrate($donnees);

    }

     public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
            {
                $method = 'set'.ucfirst($key);
                if (method_exists($this, $method))
                    {
                    $this->$method($value);
                    }
            }
    }


}