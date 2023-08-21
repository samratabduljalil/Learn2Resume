<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>Profile</title>
</head>


<body>
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="\img\id-card.png" alt="" class="i1">
    <img src="\img\test.png" alt="" class="i2">
    <img src="\img\experience.png" alt="" class="i3">
    <img src="\img\self-development.png" alt="" class="i4">
    <hr class="h1">
    <hr class="h2">
    <hr class="h3">
    
<div class="con">
    <div class="design">
    <form action="\user2\profile1.php" method="post">
        <p class="top_pro">Enter Your Personal Details</p>
        <textarea name="about" id="" cols="30" rows="10" class="text_area" required placeholder="Write About You (in 50 word)"></textarea>
   
    <input type="text" name="phone" id="" class="text_box1" placeholder="Enter Your Phone Number" required>
    <input type="text" name="position" id="" class="text_box1" placeholder="Enter Your Current Position" required>
    <input type="text" name="address" id="" class="text_box1" placeholder="Enter Your Current Address" required>
    


             <button class="btn_submit" type="submit">save and next</button>

    </form>
</div></div>

</body>
</html>