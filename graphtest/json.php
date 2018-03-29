<script type="text/javascript"> 
eval(<?php echo  "'var time =  ".json_encode($time)."'" ?>);
eval(<?php echo  "'var capt_temp =  ".json_encode($capt_temp)."'" ?>);
eval(<?php echo  "'var capt_time =  ".json_encode($capt_time)."'" ?>);
</script>

<script type="text/javascript" src="jquery.min.js"></script>           
<script type="text/javascript" src="../Highcharts-6.0.7/code/js/highcharts.js"></script> 
<script type="text/javascript" src="../Highcharts-6.0.7/code/themes/grid.js"></script>
<script type="text/javascript" src="../Highcharts-6.0.7/code/js/modules/exporting.js"></script>

<script type="text/javascript">
<script type="text/javascript">
function comArr(unitsArray) { 
        var outarr = [];
        for (var i = 0; i < time.length; i++) {
         outarr[i] = [time[i], unitsArray[i]];
        }
      return outarr;
    }

chart = new Highcharts.Chart({
            chart: {
             renderTo: 'container',
             zoomType: 'x',
             type: 'spline',
             marginRight: 10,
             marginBottom: 60,
             plotBorderColor: '#346691',
             plotBorderWidth: 1,
            },

title: {
                text: 'Température eau des dernières 48 heures',
                x: -20 
            },

subtitle: {
                text: 'Source: Ormeauzen',
                x: -20
            },

credits: {
            text: '© Météo Villarzel',
            href: 'http://www.boock.ch/meteo-villarzel.php'
			},

xAxis: {
                type: 'datetime',            
				        startOnTick: false,
            },

yAxis: {
                title: {
                    text: 'Temperature (°C)'	
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#FF0000'
                }]
            },

tooltip: {
            crosshairs:[true],
            borderColor: '#4b85b7',
            shared: true,
            backgroundColor: '#edf1c8',
            formatter: function() {
            var s = '<b>'+ Highcharts.dateFormat('%e %B à %H:%M', this.x) +'</b>';
            $.each(this.points, function(i, point) {
            var unit = {
            'Point de rosée': ' °C',
            'Température': ' °C',
            'Facteur vent' : '',
            'Humidex' : ''
              }[this.point.series.name];
               s = s + '<br>' + '<span style="color:'+ point.series.color +'">' + point.series.name + '
              </span> : '  
               +Highcharts.numberFormat(point.y,1,","," ") + unit;
                });
                return s;
            },
            },

plotOptions: {
				series: {
					marker: {
						enabled: false
					}
				}
			},

series: [ 
				{
                name: 'Température',
                zIndex: 1,
                color: '#ff0000',
                data: comArr(outdoortemperature)  
                },
				{
                name: 'Point de rosée',
                color: '#3399FF',
                data: comArr(dewpoint)  
                },
				{
                name: 'Facteur vent',
                color: '#40e0d0',
                dashStyle: 'LongDash',
                data: comArr(windchill),
                },
				{
                name: 'Humidex',
                color: '#bd005c',
                dashStyle: 'ShortDash',
                data: comArr(outdoorheatindex),
                }
              ]

        });
      });
    });
</script>
</head>

<body>
<div id="container" style="width: 550px; height: 300px; margin: 0 auto"></div>
</body>
</html>