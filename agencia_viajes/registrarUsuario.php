<?php
$email=$_POST['email'];
$password=$_POST['password'];

$conexion =new mysqli("localhost","root","","agencia_viajes");

$sql="INSERT INTO usuarios (email, password) VALUES('$email','$password')";

$resultado= $conexion->query($sql);

if ($resultado)
{
	echo"Registro exitoso";
	echo"<br><br>";
	echo"<a href='signup.php'>Regresar a Registro </a>";
	echo"<br><br>";
	echo"<a href='conexionUsuario.php'>Ir a listado </a>";
	echo"<br><br>";
	echo"<a href='login.php'>Regresar al acceso </a>";
	
}else {
	echo "Hubo un error ".$conexion->error."";
}