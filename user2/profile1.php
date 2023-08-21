<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>Profile</title>
</head>

<?php session_start();
$_SESSION['phone']=$_POST['phone'];
$_SESSION['about']=$_POST['about'];
$_SESSION['address']=$_POST['address'];
$_SESSION['position']=$_POST['position'];




?>
<body>
    <img src="\img\check-button.png" alt="" class="c1">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="\img\id-card.png" alt="" class="i1">
    <img src="\img\test.png" alt="" class="i2 green">
    <img src="\img\experience.png" alt="" class="i3">
    <img src="\img\self-development.png" alt="" class="i4">
    <hr class="h1 green_line">
    <hr class="h2">
    <hr class="h3">
    
<div class="con">
    <div class="design">
    <form action="\user2\profile2.php" method="post">
        <p class="top_pro">Enter Your Educational Details</p>
    <input type="text" name="edu1" id="" class="text_box1" placeholder='Instution Name* ' required>
    

 <input type="text" name="edu2" id="" class="text_box1" placeholder="Instution Name" >
 <input type="text" name="deg1" id="" class="text_box1" placeholder="Degree*" required>
  
    <input type="text" name="deg2" id="" class="text_box1" placeholder="Degree" >
    <input type="text" name="cgpa1" id="" class="text_box1" placeholder="Obtain CGPA/GPA*" required>
       
       <input type="text" name="cgpa2" id="" class="text_box1" placeholder="Obtain CGPA/GPA" >
       

             <a href="profile1.html"><button class="btn_submit" type="submit">save and next</button></a>

    </form>
</div></div>

</body>
</html>