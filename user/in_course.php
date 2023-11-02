<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <meta name="we arrange free youtube tech video">
    <meta name="keywords" content="FreeResource, free web development, freeresource samratabduljalil,samratabduljalil,free course,freeresource,samratfreeresource">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles_nav.css">
    <link rel="stylesheet" href="page_style.css">


    <link class="icon" rel="icon" href="icon.png" type="image">
    <title>course </title>
</head>
<?php session_start();
if(isset($_SESSION['user'])){




?>
<body>







    
    
   

        <div class="Road_map">
            <h1>Road Map Video</h1>
             </div> 
             <div class="contain_page">
             <div class="container_page">



             <?php
    include('connection.php');
$code=$_GET['id'] ;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM course_video where course_id = '{$code}' and R_p=0";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
           
           <div class="card_page">
           <?php echo $row['video_link']    ;?>
                
                </div>  
              

            <?php
        }
    } else {
        echo "No video found.";
    }

    // Close the database connection
    $connection->close();
    ?>


                
            
                
               
                
               
                
               
                
                
                
                
                </div>
                
                
                
                
                






</div>















    <div class="playlist">
        <h1>playlist And Oneshot</h1>
    </div>

    <div class="contain_page">
        <div class="container_page">
        <?php
    include('connection.php');
$code=$_GET['id'] ;
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM course_video where course_id = '{$code}' and R_p=1";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
           
           <div class="card_page">
           <?php echo $row['video_link']    ;?>
                
                </div>  
              

            <?php
        }
    } else {
        echo "No video found.";
    }

    // Close the database connection
    $connection->close();
    ?>
             
           
            </div>
            
            
            
            
            
        
        
        
        
        </div>
        

        
    
       


           



















    




               




        <a href="\Cvit-CVgenerator/user2/index.php"><button class="back_b">Back</button></a>  <a href="question.php?id=<?php echo $_GET['id'] ?>"><button class="dam_button">Take a Exam and Get certified</button></a>
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
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</html>