<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Graphique js</title>
	<script src="Chart.min.js"></script>
</head>
<body>
	<h1>Chart.js example</h1>
	<div style="width: 75%">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		Chart.defaults.global.title.display = true;
		Chart.defaults.global.title.text = "LE TITRE DU GRAPHE";
		Chart.defaults.global.elements.point.radius : 10;
	</script>


	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
	    // The type of chart we want to create
			    type: 'line',

			    // The data for our dataset
			    data: {
			        labels: ["January", "February", "March", "April", "May", "June", "July", "August"],
			        datasets: [{
			            label: "Température",
			            backgroundColor: 'rgb(255, 99, 132)',
			            borderColor: 'rgb(255, 99, 132)',
			            data: [0, 10, 5, 2, 20, 30, 45, 19],
			        }]
			    },

			    // Configuration options go here
			    options: {
			    	title: {
			    		text: "Evolution de la temperature de l'eau"
			    	}
			    	/*elements: {
			    		point: {
			    			radius: 5,
			    			backgroundColor: "rgb(0.0.255)"
			    		}
			    	}*/
			    }
			});
	</script>
</body>
</html>