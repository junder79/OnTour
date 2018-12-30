<?php

require "fpdf.php";
class myPDF extends FPDF {
	function header(){
		$this->Image('icon-ontour.png',10,6);
		$this->SetFont('times','8',14);
		$this->Cell(276,5,'CONTRATOS',0,0,'C');
		$this->Ln();
		$this->SetFont('times','',12);
		$this->Cell(276,10,'LALALALALA',0,0,'C');
		$this->Ln(20);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->Output();