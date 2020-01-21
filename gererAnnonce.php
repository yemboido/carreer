<?php
require_once 'config.php';
require_once 'includes/nav.php';

?>


		<form action="" method="POST" class="col-lg-6">

			<div class="form-group"><legend>Formulaire de depot d'annonces</legend>	</div>
				
			<div class="row">
				<div class="form-group">
					<label class="col-lg-4">titre:</label>
					<div class="col-lg-8"></div>
					<input type="text" name="titre" required class="form-control" value=""> 
				</div>
			</div>
			

			<div class="row">
				<div class="form-group">
					<label class="col-lg-4">description du poste:</label>
					<div class="col-lg-8">
						<textarea name="description" required="" class="form-control" value=""></textarea>
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="form-group">
					<label class="col-lg-2">domaine d'activite:</label>
					<div class="col-lg-10">
					<input type="text" name="domaineActivite"  class="form-control" required="" value="">
				</div>	
				</div>
			</div>
			
			<div class="row">
				<div class="form-group">
					<label class="col-lg-2">typeContrat:</label>
					<div class="col-lg-10">
						<select class="form-control">
						<option>CDD</option>
						<option>CDI</option>
						<option>Stage</option>
						<option>Alternance</option>
					</select>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="form-group">
					<label class="col-lg-2">lieux:</label>
					<div class="col-lg-10">
					<input type="text" name="lieux" class="form-control" required="" value="">
					</div>
				</div>
			</div>

			<div class="form-group">
				<button class="pull-right btn btn-danger">Envoyer</button>
			</div>
				
		</form>

<?php 

	if(isset($_POST["envoyer"]))
	{
		
			$annonceTableau = array('id'=>$id,
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
