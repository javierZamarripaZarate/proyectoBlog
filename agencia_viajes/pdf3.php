<?php
require('fpdf/fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 15, 'BARCELO MEXICO REFORMA: ',0,1,'L');

$pdf->MultiCell(180, 5,'Direccion: Av. Paseo de la Reforma 1, Tabacalera, Cuauhtemoc, 06030 Ciudad de Mexico, CDMX Departamentos: Monopolis Tours',1,'L',0);

$pdf->Cell(180,10,'Telefono: 55 5128 5000',1,1,'L');

$pdf->MultiCell(180, 5,'Detalles del hotel:

Este hotel de estilo contemporaneo, con fachada de cristal, se encuentra a 2 minutos a pie de la parada de autobus mas cercana y a 4 km del Museo Nacional de Antropologia.

Las sencillas habitaciones, de decoracion funcional, estan equipadas con aire acondicionado, WiFi gratis, television de pantalla plana y escritorio. Las habitaciones y suites superiores ofrecen acceso a un salon privado donde se sirven aperitivos gratuitos por la tarde. Las suites tambien incluyen zona de descanso independiente. Servicio de habitaciones disponible.

El hotel ofrece aparcamiento y espectaculos en directo. Dispone de restaurante buffet, asador, restaurante japones, bar en el vestibulo, cafeteria, spa, gimnasio y piscina cubierta con 3 baneras de hidromasaje.',1,'L',0);

$pdf->Output();
?>