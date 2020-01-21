<?php

class Entreprise  {

    private $id;
    private $nom;
    private $adresse;
    private $domaineActivite;


    public function __construct($donnees) {
         $this->hydrate($donnees);

    }

     public function getId(){return $this->id;}
     public function getNom(){return $this->nom;}
     public function getDomaineActivite(){return $this->domaineActivite;}
     public function getAdresse(){return $this->adresse;}


    public function setId($id){$this->id=$id;}
    public function setNom($nom){$this->nom=$nom;}
    public function setDomaineActivite($domaine){$this->domaineActivite=$domaine;}
    public function setAdresse($adresse){$this->adresse=$adresse;}

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