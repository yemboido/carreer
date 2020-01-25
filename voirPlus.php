

<?php
require_once "config.php";
require_once"includes/nav.php" ;

$id=$_GET["id"];

$manager=new AnnonceManager($bd);

$annonce=$manager->afficherAnnonce($id);
?>

 	<div class="row">
 		<div class="col-lg-12" style="text-align: center; height: 120px;">Nom Agence</div> 
 	</div>

 	<div class="row" >
 		
 		<div class=" col-lg-8">

 			<div class="row">
 				<h1><?php echo $annonce->getTitre(); ?></h1>
 			</div>
			
			<div class="row">
				
					<div class="col-lg-3"><?php echo $annonce->getDomaineActivite(); ?></div>
					<div class="col-lg-3"><?php echo $annonce->getTypeContrat(); ?></div>
					<div class="col-lg-3"><?php echo $annonce->getLieux(); ?></div>
					<div class="col-lg-3"><?php echo $annonce->getDatePublication(); ?>	</div>
			</div>
			
			<div class="row">
				<?php echo $annonce->getDescription(); ?>
					
			</div>	
			<div class="row">
				<div>
					<a mailto="#">Postuler</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4" style="background-color: yellow;">
			A propos de l'entreprise</br>
			<a href="mailto:nullepart@mozilla.org">Postuler</a>

		</div>

	</div>
