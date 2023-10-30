<?php   

$iv = random_bytes(16);


$password_or_email = "your_password_";
$encryption_key =12345678912357846958657423654789; // 256 bits for AES-256

$iv = 1596324856795136; // Initialization Vector

$encrypted = openssl_encrypt($password_or_email, 'aes-256-cbc', $encryption_key, 0, $iv);

echo $encrypted;

 $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $encryption_key, 0, $iv);
 echo $decrypted;
?>
