<?php
include("connection.php");

// Get the user's search query from the AJAX request
if (isset($_POST['query'])) {
    $search = $connection->real_escape_string($_POST['query']);
    
    // Construct the SQL query to search for products
    $sql = "SELECT * FROM course WHERE Name LIKE '%$search%'";
    
    $result = $connection->query($sql);
    
    $results = array();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }
    
    // Encode the results as JSON and send them to the front end
    echo json_encode($results);
}

$connection->close();
?>