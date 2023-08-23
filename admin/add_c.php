<?php

include('connection.php');
session_start();

$course_name = $_POST["course_name"];
$course_code = $_POST['course_code'];




$query = "INSERT INTO `course`( `Name`, `course_code`) VALUES ('{$course_name}', '{$course_code}')";


if (mysqli_query($connection, $query)) {
    header("location: addcourse.php");
    $_SESSION['done']=True;
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}


























?>