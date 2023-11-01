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
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c1">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="/Cvit-CVgenerator\img\id-card.png" alt="" class="i1">
    <img src="/Cvit-CVgenerator\img\test.png" alt="" class="i2 green">
    <img src="/Cvit-CVgenerator\img\experience.png" alt="" class="i3">
    <img src="/Cvit-CVgenerator\img\self-development.png" alt="" class="i4">
    <hr class="h1 green_line">
    <hr class="h2">
    <hr class="h3">
    
<div class="con">
    <div class="design">
    <form action="/Cvit-CVgenerator\user2\profile2.php" method="post">
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
</body>
</html>