<?php
require('fpdf/fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 15, 'CAMINO REAL AEROPUERTO: ',0,1,'L');

$pdf->MultiCell(180, 5, 'Direccion: Puerto Mexico No. 80 Col, Puerto Mexico, Penon de los Banos, Venustiano Carranza, 15520 Ciudad de Mexico',1,'L',0);

$pdf->Cell(180, 10,'Telefono: 55 3003 0033',1,1,'L');

$pdf->MultiCell(180, 5, 'Detalles del hotel:

	Las habitaciones son acogedoras y cuentan con WiFi (por un suplemento), television de pantalla plana, minibar y escritorio.

	Las habitaciones de nivel Club incluyen acceso a un salon privado con desayuno caliente y continental gratuito.Las suites tienen banera de hidromasaje, comedor y vistas al aeropuerto. Hay servicio de habitaciones.

	El hotel dispone de servicio gratuito de traslado al aeropuerto, salon de belleza, gimnasio, bano de vapor, piscina cubierta, servicio de masajes y centro de negocios. Hay un bar moderno y restaurantes de cocina italiana, regional y buffet.',1,'L',0);

$pdf->Output();
?>