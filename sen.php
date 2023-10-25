<?php
$to = "samratabduljalil21@gmail.com"; // Replace with the recipient's email address
$subject = "Test Email";
$message = "This is a test email sent from a PHP script on localhost.";
$headers = "From: your_email@gmail.com"; // Replace with your email address

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
