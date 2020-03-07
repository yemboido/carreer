<?php
require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Inscription</h2>
        
        <form action="" method="post">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control ">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="prenom" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Mail</label>
                <input type="email" name="mail" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Contact</label>
                <input type="tel" name="contact" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Mots de passe</label>
                <input type="password" name="motsDePasse" class="form-control" >
                <span class="help-block"></span>
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="s'inscrire" value="S'inscrire">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Avez vous deja un compte? <a href="login.php">Connectez vous ICI</a>.</p>
        </form>
    </div>    
</body>
</html>


<?php 

    
        
            $utilisateurTableau = array(
                                    'nom' => $_POST["nom"],
                                    'prenom'=>$_POST["prenom"],
                                    'mail'=>$_POST["mail"],
                                    'contact'=>$_POST["contact"],
                                    'motsDePasse'=>password_hash($_POST["motsDePasse"], PASSWORD_DEFAULT),
                                     );

        $utilisateur=new Utilisateur($utilisateurTableau);
        $manager= new UtilisateurManager($bd);
        $manager->ajouter($utilisateur);
     if(isset($_POST["S'incrire"]))
    {   
    }
    

?>