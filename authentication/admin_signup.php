<?php
include('connection.php');
$encryption_key =12345678912357846958657423654789; 
$iv = 1596324856795136; 

$encryption_key_email =12345678912000006958657423654789; 
$iv_email = 1596324856700000; 
$encrypted = openssl_encrypt($_POST['password'], 'aes-256-cbc', $encryption_key, 0, $iv);
$encrypted_email = openssl_encrypt($_POST['email'], 'aes-256-cbc', $encryption_key_email, 0, $iv_email);
$query = "INSERT INTO {$_POST['sign']}( name, email, password) VALUES ('{$_POST['name']}', '{$encrypted_email}', '{$encrypted}')";
if (mysqli_query($connection, $query)) {
    header("location: \Cvit-CVgenerator\admin\index.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}


?>