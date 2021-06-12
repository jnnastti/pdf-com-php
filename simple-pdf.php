<?php

require('./fpdf/fpdf.php');

$pdf = new FPDF();

// Iniciando uma nova pagina
$pdf->AddPage();

// Setar configurações da fonte
$pdf->SetFont('Arial','B',16);

// Posição e texto
$pdf->Cell(40,10,'Hello World!');

// Gerar PDF
$pdf->Output();
?>
