<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="style.css">
    <title>Delete Course</title>
</head>
<?php session_start();
if(isset($_SESSION['admin'])){




?>
<body>



    
<div class="con">
    <div class="design2">
    <form id="courseForm" method="post" enctype="multipart/form-data" >
        <p class="top_pro">Delete Course</p>
       
            <p class="top_pro1" id="message"></p>
            <input type="text" name="course_name" id="course_name" class="text_box1" placeholder="Enter Course name" >
    <input type="text" name="course_code" id="course_code" class="text_box1" placeholder="Enter Your Course code" >

       

             <button class="btn_submit" type="submit">Delete course</button>

    </form>
</div></div>
<a href="index.php" ><button class="btn_submit"  >Back</button></a>
<script>
        document.getElementById("courseForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Get form data
         const course_code = document.getElementById("course_code").value;
           
            

            // Create an object with the form data
            const data = {
                course_code
                
           
            };

            // Send the data to the server
            fetch("delete_c.php", {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(result => {
                document.getElementById("message").textContent = result.message;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    </script>
<?php
}else{header("location: \Cvit-CVgenerator/authentication/login.php");}?>
</body>
</html>