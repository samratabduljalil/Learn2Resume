<?php
require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

// Create a new instance of QrCode
$qrCode = new QrCode('Hello, world!');
$uploadDirectory= "qr_code/" ;
// Save the QR code to a file

$qrCode->writeFile('qr_code/qrcode.png');

echo 'QR code generated and saved as qrcode.png';
?>