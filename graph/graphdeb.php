<!DOCTYPE html>
<html>
<head>
	<title>Sector</title>
	<script src="graph/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="graph/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
	<script src="graph/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
	<script src="graph/jquery-3.1.1.min.js"></script>
	<script src="graph/highcharts.js"></script>
	<script src="graph/exporting.js"></script>
</head>
<body>
	<div class="container">
		<div>
			<div>
				<div id="container2"></div>
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

		        Highcharts.chart('container2', {
		            chart: {
		                zoomType: 'x'
		            },
		            title: {
		                text: "Evolution du débit entrant dans le bassin"
		            },
		            subtitle: {
		                text: document.ontouchstart === undefined ?
		                        'Choisir la zone pour zoomer' : 'Pinch the chart to zoom in'
		            },
		            xAxis: {
		                type: 'datetime'
		            },
		            yAxis: {
		                title: {
		                    text: 'Débit (L/h)'
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
		                            [0, Highcharts.getOptions().colors[5]],
		                            [1, Highcharts.Color(Highcharts.getOptions().colors[2]).setOpacity(0.25).get('rgba')]
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
		                name: 'Débit',
		                data: data
		            }]
		        });
		    }
		);	
	</script>

</body>
</html>