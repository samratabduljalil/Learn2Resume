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
    <section class="sidebar">

<div class="user_card">
    <div class="top_flex">
  </div>
   <p class="user_name"> <?php echo $_SESSION['name'] ?></p>

<ul>
    <li><a href="">profile</a></li>
    <li><a href="\chosetemplate.php">Create Cv</a></li>
    <li><a href="\cv_templates\t7.php">Download CV</a></li>
    <li><a href="">All Courses</a></li>
    <li><a href="\index.php">Home</a></li>
    <li><a href="\logout.php">Logout</a></li>

</ul>
</div>

<?php  if(isset($_SESSION['position'])) { ?>
<div class="user_card2">

 <div class="cover_photo">

<img src="/img/04.jpg" alt="" class="cover_size">

 </div>
 <div class="profile_photo">

  <img src="/img/account.png" alt="" class="profile_size">
  
 </div>

 <div class="newsfeed">
    <div class="main_pro">
        <p><span class="pro_name"><?php echo $_SESSION['name'] ?> </span><br><span class="pro_occupation">Software Engineer</span></p>
    </div>

<div class="work">
    <img src="\img\graduated.png" alt="" class="ski_img">
    <p class="work_title">Education</p>

    <img src="\img\certificate (3).png" alt="" class="uni1_img">
    <div class="list_edu">
    <p class="uni1">United International University <br>
    B.Sc in Computer Science and Engineering<br>
   CGPA/GPA:2.10</p>
   <p class="uni1">United International University <br>
    B.Sc in Computer Science and Engineering<br>
   CGPA/GPA:2.10</p>
</div>
    <img src="\img\certificate (3).png" alt="" class="uni2_img">




</div>




<div class="education">
    <img src="\img\experience (1).png" alt="" class="ski_img">
    <p class="edu_title">Exprience</p>

    <img src="\img\working-time.png" alt="" class="ex1_img">
    <img src="\img\working-time.png" alt="" class="ex2_img">
    <div class="ex_">
    <p class="uni1">Vivasoft Ltd. <br>
        2022-2024</p><br>
       <p class="uni1">BjIT<br>
        2022-2024</p>
    </div>
</div>





<div class="skills">
    <img src="\img\competence.png" alt="" class="ski_img">
    <p class="ski_title">Skills</p>
    <div class="ski_skills">
<button class="ski_btn">samrat abdul Jalil</button> <button class="ski_btn">samrat abdul Jalil</button> <button class="ski_btn">samrat abdul Jalil</button>
<button class="ski_btn">samrat abdul Jalil</button>
<button class="ski_btn">samrat abdul Jalil</button>
</div>


</div>


<div class="personal">
    <img src="\img\personal-information (2).png" alt="" class="ski_img">
<img src="\img\message.png" alt="" class="pr_i1">
<img src="\img\phone.png" alt="" class="pr_i2">
<img src="\img\location.png" alt="" class="pr_i3">

    <p class="pr_title">Personal details</p>
    
<p class="pr1">samrat@gmail.com</p>
<p class="pr2">017777777777</p>
<p class="pr3">Satarkul,Badda, Dhaka</p>



</div>




 </div>
 
 <?php }else{ ?>

<h1>Please Update Your details otherWise You cannot create your cv </h1>


    <?php } ?>
</div>

</div>
    </section>



</body>
</html>