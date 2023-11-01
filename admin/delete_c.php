<?php

include('connection.php');
session_start();
if(isset($_SESSION['admin'])){
$data = json_decode(file_get_contents("php://input"), true);

// Insert the product into the database

$code = $data['course_code'];



$sql = "DELETE FROM `course` WHERE course_code = '{$code}'";

if ($connection->query($sql) === TRUE) {
    $response = ['message' => 'Course Deleted successfully.'];
  
} else {
    $response = ['message' => 'Error: ' . $connection->error];
}

// Close the database connection
$connection->close();

header("Content-Type: application/json");
echo json_encode($response);


}else{header("location: \Cvit-CVgenerator/authentication/login.php");}
?>