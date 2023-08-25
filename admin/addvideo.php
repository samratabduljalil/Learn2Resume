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
    <form action="add_v.php" method="post" enctype="multipart/form-data" >
        <p class="top_pro">ADD New Video</p>
        
    <input type="text" name="name" id="" class="text_box1" placeholder="Enter Course code" >
    <input type="text" name="" id="" class="text_box1" placeholder="Enter Your Course video Link" >
    <select id="sign" name="sign" class="sign_text">
        <option value="0" class="sign_text">Road Map Video</option>
        <option value="1" class="sign_text">Playlist Video</option>


    



            <button class="btn_submit" type="submit">Add course</button>

    </form>
</div></div>

</body>
</html>