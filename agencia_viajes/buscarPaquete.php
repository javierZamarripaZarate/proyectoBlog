<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar Paquete</title>
  </head>
  <body>

<header>
  <center>
    <a href="viaje.php">Regresar al inicio</a><br>
  </center>
</header>

  <center>
  <h1>Buscar Paquete</h1>
  <form action="" method="post">
  <input type="text" name="busqueda" placeholder="Buscar Destino"><br><br>
	<input type="submit" name="enviar" value="Buscar"><br><br><br>
  </center>
  </form>

<?php
if(isset($_POST['enviar'])){
$busqueda = $_POST['busqueda'];

$consulta = $conexion->query("SELECT * FROM paquetes WHERE destino LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()) {
echo "Origen: ". $row['origen'].'<br>';
echo "Destino: ".$row['destino'].'<br>';
echo "Nombre del hotel: ".$row['nombreHotel'].'<br>';
echo "Precio por persona: ".$row['precio_por_persona'].'<br>';
echo "Dias de hospedaje: ".$row['dias_hospedaje'].'<br>';
echo "Fecha de entrada: ".$row['fechaEntrada'].'<br>';
echo "Fecha de salida: ".$row['fechaSalida'].'<br><br>';
    }
  }
?>
</body>
</html>