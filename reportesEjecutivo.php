<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT colegio , curso , nombre_representante  from contrato";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'COLEGIO',1,0,'C',1);
	$pdf->Cell(30,6,'CURSO',1,0,'C',1);
	$pdf->Cell(70,6,'REPRESENTANTE',1,1,'C',1);
	

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['colegio']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['curso']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['nombre_representante']),1,1,'C');
		
	}
	$pdf->Output();
?>