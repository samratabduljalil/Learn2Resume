<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="style.css">
    <title>Add Template</title>
</head>
<?php session_start();
if(isset($_SESSION['admin'])){




?>
<body>



    
<div class="con">
    <div class="design2">
    <form action="add_temp.php" method="post" enctype="multipart/form-data" >


    <?php if(isset($_SESSION['done'])){
        if($_SESSION['done']==True) {?>
            <p class="top_pro1">Sucessfully added</p>
            <?php $_SESSION['done']=False ;
    }}?>
        <p class="top_pro">Upload New template</p>
        <label for="">Add Html File:</label>
    <input type="file" name="html" id="" >
    <label for="">Add CSS File:</label>
    <input type="file" name="css" id="text_box1"><br> <br> 
   <br> <label for="">Add template photo </label>
    <input type="file" name="img" id="text_box1">
    
        <button class="btn_submit" type="submit">upload files</button>

    </form>
</div></div>
<a href="index.php"><button class="btn_submit" >Back</button></a>
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</body>
</html>