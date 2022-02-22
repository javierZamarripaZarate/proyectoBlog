<!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Hotel mas popular "
	},
	axisY: {
		title: "Visitantes por año"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Hotel",
		dataPoints: [      
			{ y: 5000, label: "Camino Real Aeropuerto" },
			{ y: 3800,  label: "WE Hotel Aeropuerto" },
			{ y: 4200,  label: "Barcelo México Reforma" },
			{ y: 4000,  label: "Nh Collection México city" },
			{ y: 4500,  label: "Sevilla Palace" },
		
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
	<header>
 <a href="viaje.php">Regresar al Inicio</a>
 </header>
<div id="chartContainer" style="height: 500px; max-width: 900px; margin: 0px auto;"></div>
<script src="canvasjs.min.js"></script>
</body>
</html>