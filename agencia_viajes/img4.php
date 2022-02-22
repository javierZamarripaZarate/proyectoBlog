<?php
header("Content-type: image/jpeg");
$image = "./sevillaPalace.jpeg";
$im = imagecreatefromjpeg($image);
$escalado = imagescale($im, 600, 500);
imagejpeg($escalado);
?>