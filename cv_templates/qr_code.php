<?php
require 'vendor/autoload.php';
include('connection.php');
use Endroid\QrCode\QrCode;
$qr=$_GET['temp']."?id=".$_GET['id']."&&temp=".$_GET['temp']."&&temp2=".$_GET['temp2']."&&css=".$_GET['css'];
$r=$_GET['temp2']."".$_GET['id'].rand();
// Create a new instance of QrCode
$qrCode = new QrCode('http://cvit-cvgenerator.test'.$qr);
$uploadDirectory= "qr_code/" ;
// Save the QR code to a file


$qrCode->writeFile('qr_code/'.$r.'.png');
  
$p=$r.".png";
   $query = " UPDATE `cv_template` SET `qr`='{$p}' WHERE `link`='{$_GET['temp2']}'";


   if (mysqli_query($connection, $query)) 


$redirectURL = $_GET['temp'] . "?id=" . $_GET['id'] . "&&temp=" . $_GET['temp'] . "&&temp2=" . $_GET['temp2']."&&css=".$_GET['css'];


header("Location: " . $redirectURL);


echo 'QR code generated and saved as qrcode.png';
?>