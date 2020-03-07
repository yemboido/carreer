<?php
/**
 * 
 */
class UtilisateurManager
{
	
	private $db; 

	public function __construct($db)
	{
	  $this->setDb($db);
	}

	public function setDb($db){$this->db=$db;}

	public function ajouter(Utilisateur $Utilisateur)

	{
    
		$q = $this->db->prepare('INSERT INTO utilisateur SET nom=:nom, prenom= :prenom,mail =:mail,contact =:contact,motsDePasse= :motsDePasse');
			$q->bindValue(':nom', $Utilisateur->getNom() );
			$q->bindValue(':prenom', $Utilisateur->getPrenom() );
			$q->bindValue(':mail', $Utilisateur->getMail() );
			$q->bindValue(':contact', $Utilisateur->getContact() );
			$q->bindValue(':motsDePasse',$Utilisateur->getMotsDePasse());
			
		$q->execute();
	}
	public function connexion(Utilisateur $utilisateur)
	{      
			$mail=$utilisateur->getMail();
			$motsDePasse=$utilisateur->getMotsDePasse();

			$sql=" SELECT * FROM utilisateur WHERE mail ='$mail' AND motsDePasse ='$motsDePasse' ";
			$q = $this->db->query($sql);
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			
		
	     if($donnees)
	     {
	     		header("location: index.php");
	        return new Utilisateur($donnees);
	     }
	      
	         
	      
	      	$erreur= "Mail ou mots de passe incorrect ";
	      
		}
}