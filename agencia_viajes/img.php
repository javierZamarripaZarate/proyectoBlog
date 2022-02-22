<?php
header("Content-type: image/jpg");
$image = "./caminoReal.jpg";
$im = imagecreatefromjpeg($image);
$escalado = imagescale($im, 800, 500);
imagejpeg($escalado);
?>