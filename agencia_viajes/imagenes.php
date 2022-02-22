<?php
header("Content-type: image/jpg");
$image = "./NHCollectionMexicoCity.jpg";
$im = imagecreatefromjpeg($image);
$escalado = imagescale($im, 800, 500);
imagejpeg($escalado);
?>