<?php
session_start(); 
include('connection.php');

$query = "UPDATE `cv_user` SET `active`= 0 WHERE UserID = '{$_SESSION['id']}'";
            $result = mysqli_query($connection, $query);

session_destroy();


header("Location: index.php");

?>
