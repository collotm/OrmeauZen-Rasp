<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/iconf.ico">

    <title>Inscription à OrmeauZen</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="includes/signup.inc.php" method="POST">
      <img class="mb-4" src="images/frah.jpg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Inscription à OrmeauZen v2.0</h1>
      <input type="text" id="inputEmail" name="first" class="form-control" placeholder="Nom" required autofocus>
      <input type="text" id="inputPassword" name="last" class="form-control" placeholder="Prénom" required>
      <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Adresse E-mail" required autofocus>
      <input type="text" id="inputPassword" name="uid" class="form-control" placeholder="Identifiant" required>
      <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Mot de passe" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Inscription</button>
      <a class="btn btn-lg btn-primary btn-block" href="signin.php">Vers la page de connexion</a>
      <p class="mt-5 mb-3 text-muted">&copy; OrmeauZen 2017-2018</p>
    </form>
  </body>
</html>
