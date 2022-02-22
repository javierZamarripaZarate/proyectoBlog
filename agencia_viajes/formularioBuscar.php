<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar Hotel</title>
  </head>
  <body>

<header>
  <center>
    <a href="viaje.php">Regresar al inicio</a><br>
  </center>
</header>

  <center>
  <h1>Buscar Hotel</h1>
  <form action="" method="post">
  <input type="text" name="busqueda" placeholder="Buscar Hotel"><br><br>
	<input type="submit" name="enviar" value="Buscar"><br><br><br>
  </center>
  </form>

<?php
if(isset($_POST['enviar'])){
$busqueda = $_POST['busqueda'];

$consulta = $conexion->query("SELECT * FROM hotel WHERE nombrehotel LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' OR ciudad LIKE '%$busqueda%' OR precio LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()) {
echo "Nombre del hotel: ". $row['nombrehotel'].'<br>';
echo "Categoria del hotel: ".$row['categoria'].'<br>';
echo "Ciudad en donde se encuentra: ".$row['ciudad'].'<br>';
echo "Precio por noche: ".$row['precio'].'<br><br>';
    }
  }
?>
</body>
</html>