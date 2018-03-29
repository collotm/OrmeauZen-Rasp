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

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <?php
          echo '<h1>Historique du bassin n° '.$bassin.'</h1>';
          ?>
          <p class="lead text-muted"></p>
          <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div>
      </section>

    </main><!-- /.container -->  
    
    <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div id="container1"></div>
          </div>
          <div class="col-sm-6 col-md-6"></div>
          <div class="col-sm-6 col-md-6"></div>
          <div class="col-sm-6 col-md-6"></div>
        </div>
      </div>

      <script type="text/javascript">
        
        $.getJSON(
            'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
            function (data) {

                Highcharts.chart('container1', {
                    chart: {
                        zoomType: 'x'
                    },
                    title: {
                        text: 'USD to EUR exchange rate over time'
                    },
                    subtitle: {
                        text: document.ontouchstart === undefined ?
                                'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                    },
                    xAxis: {
                        type: 'datetime'
                    },
                    yAxis: {
                        title: {
                            text: 'Exchange rate'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        area: {
                            fillColor: {
                                linearGradient: {
                                    x1: 0,
                                    y1: 0,
                                    x2: 0,
                                    y2: 1
                                },
                                stops: [
                                    [0, Highcharts.getOptions().colors[0]],
                                    [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                ]
                            },
                            marker: {
                                radius: 2
                            },
                            lineWidth: 1,
                            states: {
                                hover: {
                                    lineWidth: 1
                                }
                            },
                            threshold: null
                        }
                    },

                    series: [{
                        type: 'area',
                        name: 'USD to EUR',
                        data: data
                    }]
                });
            }
        );  
      </script>


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
            $reponse = $conn->query('SELECT * FROM mesure');

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
                <td><?php echo $donnees['datetime']; ?></td>
                <td><?php echo $donnees['temp']; ?></td>
                <td><?php echo $donnees['debit']; ?></td>
              </tr>
            </table>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
           </div>
           



<?php require_once("footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap4/dist/js/vendor/holder.min.js"></script>   
    <script src="bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="highcharts.js"></script>
    <script src="exporting.js"></script> 
  </body>
</html>
