<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <?php session_start();
if(isset($_SESSION['user'])){




?>
  <title>E-Certificate</title>
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
      
      background-color:rgb(218, 209, 209);
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
    .cer{
        position: absolute;
padding:7px;
background-color: rgb(160, 243, 160);
top:88%;
left:45%;


    }
    .cer1{
        position: absolute;
padding:7px;
background-color: rgb(160, 243, 160);
top:88%;
left:35%;


    }
    .cer:hover{
 
        background-color: rgb(34, 255, 34);
    }
    .cer1:hover{
 
 background-color: rgb(34, 255, 34);
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
.course{
  font-size: 31px;
      font-weight: bold;


}
    .date {
      font-size: 18px;
      color: #888;
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
  </style>
</head>

    

<?php
include('connection.php');
session_start();

$row;
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


// Fetch product data from the database
$sql = "SELECT * FROM course where course_code='{$_GET['id']}'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
      


?>
       

    
    
    


<body>
  <div id="now">
  <div class="certificate">
    <img class="logo" src="quality (2).png" alt="Logo">
    <h1 class="title">Certificate of Achievement</h1>
    <p class="subtitle">This is to certify that</p>
    <p class="name"><?php echo $_SESSION['name'] ;?></p>
    <p class="event">Has successfully completed the<span class="course"> <?php echo $row['Name'] ;?></span> Course</p>
    <p class="date"></p>
    <div class="signature">
      <img src="ukrainian.png" alt="Signature">
      <div>
        <p class="organizer">Team ABC</p>
        <p class="role">Event Organizer</p>
      </div>
    </div>
  </div>
  </div>
  <?php


$sql1 = "SELECT * FROM `certificate` where course_code='{$_GET['id']}' and student_id='{$_SESSION['id']}'";
$result1 = $connection->query($sql1);
if ($result1->num_rows == 0) {

 $sql = "INSERT INTO `certificate`( `course_code`, `course_name`, `student_id`) VALUES ('{$row['course_code']}','{$row['Name']}','{$_SESSION['id']}')";
 $result = $connection->query($sql);
}
} 
 // Close the database connection
 $connection->close();
 ?>


<input class="cer" type="button" value="Convert PDF" onclick="convertHTMLtoPDF()">
<a href="\Cvit-CVgenerator/user2\index.php"><button class="cer1" >back To dashboard</button></a> 
</body>
<script type="text/javascript" src="convert_to_pdf.js"></script>
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
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</html>
