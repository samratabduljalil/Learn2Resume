<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_table.css">
    <title>edit Profile</title>

<style>

.btn{
padding:5px;
background-color: rgb(167, 246, 167);
justify-content: center;
margin-left: 400px;
border-radius: 4px ;

}
.btn:hover{
padding:5px;
background-color: rgb(27, 249, 27);


}


</style>

</head>
<?php session_start();
if(isset($_SESSION['admin'])){




?>
<body>



    <h1>Course Details</h1>
<div class="con">
   



    <div class="design10">


    <table class="un"><th>ID</th><th>Course Name</th><th>Course Code</th><th>Course Fee</th>
    
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


    <tr><td><?php echo $row['ID']?></td><td><?php echo $row['Name']?></td><td><?php echo $row['course_code']?></td><td><?php echo $row['fee']?></td></tr>
    
    
    <?php
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>
   




    </table>
    <a href="index.php"><button class="btn">BACK to Dashboard</button></a>
</div></div>
<?php
}else{header("location: \Cvit-CVgenerator/authentication/login.php");}?>
</body>
</html>