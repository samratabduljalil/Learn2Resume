<?php

$hostname = 'localhost';    // Replace with your database server hostname
$username = 'root';      // Replace with your database username
$password = '';  // Replace with your database password
$database = 'cv';      // Replace with your database name

// Attempt to connect to the database
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection error: ' . mysqli_connect_error());
}






?>