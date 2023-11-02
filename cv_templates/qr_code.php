<?php


require 'vendor/autoload.php';
include('connection.php');
use Endroid\QrCode\QrCode;
session_start();
if(isset($_SESSION['user'])){

$qr=$_GET['temp']."?id=".$_GET['id']."&&temp=".$_GET['temp']."&&temp2=".$_GET['temp2']."&&css=".$_GET['css'];
$r=$_GET['temp2']."".$_GET['id'].rand();
// Create a new instance of QrCode
$qrCode = new QrCode('http://www.samratabduljalil.com'.$qr);
$uploadDirectory= "qr_code/" ;
// Save the QR code to a file


$qrCode->writeFile('qr_code/'.$r.'.png');
  
$p=$r.".png";
   
   $query="INSERT INTO `qr`( `qr`, `user_id`, `template_id`) VALUES ('{$p}','{$_GET['id']}','{$_GET['temp2']}')";

   mysqli_query($connection, $query) ;


$redirectURL = $_GET['temp'] . "?id=" . $_GET['id'] . "&&temp=" . $_GET['temp'] . "&&temp2=" . $_GET['temp2']."&&css=".$_GET['css'];



header("location:".$redirectURL);

echo 'QR code generated and saved as qrcode.png';
}else{
   header("location: \Cvit-CVgenerator/authentication/login.php");

}
?>