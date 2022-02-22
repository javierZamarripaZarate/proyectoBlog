<?php
require('fpdf/fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 15, 'SEVILLA PALACE: ',0,1,'L');

$pdf->MultiCell(180, 5,'Direccion: Av. Paseo de la Reforma 105, Tabacalera, Cuauhtemoc, 06030 Ciudad de Mexico, CDMX',1,'L',0);

$pdf->Cell(180,10,'Telefono: 55 5705 2800',1,1,'L');

$pdf->MultiCell(180, 5,'Detalles del hotel:

Este exclusivo hotel urbano con fachada de cristal esta a 9 minutos a pie de la estacion de metro mas cercana, a 2 km del auditorio del Palacio de Bellas Artes y a 4 del Museo Nacional de
Antropologia.

Las habitaciones son sofisticadas y cuentan con decoracion de cuero, WiFi, television de pantalla plana y cafetera (de pago). Las suites normales incluyen sala de estar independiente y las de categoria superior, bano con banera de hidromasaje. Hay servicio de habitaciones las 24 horas.

El hotel ofrece aparcamiento gratuito y desayuno por un suplemento. Dispone de un restaurante refinado, una cafeteria informal, un piano bar, un bar deportivo, una piscina exterior y un gimnasio.',1,'L',0);

$pdf->Output();
?>