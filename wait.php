


<?php
echo '<!DOCTYPE html>
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
        <li><a href="/index.php#Home">Home</a></li>
        <li><a href="#Service">service</a></li>
        <li><a href="admin/admn_dashboard.html">Contact Us</a></li>
        <?php if(isset($_SESSION["name"] )) { ?>
        <li><a href="\user\index.php"><?php echo $_SESSION["name"] ?></a></li>
        <?php }else{
                  ?>
         <li><a href="signup.php">SignUp/Login</a></li>
         <?php }?>



      </ul>
    </nav>

    <section id="Home">
      <div class="Home_container">
        <div class="Home_contain">
          
          <div class="Home_card">
            <div class="Home_moto_flex">
            <div class="moto"><samp></samp> Uploading <span id="element"></span></div>
        </div>
          </div>
         
          <img src="\img\load-36.gif" alt="">
         
        </div>
      </div>
    </section>
   

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed("#element", {
        strings: ["......"],
        typeSpeed: 1000,
        backSpeed: 1,
        loop: true,
        showCursor: false,
      
      });
    </script>

  </body>
</html>';

?>
<?php




sleep(3);
header("location: \cv_templates/t7.php");
?>

