<?php
include('connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $table = $_POST["sign"];
    
    $query = "SELECT * FROM {$table}  WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
     
        $user = mysqli_fetch_assoc($result);
        
        
          
           if($table=='cv_admin'){
            $_SESSION['name']=$user['name'];
            $_SESSION['image']=$user['image'];
            $_SESSION['id']=$user['id_user'];
            $_SESSION['admin']=TRUE;
           header("location: \admin\index.php");
           }else{
            $_SESSION['name']=$user['name'];
            $_SESSION['image']=$user['image'];
            $_SESSION['id']=$user['UserID'];
            $_SESSION['admin']=TRUE;
            
          


            header("location: \user2\index.php");
           }
    } else {
        echo "User not found";
    }
}
?>


