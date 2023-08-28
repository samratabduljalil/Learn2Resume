<?php
require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
$qr=$_GET['temp']."?id=".$_GET['id']."&&temp=".$_GET['temp']."&&temp2=".$_GET['temp2'];
$r=$_GET['temp2']."".$_GET['id'].rand();
// Create a new instance of QrCode
$qrCode = new QrCode('http://cvit-cvgenerator.test'.$qr);
$uploadDirectory= "qr_code/" ;
// Save the QR code to a file

$qrCode->writeFile('qr_code/'.$r.'.png');


header("location: \admin/temp/template_777.php?id=".$_GET['id']."&&temp=".$_GET['temp']."&&temp2=".$_GET['temp2']);
echo 'QR code generated and saved as qrcode.png';
?>