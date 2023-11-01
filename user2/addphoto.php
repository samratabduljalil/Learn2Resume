<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>edit Profile</title>
</head>
<body>
<?php session_start();
$_SESSION['s1']=$_POST['s1'];
$_SESSION['s2']=$_POST['s2'];
$_SESSION['s3']=$_POST['s3'];
$_SESSION['s4']=$_POST['s4'];
$_SESSION['s5']=$_POST['s5'];
$_SESSION['s6']=$_POST['s6'];





?>
 
    
<div class="con">
    <div class="design2">
    <form action="upload_data.php" method="post" enctype="multipart/form-data">
      

                      <p class="top_pro">Add Your Image</p>
                      <label for="image" class="l">Profile Photo:</label>
                    
                  
                   <input type="file" name="pro_img" id="pro_img" >
                   <label for="image" class="l2">Cover Photo:</label>
                   <input type="file" name="co_img" id="co_img" >



             <a href="profile1.html"><button class="btn_submit" type="submit">Update</button></a>

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