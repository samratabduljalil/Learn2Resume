<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="style.css">
    <title>Delete Course</title>
</head>
<?php session_start()?>
<body>



    
<div class="con">
    <div class="design2">
    <form action="delete_c.php" method="post" enctype="multipart/form-data" >
        <p class="top_pro">Delete Course</p>
        <?php if(isset($_SESSION['done'])){
        if($_SESSION['done']==True) {?>
            <p class="top_pro1">sucessfully Deleted</p>
            <input type="text" name="course_name" id="" class="text_box1" placeholder="Enter Course name" >
    <input type="text" name="course_code" id="" class="text_box1" placeholder="Enter Your Course code" >

        <?php $_SESSION['done']=False ;
    }else{?>
    <input type="text" name="course_name" id="" class="text_box1" placeholder="Enter Course name" >
    <input type="text" name="course_code" id="" class="text_box1" placeholder="Enter Your Course code" >
   

    <?php }}else{?>
        <input type="text" name="course_name" id="" class="text_box1" placeholder="Enter Course name" >
    <input type="text" name="course_code" id="" class="text_box1" placeholder="Enter Your Course code" >
        <?php }?>

             <a href="profile1.html"><button class="btn_submit" type="submit">Delete course</button></a>

    </form>
</div></div>

</body>
</html>