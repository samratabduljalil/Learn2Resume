<?php
session_start(); 
if(isset($_SESSION['user'])){
include('connection.php');

$query = "UPDATE `cv_user` SET `active`= 0 WHERE UserID = '{$_SESSION['id']}'";
            $result = mysqli_query($connection, $query);
            $_SESSION['non']=False;
session_destroy();


header("Location: \Cvit-CVgenerator/index.php");

}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}



?>
