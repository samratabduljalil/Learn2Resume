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
    <form action="add_temp.php" method="post" enctype="multipart/form-data" >
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

</body>
</html>