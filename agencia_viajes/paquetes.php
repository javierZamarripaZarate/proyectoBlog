<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	</head>
    <body>
    	<header>
 <a href="viaje.php">Regresar al Inicio</a><br><br>
 </header>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database ="agencia_viajes";
$conexion = mysqli_connect($host, $user, $password, $database);

$solicitud = "SELECT * FROM paquetes";

$result = mysqli_query($conexion, $solicitud);

while ($array = mysqli_fetch_row ($result) ){

foreach ($array as $value) {
	echo $value."|||";
   
}
echo "<br>";
}
?>
</body>
</html>