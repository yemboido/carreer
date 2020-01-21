if (isset($_GET['id'])) {
			
			$id=$_GET['id'];
			$manager= new AnnonceManager($bd);
			$annonce=$manager->afficherAnnonce($id);
}
?>

<?php echo $annonce->getTitre() ; ?>
<?php echo $annonce->getDescription();  ?>
<?php  echo $annonce->getDomaineActivite(); ?>
<?php  echo $annonce->getTypeContrat();  ?>
<?php echo $annonce->getLieux();   ?>

if (isset($_POST["modifier"])) {
		$annonceTableau = array(
									'titre' => $_POST["titre"],
									'description'=>$_POST["description"],
									'domaineActivite'=>$_POST["domaineActivite"],
									'typeContrat'=>$_POST["typeContrat"],
									'lieux'=>$_POST["lieux"],
									 );

		$annonce=new Annonce($annonceTableau);
		$manager= new AnnonceManager($bd);
		$manager->modifierAnnonce($annonce);
		# code...
	}