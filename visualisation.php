<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/iconf.ico">

    <title>Visualisation des bassins</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="visualisation.css" rel="stylesheet">
  </head>

  <body>

<?php require_once("header.php"); ?>

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <h1>Visualisation des bassins</h1>
          <p class="lead text-muted"></p>
          <p class="lead">Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?></p>
          <p class="lead">
            <?php
              if (isset($_SESSION['u_id'])) {
                echo "Vous êtes bien connecté !";
              }
              else {
              	echo "Vous n'êtes pas connecté à une session.";
              }
            ?>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          
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

            // On récupère tout le contenu de la table mesure
            $reponse = $conn->query('SELECT * FROM bassin');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {

              $mesure = $conn->query("SELECT * FROM mesure WHERE id_bassin=$donnees[id] ORDER BY datetime DESC LIMIT 1");
              $val_mesure =  $mesure->fetch();

          ?>
            <div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin=<?php echo $donnees['id']; ?>">Bassin n° <?php echo $donnees['id']; ?></a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td class="valeur" align="center">
                        <?php echo $val_mesure['temp']; ?>
                      </td>
                      <td>
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
                        <?php echo $val_mesure['debit']; ?>
                      </td>  
                    </tr>

                    <tr>
                      <td align="center">
                        <p>°C</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td align="center">
                        <p>L/h</p>
                      </td>  
                    </tr>

                    <tr align="center">
                      <p align="center">Dernières valeurs relevées du</p>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
           </div> 
        </div>
      </div>

    </main>

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
