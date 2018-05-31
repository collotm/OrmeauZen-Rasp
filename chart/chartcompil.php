<script>

var AMCHART_SERIAL_CONFIG = {
        "hideCredits": true,
        "type": "serial", 
        "dataLoader": {
          "url": "data.php"
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