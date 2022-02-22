<?php
require('fpdf/fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 15, 'NH COLLECTION MEXICO CITY: ',0,1,'L');

$pdf->MultiCell(180, 5,'Direccion: C. Liverpool 155, Juarez, Cuauhtemoc, 06600 Ciudad de Mexico, CDMX',1,'L',0);

$pdf->Cell(180,10,'Telefono: 55 5228 9928',1,1,'L');

$pdf->MultiCell(180, 5,'Detalles del hotel:

	El hotel NH Collection Mexico City Reforma cuenta con 306 habitaciones estan decoradas con un estilo elegante y clasico, pero todas disponen de comodidades actuales como TV de 48 pulgadas y Wifi gratis. Las habitaciones de las plantas superiores ofrecen unas vistas espectaculares del perfil urbano del distrito financiero.

306 habitaciones amplias y de estilo clasico.
Televisores de 48 pulgadas y Wifi gratuito.
vistas panoramicas de la ciudad desde las plantas superiores.',1,'L',0);

$pdf->Output();
?>