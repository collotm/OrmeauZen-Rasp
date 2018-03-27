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
    <link rel="icon" href="images/iconf.ico">

    <title>Historique des bassins</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="historique.css" rel="stylesheet">
  </head>

  <body>

<?php require_once("header.php"); ?>

    <main role="main" class="container">

      <section class="starter-template">
        <div class="container">
          <?php
          echo '<h1>Historique du bassin n° '.$bassin.'</h1>';
          ?>
          <p class="lead text-muted"></p>
          <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div>
      </section>
      <div class="row">
          <?php
            try
            {
              // On se connecte à MySQL
              $conn = new PDO('mysql:host=localhost;dbname=ormeaux;charset=utf8', 'root', 'btsir123');
            }
            catch(Exception $e)
            {
              // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }

            // Si tout va bien, on peut continuer

            // On récupère tout le contenu de la table jeux_video
            $reponse = $conn->query('SELECT * FROM bassin1');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
          ?>
            <table frame="border" rules="all" cellpadding="5">
              <tr>
                <td>N° relevé</td>
                <td>Heure</td>
                <td>Température</td>
                <td>Débit</td>
              </tr>
                <tr>
                <td><?php echo $donnees['id_valeur']; ?></td>
                <td><?php echo $donnees['capt_time']; ?></td>
                <td><?php echo $donnees['capt_temp']; ?></td>
                <td><?php echo $donnees['capt_debit']; ?></td>
              </tr>
            </table>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
           </div>

    </main><!-- /.container -->
<table>
  <tr>
    <td>N° relevé</td>
    <td>Heure</td>
    <td>Température</td>
    <td>Débit</td>
  </tr>
    <tr>
    <td><?php echo $donnees['id_valeur']; ?></td>
    <td><?php echo $donnees['capt_time']; ?></td>
    <td><?php echo $donnees['capt_temp']; ?></td>
    <td><?php echo $donnees['capt_debit']; ?></td>
  </tr>
</table>

<?php require_once("footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap4/dist/js/vendor/holder.min.js"></script>    
  </body>
</html>
