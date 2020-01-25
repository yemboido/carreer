
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="static/css/signin.css">
    
</head>
<body>
    <div class="wrapper">
        
        <form class="form-signin">
          <img class="mb-4"  alt="career image" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Connectez vous</h1>
          <label for="inputEmail" class="sr-only">Mail</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Addresse email" required autofocus>
          <label for="inputPassword" class="sr-only">Mots de passe</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="mots de passe" required>
          <div class="checkbox mb-3">
            <p>pas de compte? s'inscrire<a href="register.php">ICI</a></p>
            <label>
              <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
    </div>    
</body>
</html>