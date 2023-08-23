<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="style.css">
    <title>edit Profile</title>
</head>
<?php session_start()?>
<body>



    
<div class="con">
    <div class="design2">
    <form action="edit.php" method="post" enctype="multipart/form-data" >
        <p class="top_pro">Edit Your Personal Details</p>
        <textarea name="" id="about" cols="30" rows="10" class="text_area" required ><?php echo $_SESSION['about'] ?></textarea>
    <input type="text" name="name" id="" class="text_box1" placeholder="Enter Your name" value="<?php echo $_SESSION['name'] ?>">
    <input type="text" name="" id="" class="text_box1" placeholder="Enter Your Phone Number" value="<?php echo $_SESSION['phone'] ?>">
    <input type="email" name="" id="" class="text_box1" placeholder="Enter Your Email" value="<?php echo $_SESSION['email'] ?>">
    <input type="text" name="" id="" class="text_box1" placeholder="Enter Your Address" value="<?php echo $_SESSION['address'] ?>">

    <p class="top_pro">Edit Your Personal Details</p>

    <input type="text" name="" id="" class="text_box1" placeholder='Instution Name* ' value="<?php echo $_SESSION['edu1'] ?>">
    

    <input type="text" name="" id="" class="text_box1" placeholder="Instution Name" value="<?php echo $_SESSION['edu2'] ?>" >
    <input type="text" name="" id="" class="text_box1" placeholder="Degree*" value="<?php echo $_SESSION['deg1'] ?>">
     
       <input type="text" name="" id="" class="text_box1" placeholder="Degree" value="<?php echo $_SESSION['deg2'] ?>">
       <input type="text" name="" id="" class="text_box1" placeholder="Obtain CGPA/GPA*" value="<?php echo $_SESSION['cgpa1'] ?>">
          
          <input type="text" name="" id="" class="text_box1" placeholder="Obtain CGPA/GPA" value="<?php echo $_SESSION['cgpa2'] ?>" >



          <p class="top_pro">Works Exprience</p>
          <input type="text" name="" id="" class="text_box1" placeholder="Organigetion  Name*" value="<?php echo $_SESSION['og1'] ?>">
      
  
          <input type="text" name="" id="" class="text_box1" placeholder="Organigetion  Name" value="<?php echo $_SESSION['og2'] ?>">
          <input type="text" name="" id="" class="text_box1" placeholder="Position*" value="<?php echo $_SESSION['p1'] ?>">
           
             <input type="text" name="" id="" class="text_box1" placeholder="Position" value="<?php echo $_SESSION['p2'] ?>" >
             <input type="text" name="" id="" class="text_box1" placeholder="Working Year*" value="<?php echo $_SESSION['y1'] ?>">
                
                <input type="text" name="" id="" class="text_box1" placeholder="Working Year" value="<?php echo $_SESSION['y2'] ?>" >


                <p class="top_pro">Enter Your Top six Skills</p>

                <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s1'] ?>" >
            
        
                <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s2'] ?>">
                <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s3'] ?>">
                 
                   <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s4'] ?>">
                   <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s5'] ?>">
                      
                      <input type="text" name="" id="" class="text_box1" placeholder="Skills one" value="<?php echo $_SESSION['s6'] ?>">

                      <p class="top_pro">Edit Your Image</p>
                      <label for="image" class="l">Profile Photo:</label>
                    
                  
                   <input type="file" name="pro_img" id=""  >
                   <label for="image" class="l2">Cover Photo:</label>
                   <input type="file" name="co_img" id=""  >



             <a href="profile1.html"><button class="btn_submit" type="submit">Update</button></a>

    </form>
</div></div>

</body>
</html>