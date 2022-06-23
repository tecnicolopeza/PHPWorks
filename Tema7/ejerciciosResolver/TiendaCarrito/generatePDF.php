<?php 
session_start();
require('pdf/fpdf.php');

class PDF extends FPDF {
    // Page header
    function Header() {
        // Add logo to page
        $this->Image('img/logo.png',10,3,33);
        // Set font family to Arial bold 
        $this->SetFont('Arial','B',20);
        // Move to the right
        $this->Cell(50);
        // Header
        $this->Cell(100,10,'FACTURA LA TIENDECITA',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10, 'Avenida de algun lugar en un pais singular donde nunca jamas, 22, D. 44567, Narnia.',0,0, 'C');
        // Page number
        $this->Cell(0,10,'Page ' . 
            $this->PageNo() . '/{nb}',0,0,'C');
    }

}

// Instantiation of FPDF class
$pdf = new PDF();

// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',15);

$i = 0;

foreach ($_SESSION['prodCart'] as $producto => $value) {
    $i++;
           // Line break
    if($i!=count($_SESSION['prodCart'])){
        $pdf->Cell(0, 15, 'Producto ' . $i. " - ". $producto.", Cantidad - ". $value.", Precio - ". $_SESSION['productos'][$producto][0]." euros", 1, 1, 'C');
    }else{
        $pdf->Cell(0, 15, 'Producto ' . $i. " - ". $producto.", Cantidad - ". $value.", Precio - ". $_SESSION['productos'][$producto][0]." euros", 1, 1, 'C');
        $pdf->Cell(0, 10, 'Precio total (IVA incluido) = ' .$_SESSION['precioTotal']." euros", 1, 1, 'C');
    }
}

$pdf->Output();

?>

?>