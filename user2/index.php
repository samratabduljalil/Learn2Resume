<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard 2</title>
</head>
<body>
<?php session_start()?>
<?php  


include('connection.php');

if($_SESSION['position'] != Null) { 
    

    $query = "SELECT * FROM cv_user  WHERE UserID = '{$_SESSION['id']}'";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
 
    $user = mysqli_fetch_assoc($result);
    
    
    
    ?>
    <section class="sidebar">

<div class="user_card">
    <div class="top_flex">
  </div>
   <p class="user_name"> <?php echo $user['name'] ?></p>

<ul>
  
    <li><a href="\chosetemplate.php">Create Cv</a></li>
    <li><a href="editprofile.php">Edit Profile</a></li>
   
    <li><a href="\user\allcourses.php">All Courses</a></li>
    <li><a href="\index.php">Home</a></li>
    <li><a href="\logout.php">Logout</a></li>

</ul>
</div>


<div class="user_card2">

 <div class="cover_photo">

<img src="<?php echo $user['image_co'] ?>" alt="cover image" class="cover_size">

 </div>
 <div class="profile_photo">

  <img src="<?php echo $user['img'] ?>" alt="" class="profile_size">
  
 </div>

 <div class="newsfeed">
    <div class="main_pro">
        <p><span class="pro_name"><?php echo $user['name'] ?> </span><br><span class="pro_occupation"><?php echo $user['position'] ?></span></p>
    </div>

<div class="work">
    <img src="\img\graduated.png" alt="" class="ski_img">
    <p class="work_title">Education</p>

    <img src="\img\certificate (3).png" alt="" class="uni1_img">
    <div class="list_edu">
    <p class="uni1"><?php echo $user['edu_1'] ?>  <br>
    <?php echo $user['degree_1'] ?> <br>
    <?php echo $user['cgpa_2'] ?></p>
   <p class="uni1"><?php echo $user['edu_2'] ?>  <br>
   <?php echo $user['degree_2'] ?><br>
   <?php echo $user['cgpa_2'] ?></p>
</div>
    <img src="\img\certificate (3).png" alt="" class="uni2_img">




</div>




<div class="education">
    <img src="\img\experience (1).png" alt="" class="ski_img">
    <p class="edu_title">Exprience</p>

    <img src="\img\working-time.png" alt="" class="ex1_img">
    <img src="\img\working-time.png" alt="" class="ex2_img">
    <div class="ex_">
    <p class="uni1"><?php echo $user['c_name_1'] ?><br>
    <?php echo $user['c_year_1'] ?></p><br>
       <p class="uni1"><?php echo $user['c_name_2'] ?><br>
       <?php echo $user['c_year_2'] ?></p>
    </div>
</div>





<div class="skills">
    <img src="\img\competence.png" alt="" class="ski_img">
    <p class="ski_title">Skills</p>
    <div class="ski_skills">
    <?php if($user['skills_1'] != Null){ ?>
<button class="ski_btn"><?php echo $user['skills_1'] ?></button> 
<?php } if($user['skills_2'] != Null) { ?>

<button class="ski_btn"><?php echo $user['skills_2'] ?></button> 
<?php } if($user['skills_3'] != Null){ ?>
<button class="ski_btn"><?php echo $user['skills_3'] ?></button>

<?php } if($user['skills_4'] != Null){ ?>
<button class="ski_btn"><?php echo $user['skills_4'] ?></button>

<?php } if($user['skills_5'] != Null){?>
<button class="ski_btn"><?php echo $user['skills_5'] ?></button>
<?php } if($user['skills_6'] != Null){?>
<button class="ski_btn"><?php echo $user['skills_6'] ?></button>
<?php } ?>
</div>


</div>


<div class="personal">
    <img src="\img\personal-information (2).png" alt="" class="ski_img">
<img src="\img\message.png" alt="" class="pr_i1">
<img src="\img\phone.png" alt="" class="pr_i2">
<img src="\img\location.png" alt="" class="pr_i3">

    <p class="pr_title">Personal details</p>
    
<p class="pr1"><?php echo $user['email'] ?></p>
<p class="pr2"><?php echo $user['phone'] ?></p>
<p class="pr3"><?php echo $user['address'] ?></p>



</div>




 </div>
 
 <?php }}else{ 

    header("location: \user2\profile.php");


     } ?></div>

</div>
    </section>



</body>
</html>