<?php
session_start(); 

$query = "UPDATE `cv_user` SET `active`=0 WHERE UserID = '{$_session['id']}'";
            $result = mysqli_query($connection, $query);

session_destroy();


header("Location: index.php");

?>
