<?php

include('connection.php');

session_start();
if(isset($_SESSION['admin'])){
$code = $_POST["course_code"];
$link = $_POST['link'];
$R_p=$_POST['sign'];



$query = "INSERT INTO course_video(course_id,video_link,R_p) VALUES ('{$code}', '{$link}', '{$R_p}')";


if (mysqli_query($connection, $query)) {
    $_SESSION['done']=True;
    header("location: addvideo.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}























}else{header("location: \Cvit-CVgenerator/authentication/login.php");}


?>