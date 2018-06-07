<!--31.05.2018-->
<!--https://www.amcharts.com/demos/area-with-time-based-data/-->

<!DOCTYPE html>
<html>
<head>
    <title>Debit</title>
        <!-- Resources -->
        <script src="/OrmeauZen-Rasp-master-I/chart/amcharts.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/serial.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/export.min.js"></script>
        <link rel="stylesheet" href="/OrmeauZen-Rasp-master-I/chart/export.css" type="text/css" media="all" />
        <script src="/OrmeauZen-Rasp-master-I/chart/light.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/dataloader.min.js"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <script src="/OrmeauZen-Rasp-master-I/chart/jquery-3.1.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="container1"></div>
        </div>
    </div>
    <!-- Styles -->
    <style>
    #chart1div {
        width   : 100%;
        height  : 500px;
    }                                               
    </style>

    <!-- Chart code -->
    <script>
    var chartData = generateChartData();

    var chart = AmCharts.makeChart("chart1div", {
        "hideCredits": true,
        "type": "serial",
        "titles": [{
            "text": "Evolution du débit en fonction du temps"
          }, {
            "text": "Pincez pour zoomer",
            "bold": false
          }], 
        "dataLoader": {
          "url": "/OrmeauZen-Rasp-master-I/chart/data.php?bassin=<?php echo $bassin ?>"
        },
        "graphs": [{
            "id": "g1",
            "balloonText": "[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "lineColor": "#34C924",
            "bulletColor": "#FFFFFF",
            "hideBulletsCount": 50,
            "title": "red line",
            "valueField": "debit",
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
        "title": "L/h"
        }]
    });

    chart.addListener("rendered", zoomChart);
    zoomChart();

    // this method is called when chart is first inited as we listen for "rendered" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
    }


    // generate some random data, quite different range

    // generate some random data, quite different range
    function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 5);
        var visits = 1200;
        for (var i = 0; i < 1000; i++) {
            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            var newDate = new Date(firstDate);
            newDate.setDate(newDate.getDate() + i);
            
            visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);

            chartData.push({
                date: newDate,
                visits: visits
            });
        }
        return chartData;
    }
    </script>

    <!-- HTML -->
    <div id="chart1div"></div>
</body>
</html>
