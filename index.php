<?php

require_once "config.php";

//require_once "includes/nav.php";
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


		<div class="container-fluid">

			<?php require_once"includes/nav.php" ;?>

			<div class="row">
				<div class="col-lg-12">
					<form class="row search" action="index.php" method="POST">
						
						<div class="col-2"></div>
					<div class="input-group col-lg-offset-2 col-lg-6">
						
						<input name="recherche" type="search" class="form-control input-lg" placeholder="Recherchez ici :)" >
						
					<!--	<select class="form-control" name="typeContrat">
									<option value="CDD">CDD</option>
									<option value="CDI">CDI</option>
									<option value="Stage">Stage</option>
									<option value="Alternance">Alternance</option>
									<option value="*" default>Toutes Annonce</option>
						</select>-->
						<span class="input-group-btn">
						<button class="btn btn-primary" type="submit" name="rechercher">Valider</button>
						</span>
					</div>
					</form>
				</div>
			</div>

			<div class="row">

				<nav class="col-lg-2 menu" >
				
				</nav>

				<section class="col-lg-10">
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
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-2"></div>
				<div class="col-lg-offset-2 col-lg-4">
					<nav aria-label="Page navigation ">
				  <ul class="pagination pagination-lg">
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				        <span class="sr-only">Previous</span>
				      </a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
			</nav>
		</div>
			</div>

			<footer class="row">
				@2020
			</footer>

		</div>


<?php
	if (isset($_POST["rechercher"])) {
		
		
		$annonceTable=$manager->rechercherAnnonce();
	}