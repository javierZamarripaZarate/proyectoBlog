<?php
$email=$_POST['email'];
$password=$_POST['password'];
session_start();

$conexion = new mysqli("localhost","root","","agencia_viajes");
$consulta = "SELECT*FROM usuarios WHERE email='$email' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
header("location:viaje.php");

}else{
?>
<?php
include("login.php");
?>
<center><h1 class="bad">ERROR EN LA AUTENTIFICACION</h1></center>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);