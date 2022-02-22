<?php

$id_reservarhotel = $_POST['id_reservarhotel'];


$conexion =new mysqli("localhost","root","","agencia_viajes");


$sql="DELETE FROM reservar_hotel WHERE reservar_hotel.id_reservarhotel = $id_reservarhotel";

$resultado= $conexion->query($sql);

if ($resultado)
{
	echo "eliminacion exitosa";
	echo"<br><br>";
	echo"<a href='formularioeliminar.php'>Regresar a Registro </a>";
	echo"<br><br>";
	echo"<a href='conexionReservar.php'></a>";
	echo"<a href='viaje.php'>Regresar al inicio </a>";
	
}else {
	echo "Hubo un error ".$conexion->error."";
}