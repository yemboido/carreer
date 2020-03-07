<?php require_once "config.php" ;?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.css">
    <!--<link rel="stylesheet" type="text/css" href="static/css/signin.css">-->
    
</head>
<body class="container">

 <div class="row">
  <div class="col-lg-4"></div>
  <form class="col-lg-4" action="" method="POST">
        <img src="" alt="img">
        <input type="mail" name="mail" placeholder="Mail" class="form-control" required="">
        <input type="password" name="motsDePasse" placeholder="Mots de passe"class="form-control" required="">
        <p>Pas de compte? <a href="register.php">S'inscrire</a></p>
        <div class="form-group">
        <button class="pull-right btn btn-primary" type="submit" name="connexion">Connexion</button>
      </div>
      <?php  if(isset($erreur)){echo $erreur;}?>
    </form>
  <div class="col-lg-4"></div>
</div>

</body>
</html>

<?php
  
  
  $utilisateurTableau  = array(
                                  'mail' =>$_POST["mail"] ,
                                  'motsDePasse'=>$_POST["motsDePasse"],
                              );
  $utilisateur=new Utilisateur($utilisateurTableau);

  $manager=new UtilisateurManager($bd);

  $manager->connexion($utilisateur); ?>