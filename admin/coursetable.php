<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_table.css">
    <title>edit Profile</title>
</head>
<?php session_start()?>
<body>



    <h1>Course Details</h1>
<div class="con">
   



    <div class="design10">


    <table class="un"><th>ID</th><th>Course Name</th><th>Course Course</th>
    
    <?php
    include('connection.php');

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM course";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>


    <tr><td><?php echo $row['ID']?></td><td><?php echo $row['Name']?></td><td><?php echo $row['course_code']?></td></tr>
    
    
    <?php
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>
    




    </table>

</div></div>
</body>
</html>