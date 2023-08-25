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
    <form action="add_Q.php" method="post" enctype="multipart/form-data" >
        <p class="top_pro">ADD Question</p>

        <?php if(isset($_SESSION['done'])){
        if($_SESSION['done']==True) {?>
            <p class="top_pro1">Sucessfully added</p>
            <?php $_SESSION['done']=False ;
    }}?>
        
        <textarea name="q1" id="" cols="30" rows="10" class="text_area" required placeholder="Question 1"></textarea>
        <input type="text" name="op11" id="" class="text_box1" placeholder="option 1" >
        <input type="text" name="op12" id="" class="text_box1" placeholder="option 2" >
        <input type="text" name="op13" id="" class="text_box1" placeholder="option 3" >
        <input type="text" name="op14" id="" class="text_box1" placeholder="option 4" >
        <label for="">select answer</label>
        <select name="ans1" id="" class="text_box1">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>


        <textarea name="q2" id="" cols="30" rows="10" class="text_area" required placeholder="Question 1"></textarea>
        <input type="text" name="op21" id="" class="text_box1" placeholder="option 1" >
        <input type="text" name="op22" id="" class="text_box1" placeholder="option 2" >
        <input type="text" name="op23" id="" class="text_box1" placeholder="option 3" >
        <input type="text" name="op24" id="" class="text_box1" placeholder="option 4" >
        <label for="">select answer</label>
        <select name="ans2" id="" class="text_box1">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>


        <textarea name="q3" id="" cols="30" rows="10" class="text_area" required placeholder="Question 1"></textarea>
        <input type="text" name="op31" id="" class="text_box1" placeholder="option 1" >
        <input type="text" name="op32" id="" class="text_box1" placeholder="option 2" >
        <input type="text" name="op33" id="" class="text_box1" placeholder="option 3" >
        <input type="text" name="op34" id="" class="text_box1" placeholder="option 4" >
        <label for="">select answer</label>
        <select name="ans3" id="" class="text_box1">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>

        <textarea name="q4" id="" cols="30" rows="10" class="text_area" required placeholder="Question 1"></textarea>
        <input type="text" name="op41" id="" class="text_box1" placeholder="option 1" >
        <input type="text" name="op42" id="" class="text_box1" placeholder="option 2" >
        <input type="text" name="op43" id="" class="text_box1" placeholder="option 3" >
        <input type="text" name="op44" id="" class="text_box1" placeholder="option 4" >
        <label for="">select answer</label>
        <select name="ans4" id="" class="text_box1">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>
        

        <textarea name="q5" id="" cols="30" rows="10" class="text_area" required placeholder="Question 1"></textarea>
        <input type="text" name="op51" id="" class="text_box1" placeholder="option 1" >
        <input type="text" name="op52" id="" class="text_box1" placeholder="option 2" >
        <input type="text" name="op53" id="" class="text_box1" placeholder="option 3" >
        <input type="text" name="op54" id="" class="text_box1" placeholder="option 4" >
        <label for="">select answer</label>
        <select name="ans5" id="" class="text_box1">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>
   
    <input type="text" name="C_code" id="" class="text_box1" placeholder="Enter Your Course code" >
   

    



            <button class="btn_submit" type="submit">Add Question</button>

    </form>
</div></div>

</body>
</html>