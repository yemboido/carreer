<?php
require_once 'config.php';
require_once 'includes/nav.php';

?>


		<form action="" method="POST" class=" form-horizontal col-lg-6">

			<div class="form-group"><legend>Formulaire de depot d'annonces</legend>	</div>
				
			
				<div class="form-group">
					<label class="">titre:</label>
					<div class=""></div>
					<input type="text" name="titre" required class="form-control" value=""> 
				</div>
		
			

			
				<div class="form-group">
					<label class="">description du poste:</label>
					<div class="">
						<textarea name="description" required="" class="form-control" value="" style="height=400;"></textarea>
					</div>
				</div>
				

			
				<div class="form-group">
					<label class="">domaine d'activite:</label>
					<div class="">
					<input type="text" name="domaineActivite"  class="form-control" required="" value="">
				</div>	
				</div>
			
			
			
				<div class="form-group">
					<label class="">typeContrat:</label>
					<div class="">
						<select class="form-control" name="typeContrat">
							<option value="CDD">CDD</option>
							<option value="CDI">CDI</option>
							<option value="Stage">Stage</option>
							<option value="Alternance">Alternance</option>
					</select>
					</div>	
				</div>
			

			
				<div class="form-group">
					<label class="">lieux:</label>
					<div class="">
					<input type="text" name="lieux" class="form-control" required="" value="">
					</div>
				</div>
			

			<div class="form-group">
				<button class="pull-right btn btn-primary" type="submit" name="envoyer">Envoyer</button>
			</div>
				
		</form>
		

<?php 

	if(isset($_POST["envoyer"]))
	{
		
			$annonceTableau = array(
									'titre' => $_POST["titre"],
									'description'=>$_POST["description"],
									'domaineActivite'=>$_POST["domaineActivite"],
									'typeContrat'=>$_POST["typeContrat"],
									'lieux'=>$_POST["lieux"],
									 );

		$annonce=new Annonce($annonceTableau);
		$manager= new AnnonceManager($bd);
		$manager->ajouter($annonce);
		
	}
	

?>
