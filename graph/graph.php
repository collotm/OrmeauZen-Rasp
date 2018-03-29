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

</body>
</html>