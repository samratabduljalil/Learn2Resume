<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style22.css">
    <title>User Dashboard</title>
</head>
<body>
<?php session_start()?>
    <section class="sidebar">

<div class="user_card">
 
   <p class="user_name"> <?php echo $_SESSION['name'] ?></p>

<ul>
  <li><a href="\chosetemplate.php">Create Cv</a></li>
  <li><a href="editprofile.php">Edit Profile</a></li>
  <li><a href="my_cer.php">My Certificate</a></li>
  <li><a href="my_course.php">My course</a></li>
  <li><a href="\user\allcourses.php">All Courses</a></li>
  <li><a href="\index.php">Home</a></li>
  <li><a href="\logout.php">Logout</a></li>

</ul>
</div>
<div class="user_card2">

<h1>MY Certificate</h1>
<section class="container">
    <div class="course">



    <?php
    include('connection.php');

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM `payment_course` WHERE `user_id`='{$_SESSION['id']}'";
  
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT * FROM `course` WHERE `ID`='{$row['course_id']}'";
            $result2 = $connection->query($sql2);

            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {

            ?>
           
         <a href='\user\certificate.php?id=<?php echo $row2['course_code'] ?>' class="card" > 
            <h1 class="cardtext"><span class="t1"><?php echo $row2['course_name'] ?></span></h1>

          <div class="in_card"><p>Click Here to Get started</p></div>




        </a>

            <?php
            }
        }}
    } else {
        echo "You donot hav eany certification.";
    }

    // Close the database connection
    $connection->close();
    ?>



        

      


        
</div>



</section>


   



</body>
</html>