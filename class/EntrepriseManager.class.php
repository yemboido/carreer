<?php
/**
 * 
 */
class EntrepriseManager {

private $db;

	public function __construct($db)
	{
	  $this->setDb($db);
	}

	public function setDb($db){$this->db=$db;}
	

	public function ajouter(Annonce $annonce)
	{
		$q = $this->db->prepare('
			INSERT INTO annonce SET titre=:titre,  description= :description, domaineActivite = :domaineActivite, typeContrat = :typeContrat,lieux= :lieux ,idEntreprise=:idEntreprise');
			$q->bindValue(':titre', $annonce->getTitre() );
			$q->bindValue(':description', $annonce->getDescription() );
			$q->bindValue(':domaineActivite', $annonce->getDomaineActivite() );
			$q->bindValue(':typeContrat', $annonce->getTypeContrat() );
			$q->bindValue(':lieux',$annonce->getLieux());
			//$q->bindValue(':datePublication', $cours->getDatePublication() );
			$q->bindValue(':idEntreprise',"1");
		$q->execute();
	}

	public function listerAnnonce()
	{
		$annonce = array();
		$q = $this->db->query('SELECT * FROM annonce WHERE id =1');
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$annonce[] = new Annonce($donnees);
		}
		return $annonce;
	}


	public function afficherAnnonce($id)
		{
			$id = (int) $id;
			$q = $this->db->query('SELECT * FROM annonce WHERE id = '.$id);
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			return new Annonce($donnees);
		}
	public function modifierAnnonce(Annonce $annonce)
	{
		$q = $this->db->prepare('UPDATE annonce SET titre =:titre,description= :description, domaineActivite = :domaineActivite, typeContrat = :typeContrat,lieux= :lieux ,idEntreprise=:idEntreprise WHERE id = :id');
		$q->bindValue(':titre', $annonce->getTitre() );
		$q->bindValue(':description', $annonce->getDescription() );
		$q->bindValue(':domaineActivite', $annonce->getDomaineActivite() );
		$q->bindValue(':typeContrat', $annonce->getTypeContrat() );
		$q->bindValue(':lieux',$annonce->getLieux());
		$q->bindValue(':idEntreprise',"1");
		$q->bindValue(':id',$annonce->getId());

		$q->execute();
	}

	public function supprimerAnnonce($id)
	{
	$this->_db->exec('DELETE FROM annonce WHERE id = '.$id);
	}
	

	public function rechercherAnnonce()
	{		$typeContrat=$_POST["typeContrat"];
			$recherche=$_POST["recherche"];
			$q = $this->db->query('SELECT * FROM annonce WHERE typeContrat ='.$typeContrat.' && recherche ='.$recherche);
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			return new Annonce($donnees);
	}
}
