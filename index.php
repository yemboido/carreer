<?php

require_once "config.php";

require_once "includes/nav.php";
//$uti=new Utilisateur();
$manager=new AnnonceManager($bd);
            $annonceTable =$manager->listerAnnonce(); 

              if (empty($annonceTable))
              {
              echo " Pas d'annonce dans la base ";
              }
              else
              {

?>


<div class="main">
	<form>
		<div class="input-group col-lg-8">
			<input type="search" class="form-control" >
			<span class="input-group-btn">
			<button class="btn btn-default" type="button">Valider</button>
			</span>
		</div>
	</form>

	<?php foreach ($annonceTable as $annonce)
              { ?>
				
						
						<a href=""><div>
							<?php echo $annonce->getTitre(); ?>
							<?php echo $annonce->getDescription(); ?>
							<?php echo $annonce->getDomaineActivite(); ?>
							<?php echo $annonce->getTypeContrat(); ?>
							<?php echo $annonce->getLieux(); ?>
							<?php echo $annonce->getDatePublication(); ?>
						</div></a>
				
					
		

		<?php }}?>

	</table>
</div>