<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>Profile</title>
</head>
<body>
<?php  session_start();
if(isset($_SESSION['user'])){
$_SESSION['og1']=$_POST['og1'];
$_SESSION['p1']=$_POST['p1'];
$_SESSION['y1']=$_POST['y1'];
$_SESSION['og2']=$_POST['og2'];
$_SESSION['p2']=$_POST['p2'];
$_SESSION['y2']=$_POST['y2'];





?>
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c1">
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c2">
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c3">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="/Cvit-CVgenerator\img\id-card.png" alt="" class="i1">
    <img src="/Cvit-CVgenerator\img\test.png" alt="" class="i2 green">
    <img src="/Cvit-CVgenerator\img\experience.png" alt="" class="i3 green">
    <img src="/Cvit-CVgenerator\img\self-development.png" alt="" class="i4 green">
    <hr class="h1 green_line">
    <hr class="h2 green_line">
    <hr class="h3 green_line">
    
<div class="con">
    <div class="design">
    <form action="/Cvit-CVgenerator\user2\addphoto.php" method="post">

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
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</body>
</html>