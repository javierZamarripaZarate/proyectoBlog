<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reservar</title>
  </head>
  <body>

  		<header>
       <center> 
  	<a href="viaje.php">Regresar al inicio</a><br>
    </center>
  	</header>
<center>
  	<h1>Reservar Hotel</h1>
  	<form action="registroReservacion.php" method="post">
  		<input type="text" name="nombrehotel" placeholder="Nombre del hotel"><br><br>
  		<input type="text" name="numPersonas" placeholder="Personas por habitacion"><br><br>
      <input type="text" name="nombreUsuario" placeholder="Ingresar nombre Completo"><br><br>
      <input type="text" name="telefono" placeholder="Ingresar telefono"><br><br>
      <input type="text" name="email" placeholder="Ingresar email"><br><br>
      <label for="name">Fecha Entrada</label><br><input type="date" name="fechaEntrada"><br><br>
     <label for="name">Fecha Salida</label><br><input type="date" name="fechaSalida"><br><br>
  		<input type="submit" name="Reservar">
      </center>
  	</form>
  </body>
</html>