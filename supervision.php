<?php
  session_start();
?>


<!DOCTYPE html>
<?php
if(isset($_GET["bassin"]))
  $bassin=$_GET["bassin"];
else
  $bassin="1";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/OrmeauZen-Rasp-master-I/images/iconf.ico">

    <title>Historique du bassin n°<?php echo $bassin; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/OrmeauZen-Rasp-master-I/bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/OrmeauZen-Rasp-master-I/historique.css" rel="stylesheet">
  </head>

  <body>

<?php require_once("/OrmeauZen-Rasp-master-I/header.php"); ?>

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <h1>Supervision des actions effectuées par les utilisateurs</h1>
          <p class="lead text-muted"></p>
          <p class="lead">Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?></p>
          <p class="lead">
            <?php
              if (isset($_SESSION['u_id'])) {
                echo "Vous êtes bien connecté en tant qu'admin !";
              }
              else {
                echo "Vous n'êtes pas connecté à une session.";
              }
            ?>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">      
      </div>


    </main>

<?php require_once("/OrmeauZen-Rasp-master-I/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/OrmeauZen-Rasp-master-I/bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/OrmeauZen-Rasp-master-I/bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="/OrmeauZen-Rasp-master-I/bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="/OrmeauZen-Rasp-master-I/bootstrap4/dist/js/vendor/holder.min.js"></script>
  </body>
</html>
