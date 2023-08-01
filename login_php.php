<?php
include('connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM cv_user WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
     
        $user = mysqli_fetch_assoc($result);
        
        
           $_SESSION['name']=$user['name'];
           $_SESSION['image']=$user['image'];
           $_SESSION['id']=$user['id_user'];
           header("location: \user\index.php");

    } else {
        echo "User not found";
    }
}
?>


