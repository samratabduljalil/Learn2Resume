<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<title>chose</title>
</head>
<body>
   



  


<h1 class="text-center text-warning">Choose CV tamplate</h1>
    <div class="container">
<div class="contain">



<?php
    include('connection.php');
  session_start();
    if(isset($_SESSION['user'])){
    
    
   
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM cv_template";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>

<div class="card">

<a href="\Cvit-CVgenerator\admin/<?php echo $row['link']?>?id=<?php echo $_SESSION['id']?>&&temp=\Cvit-CVgenerator/admin/<?php echo $row['link']?>&&temp2=<?php echo $row['link']?>&&css=\Cvit-CVgenerator\admin/<?php echo $row['css']?>"><img src="\Cvit-CVgenerator\admin/<?php echo $row['image']?>" alt="" class="img-t"></a>
</div>
   
    
    
    <?php
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $connection->close();
    ?>
    













</div>



    </div>

    <a href="\user2\index.php"><button class="back_b">Back</button></a>


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

</body>
</html>