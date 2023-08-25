<?php

include('connection.php');


$code = $_POST["course_code"];
$link = $_POST['link'];
$r_p=$_Post['sign'];



$query = "INSERT INTO course_video(  course_code,video_link,R_p) VALUES ('{$code}', '{$link}', '{$R_p}')";


if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}


























?>