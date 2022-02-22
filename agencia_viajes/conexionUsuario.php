<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	</head>
    <body>
    	<header>
 <a href="login.php">Regresar al acceso</a>
 </header>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database ="agencia_viajes";
$conexion = mysqli_connect($host, $user, $password, $database);

$solicitud = "SELECT * FROM usuarios";

$result = mysqli_query($conexion, $solicitud);

while ($array = mysqli_fetch_row ($result) ){

foreach ($array as $value) {
	echo $value."|";
   
}
echo "<br>";
	
}
?>
</body>
</html>