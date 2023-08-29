<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>Profile</title>
</head>
<body>

<?php session_start();
$_SESSION['edu1']=$_POST['edu1'];
$_SESSION['deg1']=$_POST['deg1'];
$_SESSION['cgpa1']=$_POST['cgpa1'];
$_SESSION['edu2']=$_POST['edu2'];
$_SESSION['deg2']=$_POST['deg2'];
$_SESSION['cgpa2']=$_POST['cgpa2'];





?>
    <img src="\img\check-button.png" alt="" class="c1">
    <img src="\img\check-button.png" alt="" class="c2">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="\img\id-card.png" alt="" class="i1">
    <img src="\img\test.png" alt="" class="i2 green">
    <img src="\img\experience.png" alt="" class="i3 green">
    <img src="\img\self-development.png" alt="" class="i4">
    <hr class="h1 green_line">
    <hr class="h2 green_line">
    <hr class="h3">
    
<div class="con">
    <div class="design">
    <form action="\user2\profile3.php" method="post">
        <p class="top_pro">Works Exprience</p>
        <input type="text" name="og1" id="" class="text_box1" placeholder="Organization  Name*" required>
    

        <input type="text" name="og2" id="" class="text_box1" placeholder="Organization  Name" >
        <input type="text" name="p1" id="" class="text_box1" placeholder="Position*" required>
         
           <input type="text" name="p2" id="" class="text_box1" placeholder="Position" >
           <input type="text" name="y1" id="" class="text_box1" placeholder="Working Year*" required>
              
              <input type="text" name="y2" id="" class="text_box1" placeholder="Working Year" >

             <a href="profile1.html"><button class="btn_submit" type="submit">save and next</button></a>

    </form>
</div></div>

</body>
</html>