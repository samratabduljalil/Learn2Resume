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
if(isset($_SESSION['admin'])){




?>
<body>



    
<div class="con">
    <div class="design2">
    <form action="add_v.php" method="post" enctype="multipart/form-data" >
    <?php if(isset($_SESSION['done'])){
        if($_SESSION['done']==True) {?>
            <p class="top_pro1">Sucessfully added</p>
            <?php $_SESSION['done']=False ;
    }}?>
        <p class="top_pro">ADD New Video</p>
        
    <input type="text" name="course_code" id="" class="text_box1" placeholder="Enter Course code" >
    <input type="text" name="link" id="" class="text_box1" placeholder="Enter Your Course video Link" >
    <select id="sign" name="sign" class="text_box1">
        <option value="0" class="sign_text">Road Map Video</option>
        <option value="1" class="sign_text">Playlist Video</option>
</select>
        <button class="btn_submit" type="submit">Add video</button>

    </form>
</div></div>
<a href="index.php" ><button class="btn_submit"  >Back</button></a>
<?php
}else{header("location: \Cvit-CVgenerator/authentication/login.php");}?>
</body>
</html>