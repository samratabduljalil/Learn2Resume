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
$_SESSION['og1']=$_POST['og1'];
$_SESSION['p1']=$_POST['p1'];
$_SESSION['y1']=$_POST['y1'];
$_SESSION['og2']=$_POST['og2'];
$_SESSION['p2']=$_POST['p2'];
$_SESSION['y2']=$_POST['y2'];





?>
    <img src="\img\check-button.png" alt="" class="c1">
    <img src="\img\check-button.png" alt="" class="c2">
    <img src="\img\check-button.png" alt="" class="c3">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="\img\id-card.png" alt="" class="i1">
    <img src="\img\test.png" alt="" class="i2 green">
    <img src="\img\experience.png" alt="" class="i3 green">
    <img src="\img\self-development.png" alt="" class="i4 green">
    <hr class="h1 green_line">
    <hr class="h2 green_line">
    <hr class="h3 green_line">
    
<div class="con">
    <div class="design">
    <form action="\user2\addphoto.php" method="post">

<p class="top_pro">Enter Your Top six Skills</p>

        <input type="text" name="s1" id="" class="text_box1" placeholder="Skills" >
    

        <input type="text" name="s2" id="" class="text_box1" placeholder="Skills" >
        <input type="text" name="s3" id="" class="text_box1" placeholder="Skills" >
         
           <input type="text" name="s4" id="" class="text_box1" placeholder="Skills" >
           <input type="text" name="s5" id="" class="text_box1" placeholder="Skills" >
              
              <input type="text" name="s6" id="" class="text_box1" placeholder="Skills" >

             <button class="btn_submit" type="submit">save and next</button>

    </form>
</div></div>

</body>
</html>