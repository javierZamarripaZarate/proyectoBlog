<?php
$nombrehotel=$_POST['nombrehotel'];
$numPersonas=$_POST['numPersonas'];
$nombreUsuario=$_POST['nombreUsuario'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fechaEntrada=$_POST['fechaEntrada'];
$fechaSalida=$_POST['fechaSalida'];

$conexion =new mysqli("localhost","root","","agencia_viajes");

$sql="INSERT INTO reservar_hotel (nombrehotel, numPersonas, nombreUsuario, telefono, email,fechaEntrada,fechaSalida) VALUES('$nombrehotel','$numPersonas','$nombreUsuario','$telefono','$email','$fechaEntrada','$fechaSalida')";

$resultado= $conexion->query($sql);

if ($resultado)
{
	echo"Reservacion exitosa";
	echo"<br><br>";
	echo"<a href='formularioReservar.php'>Regresar a Registro </a>";
	echo"<br><br>";
	echo"<a href='conexionReservar.php'></a>";
	echo"<a href='viaje.php'>Regresar al inicio </a>";
	
}else {
	echo "Hubo un error ".$conexion->error."";
}