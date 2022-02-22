<html>
	<head>
		<title>Agencia de viajes</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:1000px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#33B3FF;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>

		<div id="header">
			<ul class="nav">
                
				<li><a href="viaje.php">Inicio</a></li>

				<li><a href="">Hoteles</a>
				<ul><li><a href="hotel.php">Listado de Hoteles</a></li>
				<li><a href="formularioBuscar.php">Buscador</a></li>
				</ul></li>


				<li><a href="barra.php">Hoteles más populares</a></li>

				<li><a href="reservacion.php">Reservar</a></li>

				<li><a href="caro.php">Hotel mas caro</a></li>

				<li><a href="">Paquetes</a>
				<ul><li><a href="paquetes.php">listado de paquetes</a></li>
				<li><a href="buscarPaquete.php">Buscar paquete</a></li>
			    </ul></li>

				<li><a href="">Imagenes de Hoteles</a>
				<ul><li><a href="img.php">Camino real Aeropuerto</a></li>
				<li><a href="img2.php">we Hotel Aeropuerto</a></li>
				<li><a href="img3.php">Barceló Mexico Reforma</a></li>
				<li><a href="imagenes.php">NH Collection Mexico city</a></li>
				<li><a href="img4.php">Sevilla Palace</a></li>
				</ul></li>

			    <li><a href="">Detalles de los hoteles</a>
			    <ul><li><a href="pdf1.php">Camino real Aeropuerto</a></li>
			    <li><a href="pdf2.php">we Hotel Aeropuerto</a></li>
		    	<li><a href="pdf3.php">Barceló Mexico Reforma</a></li>
	     		<li><a href="pdf4.php">NH Collection Mexico city</a></li>
				<li><a href="pdf5.php">Sevilla Palace</a></li>
				</ul></li>			
				<img src="/AV.png" width="999" height="437">
		    </ul>
		</div>
	</body>
</html>