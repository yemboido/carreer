<?php

class Annonce {

    private $id;
    private $titre;
    private $description;
    private $domaineActivite;
    private $typeContrat;
    private $lieux;
    private $datePublication;




    public function __construct($donnees) {
    	$this->hydrate($donnees);
    }

    public function getId(){return $this->id;}
    public function getTitre(){return $this->titre;}
    public function getDescription(){return $this->description;}
    public function getDomaineActivite(){return $this->domaineActivite;}
    public function getTypeContrat(){return $this->typeContrat;}
    public function getLieux(){return $this->lieux;}
    public function getDatePublication(){return $this->datePublication;}

    public function setId($id){$this->id=$id;}
    public function setTitre($titre){$this->titre=$titre;}
    public function setDescription($description){$this->description=$description;}
    public function setDomaineActivite($domaine){$this->domaineActivite=$domaine;}
    public function setTypeContrat($contrat){$this->typeContrat=$contrat;}
    public function setLieux($lieux){$this->lieux=$lieux;}
    public function setDatePublication($date){$this->datePublication=$date;}

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