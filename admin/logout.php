<?php
session_start(); 
if(isset($_SESSION['admin'])){





session_destroy();


header("Location: \index.php");
}else{header("location: \Cvit-CVgenerator/authentication/login.php");}
?>