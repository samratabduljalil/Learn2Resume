<?php

include('connection.php');

// SQL query to fetch data from the database
$sql = "SELECT * FROM course";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Close the database connection
    $conn->close();

    // Set the response content type to JSON
    header('Content-Type: application/json');

    // Return the data as JSON
    echo json_encode($data);
} else {
    echo json_encode("No data found");
}
?>



?>