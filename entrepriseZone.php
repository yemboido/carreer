<?php 

	require_once "config.php";
    $manager=new AnnonceManager($bd);
            $annonceTable =$manager->listerAnnonce(); 

              if (empty($annonceTable))
              {
              echo " Vous n'avez pas encore fais d'annonce ";
              }
              else
              {

?>

	<table>
	<?php foreach ($annonceTable as $annonce)
              { ?>
		<tr> 
			
				<a href="gererAnnonce.php?id=<?php echo $annonce->getId(); ?>"> 
						
						<div>
							<?php echo $annonce->getTitre(); ?>
							<?php echo $annonce->getDescription(); ?>
							<?php echo $annonce->getDomaineActivite(); ?>
							<?php echo $annonce->getTypeContrat(); ?>
							<?php echo $annonce->getLieux(); ?>
							<?php echo $annonce->getDatePublication(); ?>
						</div>
				
				</a>	
		</tr>

		<?php }}?>

	</table>