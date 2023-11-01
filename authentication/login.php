<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>LogIn</title>
</head>
<body>
    

    <nav>
        <ul>
        <li><a href="\Cvit-CVgenerator\index.php">Home</a></li>
          <li><a href="\Cvit-CVgenerator\course\index.php">Course</a></li>
        </ul>
      </nav>
    
<div class="sign_container">
    <div class="sign_contain">
        <div class="sign_card">
            <h1>LogIn</h1>
<form action="send_otp.php" method="post">


<?php  session_start(); if(isset($_SESSION['non'])){
        if($_SESSION['non']==TRUE) {?>
            
            <?php
            header("location: \user2\index.php");
            
            
    }}?>
        
        <?php if(isset($_SESSION['exist'])){
        if($_SESSION['exist']==TRUE) {?>
             <h1 class="red">Wrong OTP please Login again</h1>
            <?php
           $_SESSION['exist']=false;
           
            
    }}?>


<input type="email" name="email" id="email" class="sign_text" placeholder="Enter Your Email">

<input type="password" name="password" id="password" class="sign_text" placeholder="Enter Your Password">
<select id="sign" name="sign" class="sign_text">
  <option value="cv_admin" class="sign_text" >Admin</option>
  <option value="cv_user" class="sign_text">User</option>
 
</select><br>
<button type="submit" class="btn_signup">LogIn</button>
<h1>Don`t have account?<a href="signup.php" class="log_link"> Signup</a> </h1>
</form>
</div>
</div>
</div>
<?php


 $_SESSION['check']="login";
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

</body>
</html>