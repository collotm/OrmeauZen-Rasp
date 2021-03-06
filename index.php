<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/OrmeauZen-Rasp-master-I/images/iconf.ico">

    <title>Connexion à OrmeauZen</title>

    <!-- Bootstrap core CSS -->
    <link href="/OrmeauZen-Rasp-master-I/bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/OrmeauZen-Rasp-master-I/index.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <?php
    echo
    '<form class="form-signin" action="/OrmeauZen-Rasp-master-I/includes/login.inc.php" method="POST">
      <img class="mb-4" src="/OrmeauZen-Rasp-master-I/images/frah.jpg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Connectez-vous à OrmeauZen v2.0</h1>
        <label for="inputEmail" class="sr-only">Mail Adress</label>
        <input type="email" id="inputEmail" name="uid" class="form-control" placeholder="Adresse E-mail/Identifiant" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Accédez à votre compte</button>
        <p class="mt-5 mb-3 text-muted">&copy; OrmeauZen 2017-2018</p>
    </form>';
    ?>
  </body>
</html>
