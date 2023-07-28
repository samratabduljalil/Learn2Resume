<?php
require 'vendor/autoload.php'; // Assuming you have installed mPDF via Composer

use Mpdf\Mpdf;
ob_start();
include('template1.html');
// HTML content to be converted to PDF
$html = ob_get_contents();
ob_end_clean();
// Create a new mPDF instance
$mpdf = new Mpdf();

// (Optional) Set properties like font, orientation, and paper size
$mpdf->SetTitle('HTML to PDF with mPDF');
$mpdf->SetAuthor('Your Name');

$mpdf->WriteHTML($html);

// Save the generated PDF to a file
$mpdf->Output();


?>