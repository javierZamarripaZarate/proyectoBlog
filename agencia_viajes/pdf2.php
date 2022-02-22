<?php
require('fpdf/fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 15, 'WE HOTEL AEROPUERTO: ',0,1,'L');

$pdf->MultiCell(180, 5, 'Direccion: Blvd. Puerto Aereo 390, Moctezuma 2da Secc, Venustiano Carranza, 15530 Ciudad de Mexico, CDMX',1,'L',0);

$pdf->Cell(180, 10,'Telefono: 55 5133 3232',1,1,'L');

$pdf->MultiCell(180, 5, 'Detalles del hotel:

Este hotel moderno, que se encuentra en la via Boulevard Puerto Aereo, esta a 3,8 km del Aeropuerto Internacional de la Ciudad de Mexico y a 8 km del centro cultural Palacio de Bellas Artes.

Las sencillas habitaciones tienen conexion WiFi gratuita y las suites estan equipadas con baneras de hidromasaje.

Los menores de 12 anos acompanados de un adulto se hospedan gratis.El hotel sirve desayunos continentales gratuitos y cuenta con un restaurante mexicano y un bar, ademas de aparcamiento gratuito y servicio de traslado al aeropuerto. Tambien tiene un centro de negocios y 4 salas de reuniones.',1,'L',0);

$pdf->Output();
?>