<?php 
$host="localhost";
$usuario="root";
$contra="";
$database="agencia_viajes";
$conexion=mysqli_connect($host,$usuario,$contra,$database);
$solicitud="SELECT precio FROM hotel";
$resultado=mysqli_query($conexion,$solicitud);
$masalto = array();

while ($array = mysqli_fetch_row($resultado)) {
			foreach ($array as $valor) {
					array_push($masalto, $valor)	;		}
			echo "<br>";
		}
		
		sort($masalto);
		
		global $alto;
		$alto=array_pop($masalto);
		
	

		echo "El precio del Hotel mas caro es: ".$alto; echo " pesos";
		echo "<br>";
		$_GET['alto'] = $alto;

		

 ?>