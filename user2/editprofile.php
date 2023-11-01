<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="style.css">
    <title>edit Profile</title>
</head>

<?php session_start();
if(isset($_SESSION['user'])){



include('connection.php');
    
    $query = "SELECT * FROM cv_user  WHERE UserID = '{$_SESSION['id']}'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
     
        $user = mysqli_fetch_assoc($result);
        $encryption_key_email =12345678912000006958657423654789; 
$iv_email = 1596324856700000; 
$decrypted = openssl_decrypt($user['email'], 'aes-256-cbc', $encryption_key_email, 0, $iv_email);
        ?>
<body>



    
<div class="con">
    <div class="design2">
    <form action="edit.php" method="post" enctype="multipart/form-data" >
    <?php if(isset($_SESSION['done'])){
        if($_SESSION['done']==True) {?>
            <p class="top_pro1">Sucessfully added</p>
            <?php $_SESSION['done']=False ;
    }}?>
        <p class="top_pro">Edit Your Personal Details</p>
        <textarea name="about" id="" cols="30" rows="10" class="text_area" required ><?php echo $user['about'] ?></textarea>
    <input type="text" name="name" id="" class="text_box1" placeholder="Enter Your name" value="<?php echo $user['name'] ?>">
    <input type="text" name="phone" id="" class="text_box1" placeholder="Enter Your Phone Number" value="<?php echo $user['phone'] ?>">
    <input type="email" name="email" id="" class="text_box1" placeholder="Enter Your Email" value="<?php echo $decrypted ?>">
    <input type="text" name="address" id="" class="text_box1" placeholder="Enter Your Address" value="<?php echo $user['address'] ?>">
    <input type="text" name="position" id="" class="text_box1" placeholder="Enter Your Occupation" value="<?php echo $user['position'] ?>">

    <p class="top_pro">Edit Your Personal Details</p>

    <input type="text" name="edu1" id="" class="text_box1" placeholder='Instution Name* ' value="<?php echo $user['edu_1'] ?>">
    

    <input type="text" name="edu2" id="" class="text_box1" placeholder="Instution Name" value="<?php echo $user['edu_2'] ?>" >
    <input type="text" name="deg1" id="" class="text_box1" placeholder="Degree*" value="<?php echo $user['degree_1'] ?>">
     
       <input type="text" name="deg2" id="" class="text_box1" placeholder="Degree" value="<?php echo $user['degree_2'] ?>">
       <input type="text" name="cgpa1" id="" class="text_box1" placeholder="Obtain CGPA/GPA*" value="<?php echo $user['cgpa_1'] ?>">
          
          <input type="text" name="cgpa2" id="" class="text_box1" placeholder="Obtain CGPA/GPA" value="<?php echo $user['cgpa_2'] ?>" >



          <p class="top_pro">Works Exprience</p>
          <input type="text" name="og1" id="" class="text_box1" placeholder="Organigetion  Name*" value="<?php echo $user['c_name_1'] ?>">
      
  
          <input type="text" name="og2" id="" class="text_box1" placeholder="Organigetion  Name" value="<?php echo $user['c_name_2'] ?>">
          <input type="text" name="p1" id="" class="text_box1" placeholder="Position*" value="<?php echo $user['c_position_1'] ?>">
           
             <input type="text" name="p2" id="" class="text_box1" placeholder="Position" value="<?php echo $user['c_position_2'] ?>" >
             <input type="text" name="y1" id="" class="text_box1" placeholder="Working Year*" value="<?php echo $user['c_year_1'] ?>">
                
                <input type="text" name="y2" id="" class="text_box1" placeholder="Working Year" value="<?php echo $user['c_year_2'] ?>" >


                <p class="top_pro">Enter Your Top six Skills</p>

                <input type="text" name="s1" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_1'] ?>" >
            
        
                <input type="text" name="s2" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_2'] ?>">
                <input type="text" name="s3" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_3'] ?>">
                 
                   <input type="text" name="s4" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_4'] ?>">
                   <input type="text" name="s5" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_5'] ?>">
                      
                      <input type="text" name="s6" id="" class="text_box1" placeholder="Skills one" value="<?php echo $user['skills_6'] ?>">

                      <p class="top_pro">Edit Your Image</p>
                      <label for="image" class="l">Profile Photo:</label>
                    
                  
                   <input type="file" name="pro_img" id=""  >
                   <label for="image" class="l2">Cover Photo:</label>
                   <input type="file" name="co_img" id=""  >



             <a href="profile1.html"><button class="btn_submit" type="submit">Update</button></a>
            
    </form>
    
</div>


</div>
<?php } ?>
<a href="index.php"><button class="btn_submit" >Back</button></a>
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