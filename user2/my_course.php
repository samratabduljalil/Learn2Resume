<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style22.css">
    <title>my courses</title>
</head>
<body>
<?php session_start();
if(isset($_SESSION['user'])){


?>
    <section class="sidebar">

<div class="user_card">
 
   <p class="user_name"> <?php echo $_SESSION['name'] ?></p>

<ul>
<li><a href="\Cvit-CVgenerator\chosetemplate.php">Create Cv</a></li>
    <li><a href="editprofile.php">Edit Profile</a></li>
    <li><a href="my_cer.php">My Certificate</a></li>
    <li><a href="my_course.php">My course</a></li>
    <li><a href="\Cvit-CVgenerator\course\index.php">All Courses</a></li>
    <li><a href="index.php">Profile</a></li>
    <li><a href="\Cvit-CVgenerator\index.php">Home</a></li>
    <li><a href="\Cvit-CVgenerator\logout.php">Logout</a></li>
</ul>
</div>
<div class="user_card2">

<h1>MY Courses</h1>
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
           
         <a href='\Cvit-CVgenerator/user/in_course.php?id=<?php echo $row2['course_code'] ?>' class="card" > 
            <h1 class="cardtext"><span class="t1"><?php echo $row2['Name'] ?></span></h1>

          <div class="in_card"><p>Click Here to Get started</p></div>




        </a>

            <?php
            }
        }}
    } else {
        echo "You donot have enroll any course.";
    }

    // Close the database connection
    $connection->close();
    ?>



        

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6541e338a84dd54dc48758ba/1he4lv6c6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


        
</div>



</section>


   
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>


</body>
</html>