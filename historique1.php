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
    <link rel="icon" href="images/iconf.ico">

    <title>Historique du bassin n°<?php echo $bassin; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="historique.css" rel="stylesheet">
        <!-- Resources -->
        <script src="chart/amcharts.js"></script>
        <script src="chart/serial.js"></script>
        <script src="chart/export.min.js"></script>
        <link rel="stylesheet" href="chart/export.css" type="text/css" media="all" />
        <script src="chart/light.js"></script>
        <script src="chart/dataloader.min.js"></script>
        <script src="chart/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="chart/jquery-3.1.1.min.js"></script>
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
<script>

var AMCHART_SERIAL_CONFIG = {
        "hideCredits": true,
        "type": "serial", 
        "dataLoader": {
          "url": "chart/data.php"
        },
        "graphs": [{
            "id": "g1",
            "balloonText": "[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "hideBulletsCount": 50,
            "title": "red line",
            "useLineColorForBulletBorder": true,
            "balloon":{
                "drop":true
            }
        }],
        "chartScrollbar": {
            "graph": "g1",
            "scrollbarHeight": 80,
            "backgroundAlpha": 0,
            "selectedBackgroundAlpha": 0.1,
            "selectedBackgroundColor": "#FFFFFF",
            "graphFillAlpha": 0,
            "graphLineAlpha": 0.5,
            "selectedGraphFillAlpha": 0,
            "selectedGraphLineAlpha": 1,
            "autoGridCount": true,
            "color": "#FFFFFF"
        },
        "chartCursor": {
            "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
            "cursorPosition": "mouse"
        },
        "categoryField": "datetime",//valeur a chercher dans la BD pour les abscisses
        "categoryAxis": {
            "minPeriod": "mm",
            "axisColor": "#DADADA",
            "parseDates": true
        },
        "export": {
            "enabled": true,
             "dateFormat": "YYYY-MM-DD HH:NN:SS"
        },
        "valueAxes": [{
        "position": "left",
        "title": "°C"
        }]   

};

   AmCharts.ready(function () {
        var chart1 = AmCharts.makeChart("chart1div", $.extend(true, {}, AMCHART_SERIAL_CONFIG, { "titles": [{"text": "Evolution de la température en fonction du temps"}, {"text": "Pincez pour zoomer","bold": false}] }, { "lineColor": "#318CE7" } { "valueField": "temp" } { "valueAxes": [{"position": "left","title": "°C"}] }) );
        var chart2 = AmCharts.makeChart("chart2div", $.extend(true, {}, AMCHART_SERIAL_CONFIG, { "titles": [{"text": "Evolution du débit en fonction du temps"}, {"text": "Pincez pour zoomer","bold": false}] }, { "lineColor": "#34C924" } { "valueField": "debit" } { "valueAxes": [{"position": "left","title": "L/min"}] }) );
    });

</script>




          <div id="chart1div" style="width:100%x;height:500px;">
          </div>
          <div id="chart2div" style="width:100%;height:500px;">
          </div>
        <p>&nbsp;</p>
        <hr width="75%" align=center>     
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
