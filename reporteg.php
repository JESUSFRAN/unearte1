<?php
ob_start();
require 'fpdf/fpdf.php';
require 'conexion.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('img/1.png' , 10 ,8, 190 , 13,'png');
$pdf->Cell(18, 10, '', 0);
//$pdf->Cell(150, 10, 'reporte php"', 0);
$pdf->SetFont('Arial', '', 9);
//$pdf->Cell(50, 40, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8,utf8_decode('LISTADOS DE ACREDITACIONES'), 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8,utf8_decode( 'N°'), 0);
$pdf->Cell(40, 8,utf8_decode( 'Nombre'), 0);
$pdf->Cell(40, 8,utf8_decode( 'Apellidos'), 0);
$pdf->Cell(25, 8,utf8_decode( 'Cédula '), 0);
$pdf->Cell(25, 8,utf8_decode( 'Teléfono'), 0);
$pdf->Cell(25, 8,utf8_decode( 'Celular'), 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$sql = "SELECT * FROM acreditado ";
	$resultado = $conexion->query($sql);

$item = 0;
while($productos2 = $resultado->fetch_array(MYSQLI_ASSOC)) { 
//while($productos2 = mysqli_fetch_array($sql)){
	$item = $item+1;
	
	$pdf->Cell(15, 8, $item, 0);
	$pdf->Cell(40, 8, $productos2['nombres'], 0);
	$pdf->Cell(40, 8, $productos2['apellidos'], 0);
	$pdf->Cell(25, 8, $productos2['cedula'], 0);
	$pdf->Cell(25, 8, $productos2['telefono'], 0);
        $pdf->Cell(25, 8, $productos2['celular'], 0);
	$pdf->Ln(8);
}
$pdf->Image('img/2.png' , 10 ,280, 190 , 13,'png');
$pdf->Output();
?>
