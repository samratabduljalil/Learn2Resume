<?php

include('connection.php');
session_start();
if(isset($_SESSION['admin'])){
$data = json_decode(file_get_contents("php://input"), true);

// Insert the product into the database
$Name = $data['course_name'];
$code = $data['course_code'];
$fee = $data['coursefee'];







$sql = "INSERT INTO `course`( `Name`, `course_code`, `fee`) VALUES ('{$Name}','{$code}','{$fee}')";

if ($connection->query($sql) === TRUE) {
    $response = ['message' => 'Course Added successfully.'];
  
} else {
    $response = ['message' => 'Error: ' . $connection->error];
}

// Close the database connection
$connection->close();

header("Content-Type: application/json");
echo json_encode($response);


}else{header("location: \Cvit-CVgenerator/authentication/login.php");}
?>