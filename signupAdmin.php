<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/OrmeauZen-Rasp-master-I/images/iconf.ico">

    <title>Inscription à OrmeauZen</title>

    <!-- Bootstrap core CSS -->
    <link href="/OrmeauZen-Rasp-master-I/bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/OrmeauZen-Rasp-master-I/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="/OrmeauZen-Rasp-master-I/includes/signup.inc.php" method="POST">
      <img class="mb-4" src="/OrmeauZen-Rasp-master-I/images/frah.jpg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Gestion des utilisateurs OrmeauZen v2.0</h1>
      <input type="text" id="inputEmail" name="first" class="form-control" placeholder="Nom" required autofocus>
      <input type="text" id="inputPassword" name="last" class="form-control" placeholder="Prénom" required>
      <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Adresse E-mail" required autofocus>
      <input type="text" id="inputPassword" name="uid" class="form-control" placeholder="Identifiant" required>
      <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Mot de passe" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Inscription</button>
      <p class="mt-5 mb-3 text-muted">&copy; OrmeauZen 2017-2018</p>
    </form>
  </body>
</html>
