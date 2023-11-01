<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .certificate {
      background-color: #fff;
      width: 800px;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .logo {
      width: 80px;
      margin-bottom: 10px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }

    .name {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .event {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .date {
      font-size: 36px;
      color: green;
         
   font-weight: 600;
      margin-bottom: 30px;
    }
    .date1 {
      font-size: 36px;
         
   font-weight: 600;
      color: red;
      margin-bottom: 30px;
    }

    .signature {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signature img {
      width: 120px;
      margin-right: 20px;
    }

    .organizer {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .role {
      font-size: 18px;
      color: #555;
    }
    .cer{
        position: absolute;
padding:7px;
background-color: rgb(160, 243, 160);
top:85%;
left:45%;


    }
    .cer1{
        position: absolute;
padding:7px;
background-color: rgb(160, 243, 160);
top:85%;
left:35%;


    }
    .cer:hover{
 
        background-color: rgb(34, 255, 34);
    }
    .cer1:hover{
 
 background-color: rgb(34, 255, 34);
}
  </style>
</head>
<body>











<?php
    include('connection.php');
    session_start();
    $mark=0;
    $row;
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
           $po='p'.$a;
if($row['answer']==$_POST[$po]){

    $mark=$mark+1;
}


             $a=$a+1;
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>










  <div class="certificate">
   
    
    <p class="subtitle"></p>
    <p class="name"><?php echo $_SESSION['name'] ;?></p>
    <p class="event">Your obtain marks is</p>
    <p class="name"><?php echo $mark ?></p>
    <?php if($mark >=3){ ?>
<p class="date">Pass</p>

 <?php   }else{ ?>

 <p class="date1">Fail</p>
<?php } ?>
    
        
        <p class="role">Now You Can download your certificate</p>
      </div>
    </div>
  </div>


  <?php if($mark >=3){ ?>
   <a href="certificate.php?id=<?php echo $_GET['id'] ?>"><button class="cer" >GET Your certificate</button></a> 

 <?php   }?>



 <a href="\Cvit-CVgenerator/user/question.php?id=<?php echo $_GET['id'] ?>"><button class="cer1" >Retry</button></a> 
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
