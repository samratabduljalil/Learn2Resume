<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiple Choice Question Paper</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .question-paper {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
.btn{
  padding: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: rgb(92, 251, 92);
    margin-left: 45%;

}
.btn1{
  padding: 12px;
  position: absolute;
   top:925px;
   left:25%;
    background-color: rgb(92, 251, 92);
    

}

.btn1:hover{
  
    background-color: green;
    

}
.btn:hover{
  
  background-color: green;
  

}
    .question {
      margin-bottom: 20px;
    }

    .question-text {
      font-weight: bold;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="radio"]:checked + label {
      font-weight: bold;
      color: green;
    }
  </style>
</head>
<body>
  <form action="result.php?id=<?php echo $_GET['id'] ?>" method="post">
  <div class="question-paper">



  <?php
    include('connection.php');
$f=0;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
$a=1;
    // Fetch product data from the database
    $sql = "SELECT * FROM question where course_code='{$_GET['id']}'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
           
           <div class="question">
      <p class="question-text"><?php echo $a ?>.<?php echo $row['question'] ?></p>
      <label><input type="radio" name="p<?php echo $a ?>" value="1" required> a) <?php echo $row['op1'] ?></label>
      <label><input type="radio" name="p<?php echo $a ?>" value="2" required> b) <?php echo $row['op2'] ?></label>
      <label><input type="radio" name="p<?php echo $a ?>" value="3" required> c) <?php echo $row['op3'] ?></label>
      <label><input type="radio" name="p<?php echo $a ?>" value="4" required> d) <?php echo $row['op4'] ?></label>
    </div>
          

            <?php
             $a=$a+1;
        }
    } else {
        echo "Question is not available .";
        $f=1;
    }

    // Close the database connection
    $connection->close();
    ?>





   







    
    <!-- Add more questions similarly -->
  </div>
<?php if($f==1){
  $f=0;
?> 

  
  <?php
}else{?>
 <button class="btn" type="submit">submit</button>
 <?php }?>
  </form>
  <a href="\Cvit-CVgenerator/user2\index.php"><button class="btn1" >Back </button></a>
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
</body>
</html>
