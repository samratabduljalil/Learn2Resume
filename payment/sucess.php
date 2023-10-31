<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Successful</title>
</head>
<body>
  <div class="flex">
<h1 class="sucess">Your payment is successful</h1>
<h3 class="redirect">You will be automatic redirected to your cours in a moment</h3>
</div>  

<?php
include('connection.php');
session_start();

$payment=$_POST['amount'];
$course_id=$_POST['value_a'];
$currentDate = date("Y-m-d");
$user_id = $_POST['value_a'];
$query="INSERT INTO `payment_course`(`course_id`, `user_id`, `payment_money`, `Current_d`) VALUES ('{$course_id}','{$user_id}','{$payment}','{$currentDate}')";

if (mysqli_query($connection, $query)) {




  
  sleep(5);
  header("location: login.php");

} else {
  echo "Error inserting data: " . mysqli_error($connection);
}


?>


</body>
</html>