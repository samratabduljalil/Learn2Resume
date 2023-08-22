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
<?php  if($_SESSION['position'] != Null) { ?>
    <section class="sidebar">

<div class="user_card">
    <div class="top_flex">
  </div>
   <p class="user_name"> <?php echo $_SESSION['name'] ?></p>

<ul>
  
    <li><a href="\chosetemplate.php">Create Cv</a></li>
    <li><a href="\cv_templates\t7.php">Edit Profile</a></li>
    <li><a href="">All Courses</a></li>
    <li><a href="\index.php">Home</a></li>
    <li><a href="\logout.php">Logout</a></li>

</ul>
</div>


<div class="user_card2">

 <div class="cover_photo">

<img src="<?php echo $_SESSION['image_co'] ?>" alt="" class="cover_size">

 </div>
 <div class="profile_photo">

  <img src="<?php echo $_SESSION['img'] ?>" alt="" class="profile_size">
  
 </div>

 <div class="newsfeed">
    <div class="main_pro">
        <p><span class="pro_name"><?php echo $_SESSION['name'] ?> </span><br><span class="pro_occupation"><?php echo $_SESSION['position'] ?></span></p>
    </div>

<div class="work">
    <img src="\img\graduated.png" alt="" class="ski_img">
    <p class="work_title">Education</p>

    <img src="\img\certificate (3).png" alt="" class="uni1_img">
    <div class="list_edu">
    <p class="uni1"><?php echo $_SESSION['edu1'] ?>  <br>
    <?php echo $_SESSION['deg1'] ?> <br>
    <?php echo $_SESSION['cgpa2'] ?></p>
   <p class="uni1"><?php echo $_SESSION['edu2'] ?>  <br>
   <?php echo $_SESSION['deg2'] ?><br>
   <?php echo $_SESSION['cgpa1'] ?></p>
</div>
    <img src="\img\certificate (3).png" alt="" class="uni2_img">




</div>




<div class="education">
    <img src="\img\experience (1).png" alt="" class="ski_img">
    <p class="edu_title">Exprience</p>

    <img src="\img\working-time.png" alt="" class="ex1_img">
    <img src="\img\working-time.png" alt="" class="ex2_img">
    <div class="ex_">
    <p class="uni1"><?php echo $_SESSION['og1'] ?><br>
    <?php echo $_SESSION['y1'] ?></p><br>
       <p class="uni1"><?php echo $_SESSION['og2'] ?><br>
       <?php echo $_SESSION['y2'] ?></p>
    </div>
</div>





<div class="skills">
    <img src="\img\competence.png" alt="" class="ski_img">
    <p class="ski_title">Skills</p>
    <div class="ski_skills">
    <?php if($_SESSION['s1'] != Null){ ?>
<button class="ski_btn"><?php echo $_SESSION['s1'] ?></button> 
<?php } if($_SESSION['s2'] != Null) { ?>

<button class="ski_btn"><?php echo $_SESSION['s2'] ?></button> 
<?php } if($_SESSION['s3'] != Null){ ?>
<button class="ski_btn"><?php echo $_SESSION['s3'] ?></button>

<?php } if($_SESSION['s4'] != Null){ ?>
<button class="ski_btn"><?php echo $_SESSION['s4'] ?></button>

<?php } if($_SESSION['s5'] != Null){?>
<button class="ski_btn"><?php echo $_SESSION['s5'] ?></button>
<?php } if($_SESSION['s6'] != Null){?>
<button class="ski_btn"><?php echo $_SESSION['s6'] ?></button>
<?php } ?>
</div>


</div>


<div class="personal">
    <img src="\img\personal-information (2).png" alt="" class="ski_img">
<img src="\img\message.png" alt="" class="pr_i1">
<img src="\img\phone.png" alt="" class="pr_i2">
<img src="\img\location.png" alt="" class="pr_i3">

    <p class="pr_title">Personal details</p>
    
<p class="pr1"><?php echo $_SESSION['email'] ?></p>
<p class="pr2"><?php echo $_SESSION['phone'] ?></p>
<p class="pr3"><?php echo $_SESSION['address'] ?></p>



</div>




 </div>
 
 <?php }else{ 

    header("location: \user2\profile.php");


     } ?></div>

</div>
    </section>



</body>
</html>