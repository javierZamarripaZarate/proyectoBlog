<?php

	$ruta = "reservacion.txt";

	 fopen($ruta,"w+");

	 header("location:reservacion.php?msg=SE CREO la reservacion:");


?>