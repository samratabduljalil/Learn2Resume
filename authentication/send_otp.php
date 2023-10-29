<?php
 session_start();
 $_SESSION['email']=$_POST['email'];
$otp = mt_rand(100000, 999999);
$to = $_SESSION['email']; // Replace with the recipient's email address
$subject = "Your OTP from Learn2Resume";
$message = "Your Otp is " .$otp.". Please Login in Learn2Resume with this Otp ";
$headers = "From: your_email@gmail.com"; // Replace with your email address



if (mail($to, $subject, $message, $headers)) {
   
    
   
    $_SESSION['name']=$_POST['name'];
   
    $_SESSION['password']=$_POST['password'];
    $_SESSION['sign']=$_POST["sign"];
    $_SESSION['otp']=$otp;
    header("location: otp.php");

} else {
    echo "Email sending failed.";
}



?>
