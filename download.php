
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CVit</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <?php session_start()?>
    <nav>
      <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="#Service">service</a></li>
        <li><a href="admin/admn_dashboard.html">Contact Us</a></li>
        <?php if(isset($_SESSION['name'] )) { ?>
        <li><a href="\user\index.php"><?php echo $_SESSION['name'] ?></a></li>
        <?php }else{
                  ?>
         <li><a href="signup.php">SignUp/Login</a></li>
         <?php }?>



      </ul>
    </nav>

    <section id="Home">
      <div class="Home_container">
        <div class="Home_contain">
         
           
        
            <button class="d_button">Download</button>
        </div>
      </div>
    </section>
   
    <button class="d_button">Download</button>
    
    </script>
  </body>
</html>



<?php
sleep(3);



?>