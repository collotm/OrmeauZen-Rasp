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
    <link href="/OrmeauZen-Rasp-master/bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/OrmeauZen-Rasp-master/historique.css" rel="stylesheet">
        <!-- Resources -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/dataloader.min.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/jquery-3.1.1.min.js"></script>
  </head>

  <body>

<?php require_once("header.php"); ?>

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <h1>Historique du Bassin n°<?php echo $bassin; ?> </h1>
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
        <?php require_once("controle.php"); ?>        
        <p>&nbsp;</p>
        <hr width="75%" align=center>
        <p>&nbsp;</p>
        <div id="chartdiv" class="chartdiv">
          <?php require_once("chart/chart_temp.php"); ?>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <hr width="75%" align=center>
        <p>&nbsp;</p>                
        <div id="chart1div" class="chartdiv">
          <?php require_once("chart/chart_deb.php"); ?>
        </div> 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <hr width="75%" align=center>
        <p>&nbsp;</p>
        <div align="center">
          <?php require_once("tableau.php"); ?>
        </div>      
      </div>


    </main>

<?php require_once("footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/OrmeauZen-Rasp-master/bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="/OrmeauZen-Rasp-master/bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="/OrmeauZen-Rasp-master/bootstrap4/dist/js/vendor/holder.min.js"></script>
  </body>
</html>
