<?php 
	require_once "includes/nav.php";
	require_once "config.php";
    $manager=new EntrepriseManager($bd);
            $annonceTable =$manager->listerAnnonce(); 

              if (empty($annonceTable))
              {
              echo " Vous n'avez pas encore fais d'annonce ";
              }
              else
              {

?>
<link rel="stylesheet" type="text/css" href="static/css/entrepriseZone_css.css">
<div class="row">
	<div class="col-lg-12 banner"> Banner Poster une annonce / Consulter CV</div>
</div>
	<div class="row">

				<section class="col-lg-8">
					<p>Vos annonces faites:</p>
					<?php foreach ($annonceTable as $annonce)
	              { ?>

							<div class=" annonce col-lg-8">

								<div class="row">
									<div class="col-lg-10">
										<a href="voirPlus.php?id=<?php echo $annonce->getId(); ?>"><?php echo $annonce->getTitre(); ?></a>
									</div>	
								</div>

								<div class="row">
									<div class="col-lg-10">
										<?php echo $annonce->getDescription(); ?>
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-10">
										<?php echo $annonce->getDescription(); ?>
									</div>
								</div>


								<div class="row">
									<div class="col-lg-3">
										<?php echo $annonce->getDomaineActivite(); ?>
									</div>

									<div class="col-lg-3">
										<?php echo $annonce->getTypeContrat(); ?>
									</div>
									<div class="col-lg-3">
										<?php echo $annonce->getLieux(); ?>
									</div>

									<div class="col-lg-offset-6  col-lg-2"><?php echo $annonce->getDatePublication(); ?></div>
								</div>							
								
								
							</div>
							
					<?php }}?>		
				</section>

				<div class="col-lg-4 info">
						<p>Presentation de la structure</p>
						<img src="" alt="entreprise logo">
						<p>llll</p>
				</div>
	</div>