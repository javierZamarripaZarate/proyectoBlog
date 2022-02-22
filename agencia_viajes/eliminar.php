<?php

	unlink("reservacion.txt") or die("error al borrar");

	  header("location:reservacion.php?msg=SE ELIMINO la reservacion:");


?>