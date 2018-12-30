<?php
include 'reportes/plantilla.php';
require 'reportes/conexion.php';

$query="Select colegio , curso , destino  from contrato where nombre_representante='Samuel'";
$resultado = $mysqli->query($query);

$pdf = new PDF();
$pdf->AliasNbPages();
/* Añadir en una nueva pagina*/
$pdf->AddPage();
/* COLORES */
$pdf->SetFillColor(232 , 232 , 232);
/*Contenido en celdas */
$pdf->SetFont('Arial' , 'B' ,12);
$pdf->Cell(70 , 6 , 'COLEGIO' , 1, 0 ,'C',1);
$pdf->Cell(70 , 6 , 'CURSO' , 1, 0 ,'C',1);
$pdf->Cell(70 , 6 , 'DESTINO' , 1, 1 ,'C',1);

$pdf->SetFont('Arial' , '' ,10);
while ($row=$resultado->fetch_assoc())
{
		$pdf->Cell(70,6,utf8_decode($row['colegio']),1,0,'C');
		$pdf->Cell(70,6,$row['curso'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['destino']),1,1,'C');
}
$pdf->Output();



?>