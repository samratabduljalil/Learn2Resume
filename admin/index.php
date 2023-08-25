<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <section class="sidebar">

<div class="user_card">
   
   <p class="user_name"><?php session_start(); echo $_SESSION['name'] ?></p>

<ul>
    <li><a href="">profile</a></li>
    <li><a href="addcourse.php">Add Course</a></li>
    <li><a href="addquestion.php">Add Question</a></li>
    <li><a href="addvideo.php">Add video</a></li>
    <li><a href="">All course Data</a></li>
    <li><a href="">Delete course</a></li>
    <li><a href="coursetable.php">All Courses</a></li>
    <li><a href="addtemplate.php">Add Template</a></li>
    <li><a href="./index.php">Home</a></li>
    <li><a href="/logout.php">Log Out</a></li>

</ul>
</div>
<div class="user_card2">

<button class="btnL">Live Data</button>
<div class="container">
<div class="contain">
<div class="card">
    <div class="img_flex">
        <img src="\admin\man.png" alt="" class="card_img">
    </div>
<h3>user cout</h3>

<?php
    include('connection.php');
 $user=0;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM cv_user";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          
            $user=$user+1;
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>

<h2 class="label"><?php echo $user ?></h2>
</div>
<div class="card">
<div class="img_flex">
    <img src="\admin\cv (1).png" alt="" class="card_img">
</div>
    <h3>Active User</h3>

    <?php
    include('connection.php');
 $active=0;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM cv_user";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if($row['active']==1)
            $active=$active+1;
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>



    <h2 class="label"><?php echo $active ?></h2>
</div>
<div class="card">
    <div class="img_flex">
        <img src="\admin\classroom.png" alt="" class="card_img">
    </div>
    <h3>Total courses</h3>
 
 
    <?php
    include('connection.php');
 $a=0;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM course";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          
            $a=$a+1;
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>





    <h2 class="label"><?php echo $a ?></h2>

</div>
<div class="card">
    <div class="img_flex">
        <img src="\admin\certificate (10).png" alt="" class="card_img">
    </div>
    <h3>Total cource complete</h3>

    <?php
    include('connection.php');
 $certificate=0;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM `certificate`";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $certificate=$certificate+1;
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>






    <h2 class="label"><?php echo $certificate ?></h2>
</div>

</div>


</div>


    
</div>
    </section>



</body>
</html>