<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>checkout</title>
</head>
<body>
    
    <nav>
        <ul>
          
          <li><a href="#Home">Home</a></li>
          <li><a href="#Service">Service</a></li>
          <li><a href="#Home">Home</a></li>
          <?php if(isset($_SESSION['name'] )) { ?>
          <li><a href="\user2\index.php"><?php echo $_SESSION['name'] ?></a></li>
          <?php }else{
                    ?>
           <li><a href="signup.php">SignUp/Login</a></li>
           <?php }?>
  
  
  
        </ul>
      </nav>

<?php
include('connection.php');
 $sql="SELECT * FROM `course` WHERE ID='{$_GET['id']}'";
 $result = $connection->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
      
   

?>




<div class="checkout">
<div class="card">
<h2>Course Name :</h2>

<h2>Course code :</h2>
<h2>Course Fee :</h2>

</div>
<div class="card">
  <h2 class="space"><?php echo $row['Name'] ?></h2>
  <h2 class="space"><?php echo $row['course_code'] ?></h2>
  <h2 class="space"><?php echo $row['fee'] ?></h2>
  <hr>
  <div class="con">
  <div class="card2">
<h2>Tax</h2>
<hr>
<?php $total=($row['fee']*.02)+$row['fee'] ?>
<h2>Total</h2>
  </div>
  <div class="card2">
    <h2 class="space">2%</h2>
    <form action="sslapi.php" method="post">
    <hr>
    <h2 class="space" ><?php echo $total ?>bdt</h2>
<input type="text" name="total" id="hide" value="<?php echo $total ?>">
<input type="text" name="course_id" id="hide" value="<?php echo $_GET['id'] ?>">
<?php 
      }
    
    $connection->close();
  }?>
  </div>
</div>
  </div>
 
</div>


<button type="submit" class="check">Checkout</button>
</form>
<a href="\Cvit-CVgenerator\course\index.php"><button class="cancel">Cancel</button></a>


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



